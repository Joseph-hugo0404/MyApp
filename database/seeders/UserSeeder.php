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
                'name' => 'Jay Ajoc',
                'email' => 'jayajoco@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('ajoc123')
            ],
            [
                'name' => 'Michael Jordan',
                'email' => 'michael@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('jordan123')
            ],
            [
                'name' => 'Jay AJjoc ll',
                'email' => 'jay@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('jay123')
            ],
        ];

        foreach($users as $user){
            User::create($user);
        }
    }
}
