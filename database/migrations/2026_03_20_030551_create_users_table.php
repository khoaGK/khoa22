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
        Schema::create('users', function (Blueprint $table) {
        $table->id();
        
        // --- Dán nội dung bảng Users từ sơ đồ vào đây ---
        $table->string('name', 45);
        $table->string('username', 45);
        $table->string('password', 45);
        $table->integer('role');
        // -----------------------------------------------

        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
