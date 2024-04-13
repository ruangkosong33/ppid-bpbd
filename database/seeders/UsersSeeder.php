<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
               'name'=>'superadmin',
               'email'=>'super@mail.com',
               'role'=>2,
               'password'=> Hash::make('S4m4rind4~,./'),
            ],
            [
               'name'=>'admin',
               'email'=>'admin@mail.com',
               'role'=>1,
               'password'=> Hash::make('P4ssw0rd,./'),
            ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
