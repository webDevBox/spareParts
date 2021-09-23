<?php

namespace Database\Seeders;

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
        User::updateOrInsert([
            'name' => 'Khubaib',
            'user' => 'admin',
            'password' => bcrypt(123456),
            'role' => 1
        ]);
    }
}
