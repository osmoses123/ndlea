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
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('phone');
            $table->string('email');
            $table->string('caddress');
            $table->string('dob');
            $table->string('urine');
            $table->string('methylendioxymethamphetamine');
            $table->string('amphetamine');
            $table->string('ketamine');
            $table->string('cotinine');
            $table->string('methamphetamine');
            $table->string('marijuana');
            $table->string('morphine');
            $table->string('opiatestramadol');
            $table->string('benzodiazepines');
            $table->string('cocaineheroin');
            $table->text('note');
            $table->text('qrcode');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certificates');
    }
};
