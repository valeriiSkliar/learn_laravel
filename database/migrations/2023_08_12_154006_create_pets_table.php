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
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->integer('age')->nullable();
            $table->string('color')->nullable();
            $table->string('breed')->nullable();
            $table->date('birth_date')->nullable();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('kind_id');
            $table->boolean('is_neutered')->default(false);
            $table->boolean('is_vaccinated')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
