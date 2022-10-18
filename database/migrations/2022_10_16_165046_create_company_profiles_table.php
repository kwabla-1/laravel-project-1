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
            $table->string('years_in_business');
            $table->string('permanent_workers');
            $table->string('working_days');
            $table->date('year_established');
            $table->date('license_img_path');
            $table->date('certificate_img_path');
            $table->date('company_size');
            $table->date('opening_closing_time');
            $table->date('summary_business_activities');
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('compay_profiles_id')->constrained('company_profiles')->onUpdate('cascade')->onDelete('cascade');

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
