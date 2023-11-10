<?php

namespace Database\Seeders;

use App\Models\Work;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $works = [
            ['name' => 'Work 1'],
            ['name' => 'Work 2'],
            ['name' => 'Work 3'],
            // Add more works as needed
        ];

        foreach ($works as $work) {
            Work::create($work);
        }
    }
}
