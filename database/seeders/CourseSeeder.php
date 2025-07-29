<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('courses')->insert([
            [
                'title' => 'Laravel Basics',
                'description' => 'Introduction to Laravel framework.',
                'price' => 1500,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Advanced PHP',
                'description' => 'Deep dive into core PHP concepts.',
                'price' => 2000,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'JavaScript Essentials',
                'description' => 'Learn the fundamentals of JavaScript.',
                'price' => 1200,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
