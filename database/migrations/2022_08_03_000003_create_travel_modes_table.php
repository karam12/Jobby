<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('travel_modes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        DB::table('travel_modes')->insert([
            ['name' => 'car'],
            ['name' => 'train'],
            ['name' => 'bus'],
            ['name' => 'bike'],
            ['name' => 'foot'],
            ['name' => 'boat (rich ppl)'],
            ['name' => 'plane (SUPER rich ppl :o)'],
            ['name' => 'other'],
            ['name' => 'I don\'t move, I\'m a static object'],
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('travel_modes');
    }
};
