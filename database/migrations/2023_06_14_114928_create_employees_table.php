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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('fName')->comment('First Name');
            $table->string('lName')->comment('Last Name');
            $table->string('contact_number')->comment('Contact Number');
            $table->string('email')->nullable()->comment('Email');
            $table->string('profileImage')->nullable()->comment('Profile Image');
            $table->string('gender')->nullable()->comment('Gender');
            $table->string('address')->nullable()->comment('Address');
            $table->string('join_of_date')->nullable()->comment('Date Of Join To Company');
            $table->string('status')->comment('Active/Inactive');
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
        Schema::dropIfExists('employees');
    }
};
