<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->string('street');
            $table->string('box');
            $table->string('zip_code');
            $table->string('city');
            $table->string('country');
            $table->decimal('latitude', 6, 4);
            $table->decimal('longitude', 7, 4);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('addresses');
    }
};
