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
        Schema::create('dieticians', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('login_id');
            $table->string('name');
            $table->string('email');
            $table->string('address');
            $table->string('location');
            $table->text('qualification');
            $table->text('certificate');
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dieticians');
    }
};
