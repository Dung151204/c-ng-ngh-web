<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id(); // Mã học sinh (Primary Key)
            $table->string('first_name', 50); // Tên học sinh
            $table->string('last_name', 58);  // Họ đệm
            $table->date('date_of_birth');    // Ngày sinh
            $table->string('parent_phone', 29); // Số điện thoại phụ huynh
            $table->unsignedBigInteger('class_id'); // Khóa ngoại tham chiếu đến bảng classes
            $table->timestamps(); // created_at và updated_at

            // Định nghĩa khóa ngoại
            $table->foreign('class_id')->references('id')->on('classes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
