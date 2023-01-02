<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("nationality")->nullable();
            $table->string("gender")->nullable();
            $table->string("email")->nullable();
            $table->string("phone")->nullable();
            $table->string("address")->nullable();
            $table->string("zila")->nullable();
            $table->string("profile_pic")->nullable();
            $table->string("birth_date")->nullable();
            $table->string("blood_group")->nullable();
            $table->string("father_name")->nullable();
            $table->string("mother_name")->nullable();
            $table->string("nid_no")->nullable();
            $table->string("education_year")->nullable();
            $table->string("registration_id")->nullable();
            $table->string("password")->nullable();
            $table->string("t_shirt_size")->nullable();
            $table->integer("Student_type")->default(1); //previous Student= 1; current student=2
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
        Schema::dropIfExists('students');
    }
};
