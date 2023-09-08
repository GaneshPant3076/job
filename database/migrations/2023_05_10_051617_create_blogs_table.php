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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title',500);
            $table->string('type',500);
            $table->integer('c_count')->nullable();
            $table->string('article_content',2000)->nullable();
            $table->integer('l_count')->nullable();
            $table->string('c_author')->nullable();
            $table->string('c_content',500)->nullable();
            $table->string('author_name')->nullable();
            $table->string('d_author',500)->nullable();

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
        Schema::dropIfExists('blogs');
    }
};
