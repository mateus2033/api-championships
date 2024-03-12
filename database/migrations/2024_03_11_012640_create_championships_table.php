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
        Schema::create('championships', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->string('tittle_championship',150);
            $table->string('city',150);
            $table->string('state',2);
            $table->date('date_of_Realization');
            $table->string('about_event');
            $table->string('gymnasium',200);
            $table->string('general_information',255);
            $table->string('public_entrance',200)->nullable();
            $table->enum('type',['kimono','no-gi']);
            $table->enum('phase',['open_for_subscriptions','fight_Keys','results']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('championships');
    }
};
