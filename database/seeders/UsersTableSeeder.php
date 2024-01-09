<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name'      => 'Admin',
            'username'  => 'admin',
            'email'     => 'admin@example.com',
            'password'  => bcrypt('password'),
            'type'      => User::ADMIN,
        ]);

        User::factory()->create([
            'name'      => 'Chelsey Jia',
            'username'  => 'chelsey',
            'email'     => 'chelsey@afriend.com',
            'password'  => bcrypt('password'),
            'type'      => User::DEFAULT,
        ]);

        User::factory()->create([
            'name'      => 'Dr Fara',
            'username'  => 'fara',
            'email'     => 'fara@afriend.com',
            'password'  => bcrypt('counsellor'),
            'type'      => User::COUNSELLOR,
        ]);

        User::factory()->count(10)->create();
    }
}
