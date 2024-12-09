<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComputersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('computers')->insert([
            [
                'computer_name' => 'Labl-PC85',
                'model' => 'Dell Optiplex 7999',
                'operating_system' => 'Windows 10 Pro',
                'processor' => 'Intel Core i5-11489',
                'memory' => 8,
                'available' => true,
            ],
            [
                'computer_name' => 'Labl-PC86',
                'model' => 'HP ProBook 450 G7',
                'operating_system' => 'Windows 10 Home',
                'processor' => 'Intel Core i7-10750H',
                'memory' => 16,
                'available' => false,
            ],
        ]);
    }
}
