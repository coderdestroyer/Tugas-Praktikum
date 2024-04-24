<?php

namespace Database\Seeders;

use App\Models\Dosen2;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Dosen2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dosen2::factory(5)->create();
    }
}
