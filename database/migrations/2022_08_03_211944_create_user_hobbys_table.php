<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('user_hobbys', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
            $table->foreignId('hobby_id')->constrained();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_hobbys');
    }
};
