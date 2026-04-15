<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('posts', function (Blueprint $table) {
        $table->id();
        
        // Thêm các dòng này để định nghĩa bài viết:
        $table->string('title');        // Tiêu đề bài viết (Ví dụ: "Cẩm nang du lịch Huế")
        $table->string('slug')->unique(); // Đường dẫn thân thiện (Ví dụ: cam-nang-du-lich-hue)
        $table->text('content');       // Nội dung chi tiết bài viết
        $table->string('image')->nullable(); // Ảnh đại diện cho bài viết (có thể để trống)
        
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
