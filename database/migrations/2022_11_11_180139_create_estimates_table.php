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
        Schema::create('estimates', function (Blueprint $table) {
            $table->id();
            $table->date('estimate_date');
            $table->string('estimate_number')->nullable();
            
            // reciver
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('receiver_name');
            $table->string('receiver_email');
            $table->string('receiver_number');
            $table->string('reciver_address')->nullable();
            //description
            $table->string('currency')->default('GH');

            $table->string('discount_type')->nullable();
            $table->integer('discount_amount');

            //tax
            $table->string('tax_type')->nullable();
            $table->string('tax_label')->nullable();



            $table->text('item_description');
            $table->string('rate');
            $table->integer('quantity');
            $table->text('addition_details')->nullable();
            $table->text('notes')->nullable();

            $table->string('status')->default('pending');

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
        Schema::dropIfExists('estimates');
    }
};
