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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('location');
            $table->string('company')->nullable();
            $table->string('type')->nullable();
            $table->string('description',2000)->nullable();
            $table->string('responsibility',2000)->nullable();
            $table->string('qualification',2000)->nullable();
            $table->string('benefits',2000)->nullable();
            $table->integer('no_of_vacancy');
            $table->string('salary')->nullable();
            $table->string('gender');
            $table->string('category');
            $table->string('experiance',2000)->nullable();
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
        Schema::dropIfExists('jobs');
    }
};
