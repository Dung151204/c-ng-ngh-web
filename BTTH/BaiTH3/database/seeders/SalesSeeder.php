<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sales')->insert([
            [
                'medicine_id' => 1,
                'quantity' => 10,
                'sale_date' => now(),
                'customer_phone' => '0123456789',
            ],
            [
                'medicine_id' => 2,
                'quantity' => 5,
                'sale_date' => now(),
                'customer_phone' => '0987654321',
            ],
        ]);
    }
}
