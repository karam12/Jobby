<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('hobbies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        DB::table('hobbies')->insert([
            ['name' => 'coding'],
            ['name' => 'reading'],
            ['name' => 'writing'],
            ['name' => 'playing'],
            ['name' => 'sleeping'],
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('hobbies');
    }
};
