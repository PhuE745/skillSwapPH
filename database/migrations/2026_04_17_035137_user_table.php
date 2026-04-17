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
        $table->id(); // ID (primary key)
        $table->string('username'); // user
        $table->string('email')->unique(); // email
        $table->string('password'); // password
        $table->string('interest')->nullable(); // interest
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
