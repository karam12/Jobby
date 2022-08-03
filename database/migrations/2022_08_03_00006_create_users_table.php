<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profil_id')->constrained();
            $table->foreignId('gender_id')->constrained();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->text('description');
            $table->boolean('contact_phone');
            $table->boolean('contact_email');
            $table->decimal('hourly_cost', 4, 2)->nullable();
            $table->foreignId('travel_mode_id')->constrained();
            $table->boolean('driver_license');
            $table->date('birth_date');
            $table->string('phone');
            $table->string('nationality');
            $table->foreignId('native_language_id')->constrained('languages');
            $table->foreignId('address_id')->constrained();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('last_connection')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
