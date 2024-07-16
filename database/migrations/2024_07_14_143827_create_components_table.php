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
        Schema::create('components', function (Blueprint $table) {
            $table->increments("id_components");
            $table->string("name_components", 100);
            $table->text("description_components");
            $table->longText("code");
            $table->string("preview_image");
            $table->string("access_level");
            $table->unsignedInteger("id_category");
            $table->foreign('id_category')->references('id_category')->on('category');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('components');
    }
};
