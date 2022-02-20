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
        Schema::create('school_information', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('title');
            $table->string('vission');
            $table->text('mission');
            $table->string('logo');
            $table->string('instagram');
            $table->string('twitter');
            $table->string('facebook');
            $table->string('fax', 20);
            $table->string('address');
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
        Schema::dropIfExists('school_information');
    }
};
