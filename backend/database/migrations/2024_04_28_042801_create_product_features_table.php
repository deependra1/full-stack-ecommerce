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
        Schema::create('product_features', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id')->unsigned();
            $table->bigInteger('field_id')->unsigned();
            $table->string('field_value')->nullable();
            $table->timestamps();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('field_id')->references('id')->on('category_features')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_features');
    }
};
