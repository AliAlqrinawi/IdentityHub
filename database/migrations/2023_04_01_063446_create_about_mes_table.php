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
        Schema::create('about', function (Blueprint $table) {
            $table->id();
            $table->string('name_en');
            $table->string('name_ar');
            $table->string('Birthday');
            $table->string('Mail');
            $table->string('Phone');
            $table->string('Address_en');
            $table->string('Address_ar');
            $table->string('Nationality_en');
            $table->string('Nationality_ar');
            $table->string('job_title_en');
            $table->string('job_title_ar');
            $table->string('job_escription_en');
            $table->string('job_escription_ar');
            $table->mediumText('about_en');
            $table->mediumText('about_ar');
            $table->string('cv');
            $table->string('photo');
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
        Schema::dropIfExists('about_mes');
    }
};