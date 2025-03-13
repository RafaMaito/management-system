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
        // Create branches table
        Schema::create('branches', function (Blueprint $table) {
            $table->id();
            $table->string('branch', 50);
            $table->timestamps();
        });

        // Create product_branches table
        Schema::create('product_branches', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->foreignId('branch_id')->constrained('branches')->onDelete('cascade');
            $table->float('sale_price', 8, 2)->default(0.01);
            $table->integer('minimum_stock')->default(1);
            $table->integer('maximum_stock')->default(1);
            $table->integer('stock')->default(0);
            $table->timestamps();
        });


        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['sale_price', 'minimum_stock', 'maximum_stock']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->float('sale_price', 8, 2)->default(0.01);
            $table->integer('minimum_stock')->default(1);
            $table->integer('maximum_stock')->default(1);
        });

        Schema::dropIfExists('product_branches');
        Schema::dropIfExists('branches');
    }
};
