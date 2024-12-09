<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str; // Thêm thư viện Str để tạo chuỗi ngẫu nhiên

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Dùng DB facade để chèn dữ liệu vào bảng posts
        DB::table('posts')->insert([
            'title' => 'Post 1', // Tiêu đề bài viết
            'content' => 'This is the content for post 1.', // Nội dung bài viết
            'created_at' => now(), // Thời gian tạo
            'updated_at' => now(), // Thời gian cập nhật
        ]);

        DB::table('posts')->insert([
            'title' => 'Post 2',
            'content' => 'This is the content for post 2.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Thêm nhiều bài viết khác nếu muốn
    }
}
