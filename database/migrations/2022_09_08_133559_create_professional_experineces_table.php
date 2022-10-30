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
        Schema::create('professional_experineces', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("student_id");
            $table->string("profession")->nullable();
            $table->string("designation")->nullable();
            $table->string("institute_name")->nullable();
            $table->string("onnanno")->nullable();
            $table->string("industry")->nullable();
            $table->string("office_phone")->nullable();
            $table->string("office_address")->nullable();
            $table->string("office_email")->nullable();
            $table->timestamps();
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professional_experineces');
    }
};
