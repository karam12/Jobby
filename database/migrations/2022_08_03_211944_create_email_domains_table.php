<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('email_domains', function (Blueprint $table) {
            $table->id();
            $table->string('domain');
            $table->boolean('black_listed');
        });
    }

    public function down()
    {
        Schema::dropIfExists('email_domains');
    }
};
