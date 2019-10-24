<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'                 => 1,
                'name'               => 'Admin',
                'email'              => 'admin@admin.com',
                'password'           => '$2y$10$KLEh2w4Tv8ZKtB7DwiupN.DL/ZvcIQHbk5/S/P2NZeDqU4qwK3Kci',
                'remember_token'     => null,
                'approved'           => 1,
                'verified'           => 1,
                'verified_at'        => '2019-10-24 22:03:12',
                'verification_token' => '',
            ],
        ];

        User::insert($users);
    }
}
