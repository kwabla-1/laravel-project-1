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
        Schema::create('company_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('postal_address');
            $table->string('location');
            $table->string('telephone_1');
            $table->string('telephone_2')->nullable();
            $table->string('contact_person');
            $table->string('company_url');
            $table->string('corperate_email');
            $table->string('company_services');
            $table->string('type_of_businesss');
            $table->string('permanent_workers');
            $table->string('working_days');
            $table->date('year_established');
            $table->string('company_size');
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
        Schema::dropIfExists('company_profiles');
    }
};
