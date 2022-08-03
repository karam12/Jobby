<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('announcement_sectors', function (Blueprint $table) {
            $table->foreignId('announcement_id')->constrained();
            $table->foreignId('sector_id')->constrained();
            $table->tinyInteger('required_experience_level')->unsigned();
        });
    }

    public function down()
    {
        Schema::dropIfExists('announcement_sectors');
    }
};
