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
        Schema::create('fight_keys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('range');
            $table->string('weight');
            $table->integer('championship_code_id');
            $table->foreign('championship_code_id')->references('id')->on('championships');
            $table->integer('athletes_id');
            $table->foreign('athletes_id')->references('id')->on('athletes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fight_keys');
    }
};
