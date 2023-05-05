<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'product_name' => 'test product 1',
                'image_url' => 'https://img.freepik.com/premium-psd/bottle-product-mockup-psd-beauty-packaging_53876-130082.jpg',
                'description' => 'test Description',
                'created_at' => '2023-05-03 22:33:36',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'product_name' => 'test product 2',
                'image_url' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8dGVjaCUyMHByb2R1Y3R8ZW58MHx8MHx8&w=1000&q=80',
                'description' => 'test description 2',
                'created_at' => '2023-05-03 22:34:28',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}