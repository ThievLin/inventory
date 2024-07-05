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
        Schema::create('inv_owner', function (Blueprint $table) {
            $table->id('O_id');
            $table->string('O_name');
            $table->string('O_contact')->nullable();
            $table->string('O_email')->unique();
            $table->string('O_address')->nullable();
            $table->string('status')->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inv_owner');
    }
};
