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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('title_en');
            $table->string('title_ar')->nullable();
            $table->string('description_en');
            $table->string('description_ar')->nullable();
            $table->string('detail_image');
            $table->string('detail_title_en');
            $table->string('detail_title_ar')->nullable();
            $table->string('detail_description_en');
            $table->string('detail_description_ar')->nullable();
            $table->enum('status' , ['ACTIVE' , 'NACTIVE']);
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
        Schema::dropIfExists('services');
    }
};
