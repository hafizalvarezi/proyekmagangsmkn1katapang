<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=[
            [
                'username' => 'admin',
                'name' => 'ini adalah admin petshop',
                'email' => 'petshop@gmail.com',
                'password' => bcrypt('petshop1'),
            ]
            ];
            foreach ($user as $key => $value){
                User::create($value);
            }
    }
}
