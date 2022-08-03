<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        DB::table('schools')->insert([
            ['name' => 'MIT'],
            ['name' => 'Harvard'],
            ['name' => 'Stanford'],
            ['name' => 'Yale'],
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('schools');
    }
};
