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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->integer('identification');
            $table->string('name');
            $table->string('last_name');
            $table->integer('telephone');
            $table->string('email');
            $table->string('address'); 
            $table->string('department');
            $table->string('municipality');
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('id_role')->references('id')->on('roles')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
