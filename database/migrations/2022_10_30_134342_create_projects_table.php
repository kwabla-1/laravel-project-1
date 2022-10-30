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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_name');
            $table->foreignId('profile_id')->constrained('profiles')->onDelete('cascade');
            $table->date('start_date');
            $table->date('end_date');
            $table->text('project_description');
            $table->string('comments');
            $table->string('project_photos_path');
            $table->string('location');
            $table->string('client_name')->nullable();
            $table->string('project_size')->default('normal');
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
        Schema::dropIfExists('projects');
    }
};
