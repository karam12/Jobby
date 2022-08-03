<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('user_educations', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
            $table->foreignId('degree_id')->constrained();
            $table->foreignId('school_id')->constrained();
            $table->date('start');
            $table->date('end')->nullable();
            $table->tinyInteger('current_year')->unsigned()->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_educations');
    }
};
