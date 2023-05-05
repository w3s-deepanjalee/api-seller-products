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
                'name' => 'seller 1',
                'email' => 'seller1@gmail.com',
                'mobile' => '0770000001',
                'address' => 'Piliyandala',
                'created_at' => '2023-05-05 17:52:24',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'seller 2',
                'email' => 'seller2@gmail.com',
                'mobile' => '0770000002',
                'address' => 'Moratuwa',
                'created_at' => '2023-05-05 17:52:58',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}