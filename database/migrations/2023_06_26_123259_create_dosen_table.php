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
        Schema::create('dosen', function (Blueprint $table) {
            // $table->id();
            $table->char('noDosen', 7)->primary();
            $table->string('fullname', 100);
            $table->enum('gender',['M','F']);
            $table->string('address',100);
            $table->string('emailaddress',100);
            $table->char('phone',20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dosen');
    }
};
