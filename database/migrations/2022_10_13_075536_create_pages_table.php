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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('page_title');
            $table->string('slug')->unique()->nullable();
            $table->text('meta_title')->nullable();
            $table->text('meta_desc')->nullable();
            // $table->text('meta_keywords')->nullable();
            // $table->string('banner_title')->nullable();
            // $table->text('banner_desc')->nullable();
            // $table->string('banner_img')->nullable();
            // $table->string('url')->nullable();
            $table->boolean('is_main')->default(0);
            $table->boolean('status')->default(1);
            $table->timestamps();
        });

        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('page_id')->constrained();
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->text('content')->nullable();
            $table->text('rich_text')->nullable();
            $table->string('img')->nullable();
            $table->string('cta_text')->nullable();
            $table->string('cta_link')->nullable();
            $table->tinyInteger('layout')->default(0);
            $table->boolean('status')->default(1);
            $table->tinyInteger('sort')->default(1);
        });

        Schema::create('section_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('section_id')->constrained();
            $table->string('img');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
        Schema::dropIfExists('section_images');
        Schema::dropIfExists('sections');
    }
};
