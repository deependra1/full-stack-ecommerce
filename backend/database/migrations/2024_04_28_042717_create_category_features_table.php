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
        Schema::create('category_features', function (Blueprint $table) {
            $table->id();
            $table->string('field_title');
            $table->tinyInteger('field_type')->comment('1 => text, 2 => color');
            $table->bigInteger('category_id')->unsigned();
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_features');
    }
};
