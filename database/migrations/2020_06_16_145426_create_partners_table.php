<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->string('partner_id')->unique();
            $table->string('partner_name');
            $table->string('email')->unique();
            $table->string('payment_email')->unique();
            $table->string('partner_type');
            $table->string('type_description');
            $table->string('state');
            $table->string('lga');
            $table->string('city');
            $table->string('address');
            $table->string('telephone1')->unique();
            $table->string('telephone2')->unique();
            $table->string('slug')->nullable();
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
        Schema::dropIfExists('partners');
    }
}
