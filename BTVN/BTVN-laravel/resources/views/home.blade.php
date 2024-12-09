@extends('layouts.app')  <!-- Kế thừa từ layout chung của ứng dụng -->

@section('title', 'Trang Chủ')  <!-- Đặt tiêu đề cho trang -->

@section('content')
    <h1>Danh sách bài viết</h1>

    @foreach($posts as $post)
        <div>
            <p>{{ $post->content }}</p>  <!-- Hiển thị nội dung bài viết -->
        </div>
    @endforeach
@endsection
