<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('user_job_types', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
            $table->foreignId('job_type_id')->constrained();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_job_types');
    }
};
