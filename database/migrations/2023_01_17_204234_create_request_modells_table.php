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
            $table->string('status')->default('beantragt'); //depending on status value request will be displayed on another page
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
            $table->string('voucher')->nullable(); //type of voucher  - by default: null
            $table->string('last')->nullable(); //last handing over of voucher  - by default: null
            $table->string('next')->nullable(); //next handing over of voucher - by default: null
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
