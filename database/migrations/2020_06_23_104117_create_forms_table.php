<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->longText('content')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->unsignedBigInteger('program_id')->nullable();
            $table->unsignedBigInteger('sub_category_id')->nullable();
            $table->unsignedBigInteger('survey_type_id')->nullable();
            $table->foreign('program_id')->references('id')->on('programs');
            $table->foreign('sub_category_id')->references('id')->on('subcategories');
            $table->foreign('survey_type_id')->references('id')->on('survey_types');
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
        Schema::dropIfExists('forms');
    }
}
