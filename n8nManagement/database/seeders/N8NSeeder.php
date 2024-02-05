<?php

namespace Database\Seeders;

use App\Models\N8N;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class N8NSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        N8N::factory()->count(25)->create();
    }
}
