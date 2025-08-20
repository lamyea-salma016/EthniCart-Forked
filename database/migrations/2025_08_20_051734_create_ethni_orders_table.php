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
        Schema::create('ethni_orders', function (Blueprint $table) {
    $table->id();
    $table->unsignedBigInteger('user_id')->nullable(); // customer
    $table->unsignedBigInteger('seller_id'); // product owner
    $table->unsignedBigInteger('product_id');
    $table->string('product_name');
    $table->decimal('price', 10, 2);
    $table->integer('quantity');
    $table->decimal('subtotal', 10, 2); // price * qty
    $table->string('payment_method')->default('COD'); // Cash on Delivery
    $table->string('status')->default('pending'); // pending, delivered etc.
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ethni_orders');
    }
};
