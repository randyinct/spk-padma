<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alternatifs', function (Blueprint $table) {
            $table->id();
            $table->string('alternatif');
            $table->foreignId('user_id');
            $table->string('k1');
            $table->string('k2');
            $table->string('k3');
            $table->string('k4');
            $table->string('k5');
            $table->string('k6');
            $table->string('k7');
            $table->string('k8');
            $table->string('k9');
            $table->string('k10');
            $table->string('k11');
            $table->string('k12');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alternatifs');
    }
};
