<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SellerProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('seller_products')->delete();
        
        \DB::table('seller_products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'seller_id' => 1,
                'product_id' => 1,
                'price' => 2000.0,
                'stock' => 10,
                'created_at' => '2023-05-03 23:31:50',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'seller_id' => 2,
                'product_id' => 1,
                'price' => 3000.0,
                'stock' => 10,
                'created_at' => '2023-05-03 23:32:11',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'seller_id' => 1,
                'product_id' => 2,
                'price' => 2500.0,
                'stock' => 20,
                'created_at' => '2023-05-03 23:32:37',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'seller_id' => 2,
                'product_id' => 2,
                'price' => 2100.0,
                'stock' => 10,
                'created_at' => '2023-05-03 23:33:09',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}