<?php
// database/migrations/YYYY_MM_DD_create_shipping_information_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingInformationTable extends Migration
{
    public function up()
    {
        Schema::create('shipping_information', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cart_id');
            $table->string('fullname');
            $table->string('address');
            $table->string('postalcode');
            $table->string('phone');
            $table->timestamps();

            $table->foreign('cart_id')->references('id')->on('cart')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('shipping_information');
    }
}
