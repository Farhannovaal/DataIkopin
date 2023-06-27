<?php

namespace Database\Seeders;
use App\Models\dosen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class dosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        dosen::factory()->count(200)->create();
    }
}
