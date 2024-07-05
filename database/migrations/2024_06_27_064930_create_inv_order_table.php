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
        Schema::create('inv_order', function (Blueprint $table) {
            $table->id('Order_id');
            $table->string('order_number');
            $table->string('Item_id');
            $table->string('Sup_id');
            $table->string('Qty');
            $table->string('UOM');
            $table->string('order_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inv_order');
    }
};
