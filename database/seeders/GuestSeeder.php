<?php

namespace Database\Seeders;

use App\Models\Guest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Guest::create([
            'name' => 'Test User',
            'email' => 'kesiddewa600@gmail.com',
            'password' => bcrypt('123'),
            'guest_type' => 'Admin'
        ]);
    }
}
