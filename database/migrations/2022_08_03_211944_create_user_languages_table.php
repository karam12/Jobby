<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('user_languages', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
            $table->foreignId('language_id')->constrained();
            $table->tinyInteger('level')->unsigned();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_languages');
    }
};
