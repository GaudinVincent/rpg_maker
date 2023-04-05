<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('group_id')->nullable()->references('id')->on('groups');
            $table->string('characterName')->unique();
            $table->text('description');
            $table->string('classe');
            $table->integer('mag');
            $table->integer('for');
            $table->integer('agi');
            $table->integer('int');
            $table->integer('pvs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characters');
    }
};