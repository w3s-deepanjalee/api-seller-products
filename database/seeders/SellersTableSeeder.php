<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SellersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sellers')->delete();
        
        \DB::table('sellers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'seller_name' => 'seller 1',
                'seller_email' => 'seller1@gmail.com',
                'seller_mobile' => '0770000000',
                'created_at' => '2023-05-03 22:53:17',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'seller_name' => 'seller 2',
                'seller_email' => 'seller2@gmail.com',
                'seller_mobile' => '0774744441',
                'created_at' => '2023-05-03 22:53:39',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}