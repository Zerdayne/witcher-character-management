<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('character_skills', function (Blueprint $table) {
            $table->foreignId('character_id')->constrained();
            $table->foreignId('skill_id')->constrained();
            $table->integer('value');

            $table->timestamps();

            $table->primary(['character_id', 'skill_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('character_skills');
    }
};
