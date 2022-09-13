<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->enum('gender', ['male', 'female']);
            $table->integer('age');
            $table->integer('wound_threshold');
            $table->integer('hp');
            $table->integer('stamina');
            $table->integer('determination');
            $table->integer('improvement_points');
            $table->foreignId('race_id')->constrained();
            $table->foreignId('profession_id')->constrained();
            $table->foreignId('user_id')->constrained();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('characters');
    }
};
