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
        Schema::create('individual_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('mobile_number');
            $table->string('profile_picture')->nullable();
            $table->string('about_me')->nullable();
            $table->string('country');
            $table->string('location');
            $table->string('address');
            $table->string('city');
            $table->string('school_name')->nullable();
            $table->date('school_completion_year')->nullable();
            $table->string('profession');
            $table->string('certificates')->nullable();
            $table->string('experience_level');
            $table->string('languages');
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('individual_profiles_id')->constrained('individual_profiles')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('individual_profiles');
    }
};
