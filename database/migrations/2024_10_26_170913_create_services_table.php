<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('heading')->nullable();
            $table->unsignedBigInteger('cat_id');
            $table->unsignedBigInteger('plan_id');
            $table->enum('status',['publish','draft'])->default('publish');
            $table->string('icon')->nullable();
            $table->text('description')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('image')->nullable();

            //Relationship
            $table->foreign('cat_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('plan_id')->references('id')->on('price_plans')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
