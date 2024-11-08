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
        Schema::create('price_plans', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('price');
            $table->enum('type',['monthly','yearly']);
            $table->unsignedBigInteger('cat_id');
            $table->text('feature');
            $table->enum('status',['publish','draft']);
            $table->string('position')->nullable();

            // RelationShip
            $table->foreign('cat_id')->references('id')->on('categories')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('price_plans');
    }
};
