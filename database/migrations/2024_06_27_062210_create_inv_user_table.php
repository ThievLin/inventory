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
        Schema::create('inv_user', function (Blueprint $table) {
            $table->id('U_id');
            $table->string('U_name');
            $table->string('sys_name');
            $table->string('password');
            $table->string('U_contact');
            $table->string('R_id');
            $table->string('status')->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inv_user');
    }
};
