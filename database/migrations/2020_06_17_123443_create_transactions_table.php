<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->Integer('quantity_dispatched');
            $table->string('product_name');
            $table->string('partner_name');
            $table->string('partner_telephone1');
            $table->string('vendor_name');
            $table->string('vendor_phone');
            $table->string('vendor_plate_number');
            $table->string('transaction_ref')->unique();

            $table->enum('delivery_status',['pending', 'delivered'])->default('pending');
            
            $table->boolean('acknowledged')->default(false);
            $table->string('acknowledged_by')->nullable();

            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');

            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedBigInteger('partner_id');    
            $table->foreign('partner_id')->references('id')->on('partners');

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
        Schema::dropIfExists('transactions');
    }
}
