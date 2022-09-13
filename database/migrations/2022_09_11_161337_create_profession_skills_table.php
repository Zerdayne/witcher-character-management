<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('profession_skills', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->foreignId('profession_id')->constrained();
            $table->foreignId('attribute_id')->constrained();
            $table->foreignId('required_profession_skill_id')->constrained('profession_skills');
            $table->integer('required_profession_skill_value');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('profession_skills');
    }
};
