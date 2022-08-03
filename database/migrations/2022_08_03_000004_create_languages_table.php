<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('languages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code', 2);
        });

        DB::table('languages')->insert([
            ['name' => 'English', 'code' => 'en'],
            ['name' => 'German', 'code' => 'de'],
            ['name' => 'French', 'code' => 'fr'],
            ['name' => 'Flamish', 'code' => 'nl']
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('languages');
    }
};
