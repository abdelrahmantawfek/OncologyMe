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
        Schema::create('topics', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('post_id')->constrained('posts')->onUpdate('cascade')->onDelete('cascade');
            $table->string('title');
            $table->string('slug')->nullable();
            $table->boolean('is_parent')->default(0);
            $table->string('parent_id')->nullable();
            $table->string('parent_name')->nullable();
            $table->boolean('is_main')->default(0);
            $table->text('meta_title')->nullable();
            $table->text('meta_desc')->nullable();
            // $table->text('meta_keywords')->nullable();
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
        Schema::dropIfExists('topics');
    }
};
