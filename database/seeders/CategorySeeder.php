<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'UI/UX',
            ],
            [
                'name' => 'BC/BIC',
            ],
            [
                'name' => 'CTF',
            ],
            [
                'name' => 'Software Development',
            ],
            [
                'name' => 'Poster',
            ],
            [
                'name' => 'Essay',
            ],
            [
                'name' => 'Debat',
            ]
        ];

        foreach ($data as $categories) {
            Category::create($categories);
        }
    }
}
