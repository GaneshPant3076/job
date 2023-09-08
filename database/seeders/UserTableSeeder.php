<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Ganesh pant',
                'email' => 'ganeshpant3076@gmail.com',
                'password' => bcrypt("123456789"),


            ],
            ];
        User::truncate();
        foreach($users as $user) {
            User::create($user);
        }
    }
}
