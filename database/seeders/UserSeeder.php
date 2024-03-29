<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(5)->unverified()->create();
        User::factory(5)->create();
        User::create([
            'name' => 'Clark Tolosa',
            'email' => 'clarktolosa@gmail.com',
            'password' => 'password',
        ]);
    }
}
