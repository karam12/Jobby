<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('degrees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->tinyInteger('level')->unsigned();
        });
    }

    public function down()
    {
        Schema::dropIfExists('degrees');
    }
};
