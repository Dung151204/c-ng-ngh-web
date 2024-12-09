<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'date_of_birth' => '2015-05-15',
                'parent_phone' => '0123456789',
                'class_id' => 1, // Giả sử lớp có ID = 1
            ],
            [
                'first_name' => 'Jane',
                'last_name' => 'Smith',
                'date_of_birth' => '2016-03-25',
                'parent_phone' => '0987654321',
                'class_id' => 2, // Giả sử lớp có ID = 2
            ],
        ]);
    }
}
