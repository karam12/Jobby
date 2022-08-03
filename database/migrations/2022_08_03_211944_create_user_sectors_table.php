<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('user_sectors', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
            $table->foreignId('sector_id')->constrained();
            $table->tinyInteger('preference_level')->unsigned();
            $table->tinyInteger('experience_level')->unsigned();
            $table->text('description')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_sectors');
    }
};
