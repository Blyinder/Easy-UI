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
        Schema::create('purchase', function (Blueprint $table) {
            $table->increments("id_purchase");
            $table->unsignedInteger("id_users");
            $table->unsignedInteger("id_template");
            $table->foreign('id_users')->references('id_users')->on('users');
            $table->foreign('id_template')->references('id_template')->on('templates');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase');
    }
};
