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
        Schema::create('medicines', function (Blueprint $table) {
            $table->bigIncrements('medicine_id'); // Mã thuốc (Primary Key)
            $table->string('name', 255);         // Tên thuốc
            $table->string('brand', 198)->nullable(); // Thương hiệu (tùy chọn)
            $table->string('dosage', 59);        // Thông tin liều lượng
            $table->string('form', 50);          // Dạng thuốc
            $table->decimal('price', 18, 2);     // Giá trên một đơn vị thuốc
            $table->integer('stock');            // Số lượng tồn trong kho
            $table->timestamps();                // Timestamps (created_at và updated_at)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicines');
    }
};
