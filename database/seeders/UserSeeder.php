<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Joseph Hugo',
                'email' => 'josephjhugo@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('hugo123')
            ],
            [
                'name' => 'Michael Porter',
                'email' => 'michael@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('porter123')
            ],
            [
                'name' => 'Justin Timberlake',
                'email' => 'justin@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('justin123')
            ],
        ];

        foreach($users as $user){
            User::create($user);
        }
    }
}
