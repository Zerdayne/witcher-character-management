<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('race_advantages', function (Blueprint $table) {
            $table->foreignId('race_id')->constrained();
            $table->foreignId('skill_id')->constrained();
            $table->enum('opreator', ['addition', 'subtraction']);
            $table->integer('value');

            $table->timestamps();

            $table->primary(['race_id', 'skill_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('race_advantages');
    }
};
