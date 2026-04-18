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
    //manual configuration for admin access 
    {
        //USERS
        Schema::create('users', function (Blueprint $table) {
        $table->id(); // ID (primary key)
        $table->string('username'); // user
        $table->string('email')->unique(); // email
        $table->string('password'); // password
        $table->string('interest')->nullable(); // interest
        $table->enum('role', ['ADMIN' , 'CLIENT'])->default('CLIENT');; 
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
