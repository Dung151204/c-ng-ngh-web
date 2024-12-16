<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IssuesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('issues')->insert([
            [
                'computer_id' => 1, // Giả sử máy tính có ID = 1
                'reported_by' => 'John Doe',
                'reported_date' => now(),
                'description' => 'The computer is running very slow.',
                'urgency' => 'Medium',
                'status' => 'Open',
            ],
            [
                'computer_id' => 2, // Giả sử máy tính có ID = 2
                'reported_by' => 'Jane Smith',
                'reported_date' => now(),
                'description' => 'The screen is flickering.',
                'urgency' => 'High',
                'status' => 'In Progress',
            ],
        ]);
    }
}
