<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('users', function (Blueprint $table){
            $table->increments('id');
            $table->string('name',255)->nullable(false);
            $table->string('surname',255)->nullable(false);
            $table->string('sex',255)->nullable(false);
            $table->date('birthday',255)->nullable(false);
            $table->string('organization',255)->nullable(false);
            $table->string('position',255)->nullable(false);
            $table->string('email',255)->nullable(false)->unique('email');
            $table->string('password',255)->nullable(false);
            $table->string('remember_token',255)->nullable(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
