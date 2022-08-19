<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'username' => 'huyenplt',
                'first_name' => 'Pham',
                'last_name' => 'Huyen',
                'email' => 'huyenpham@gmail.com',
                'isAdmin' => '1',           
                'isActive' => '0',           
                'password' => Hash::make('111111'),
            ],
            [
                'username' => 'testabc',
                'first_name' => 'Pham',
                'last_name' => 'Test',
                'email' => 'test@a.a',
                'isAdmin' => '0',           
                'isActive' => '0',           
                'password' => Hash::make('111111'),
            ]
        ]);
        User::factory()->count(20)->create();
    }
}
