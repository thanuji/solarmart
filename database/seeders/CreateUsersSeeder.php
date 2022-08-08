<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Admin',
               'email'=>'admin@solarmart.com',
               'role'=>'admin',
               'status'=>1,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Seller1',
               'email'=>'seller1@solarmart.com',
               'role'=>'seller',
               'status'=>1,
               'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'Buyer1',
                'email'=>'buyer1@solarmart.com',
                'role'=>'buyer',
                'status'=>1,
                'password'=> bcrypt('123456'),
             ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
