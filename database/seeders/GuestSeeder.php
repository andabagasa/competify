<?php

namespace Database\Seeders;

use App\Models\Guest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminData= [
            [
                'name' => 'Admin 1',
                'email' => 'kesiddewa600@gmail.com',
                'password' => bcrypt('123'),
                'guest_type' => 'Admin'
            ],
            [
                'name' => 'Admin 2',
                'email' => 'kesiddewa@gmail.com',
                'password' => bcrypt('123'),
                'guest_type' => 'Admin'
            ]
        ];

        foreach ($adminData as $data) {
            $adminGuest = Guest::create($data);

        DB::table('admins')->insert([
            'guest_id' => $adminGuest->guest_id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
    }
}

