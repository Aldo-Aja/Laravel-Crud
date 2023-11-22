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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('level', 5);
            $table->string('username', 50)->unique(); // fixed the syntax error
            $table->timestamp('email_verified_at')->nullable(); // fixed the syntax error
            $table->string('password');
            $table->rememberToken();
            $table->timestamps(); // fixed the syntax error
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
