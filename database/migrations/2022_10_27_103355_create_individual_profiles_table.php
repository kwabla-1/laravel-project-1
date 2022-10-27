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
            $table->string('school_name')->nullable();
            $table->date('school_completion_year')->nullable();
            $table->string('profession');
            $table->string('certificates')->nullable();
            $table->string('licence')->nullable();
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
