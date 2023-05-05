<?php

use App\Http\Controllers\Api\CommonApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('products/{sellerProductId}', [CommonApiController::class, 'productDetails']);
Route::get('sellers/{sellerId}/products', [CommonApiController::class, 'getProductsBySeller']);
Route::get('products/{sellerProductId}/seller', [CommonApiController::class, 'getSellerByProduct']);

