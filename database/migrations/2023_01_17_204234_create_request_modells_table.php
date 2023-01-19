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
        Schema::create('request_modells', function (Blueprint $table) {
            //definition table columns
            $table->id();
            $table->string('firstname');
            $table->string('surname');
            $table->string('email');
            $table->string('brand'); //car brand
            $table->string('model');
            $table->string('hstn'); //manufacturer number
            $table->string('type');
            $table->string('cnstrYear'); //construction year
            $table->string('color'); //as hex
            $table->string('appointment')->nullable(); //by default: null
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
        Schema::dropIfExists('request_modells');
    }
};
