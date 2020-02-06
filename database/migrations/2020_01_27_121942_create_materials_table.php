<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('file');
            $table->unsignedBigInteger('subject_id');
            $table->string('subject_name')->nullable();
            $table->unsignedBigInteger('year_id');
            $table->string('year_name')->nullable();
            $table->timestamps();


            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');
            $table->foreign('year_id')->references('id')->on('years')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materials');
    }
}
