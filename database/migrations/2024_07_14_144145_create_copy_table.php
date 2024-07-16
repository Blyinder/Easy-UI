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
        Schema::create('copy', function (Blueprint $table) {
            $table->increments("id_copy");
            $table->unsignedInteger("id_users");
            $table->unsignedInteger("id_components");
            $table->foreign('id_users')->references('id_users')->on('users');
            $table->foreign('id_components')->references('id_components')->on('components');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('copy');
    }
};
