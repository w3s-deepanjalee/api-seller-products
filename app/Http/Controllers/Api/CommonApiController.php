<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\FrontApi\ProductSelectResource;
use App\Http\Resources\FrontApi\SellerProductsListResource;
use App\Http\Resources\FrontApi\SellerSelectResource;
use App\Models\Admin\SellerProduct;
use Illuminate\Http\Request;

class CommonApiController extends Controller
{
    public function productDetails($sellerProductId)
    {
        try {
            $sellerProductId = decrypt($sellerProductId);
            $sellerProduct = SellerProduct::find($sellerProductId);
            if ($sellerProduct) {
                return ProductSelectResource::make($sellerProduct);
            } else {
                return response()->json(['message' => 'Product not found'], 404);
            }
        } catch (\Exception $e) {
            return response()->json(['message' => 'Product not found'], 404);
        }
    }

    public function getProductsBySeller($sellerId)
    {
        try {
            $sellerId = decrypt($sellerId);
            $sellerProducts = SellerProduct::where('seller_id', $sellerId)->get();
            if ($sellerProducts) {
                return SellerProductsListResource::collection($sellerProducts);
            } else {

                return response()->json(['message' => 'Seller Product Not Found.'], 404);
            }
        } catch (\Exception $e) {
            return response()->json(['message' => 'Seller Product Not Found.'], 404);
        }
    }
    public function getSellerByProduct($sellerProductId)
    {
        try {
            $sellerProductId = decrypt($sellerProductId);
            $sellerProduct = SellerProduct::where('id', $sellerProductId)->first();
            if ($sellerProduct) {
                $seller = $sellerProduct->seller;

                return SellerSelectResource::make($seller);
            } else {
                return response()->json(['message' => 'Seller Not Found.'], 404);
            }
        } catch (\Exception $e) {
            return response()->json(['message' => 'Seller Not Found.'], 404);
        }
    }
}
