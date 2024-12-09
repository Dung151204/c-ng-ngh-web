<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedicinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medicines')->insert([
            [
                'name' => 'Paracetamol',
                'brand' => 'PharmaCo',
                'dosage' => '500mg tablets',
                'form' => 'Viên nén',
                'price' => 10000,
                'stock' => 200,
            ],
            [
                'name' => 'Ibuprofen',
                'brand' => 'HealthCare',
                'dosage' => '200mg capsules',
                'form' => 'Viên nang',
                'price' => 15000,
                'stock' => 150,
            ],
        ]);
    }
}
