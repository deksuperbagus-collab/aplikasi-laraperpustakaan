<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('alamat')->nullable();
            $table->string('no_telp')->nullable();       
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropOfExists('members');
    }
};