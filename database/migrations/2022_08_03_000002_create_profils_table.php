<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('profils', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        DB::table('profils')->insert([
            ['name' => 'admin'],
            ['name' => 'student'],
            ['name' => 'comapany'],
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('profils');
    }
};
