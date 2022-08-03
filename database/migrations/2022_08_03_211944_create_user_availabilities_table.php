<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('user_availabilities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->enum('period', array('allways', 'week', 'week-end', 'vacations'));
            $table->enum('weekday', array('monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'))->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->time('start_time');
            $table->time('end_time')->nullable();
            $table->string('rrule')->nullable();
            $table->foreignId('address_id')->constrained();
            $table->tinyInteger('address_radius')->unsigned()->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_availabilities');
    }
};
