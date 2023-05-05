<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$y.VmHzGoUaMflHreAorynOwMEK441xHggWwJ3EZ98ZD9TNWkwSRxq',
                'remember_token' => NULL,
                'created_at' => '2023-05-05 16:25:11',
                'updated_at' => '2023-05-05 16:25:15',
            ),
        ));
        
        
    }
}