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
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->string('unit', 5); // kg, g, l, ml, etc
            $table->string('description', 30);
            $table->timestamps();
        });

        // Products relation
        Schema::table('products', function (Blueprint $table) {
            $table->foreignId('unit_id')->constrained('units');
        });

        // Product details relation
        Schema::table('product_details', function (Blueprint $table) {
            $table->foreignId('unit_id')->constrained('units');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop foreign keys and columns
        Schema::table('product_details', function (Blueprint $table) {
            if (Schema::hasColumn('product_details', 'unit_id')) {
                $table->dropForeign(['unit_id']);
                $table->dropColumn('unit_id');
            }
        });

        Schema::table('products', function (Blueprint $table) {
            if (Schema::hasColumn('products', 'unit_id')) {
                $table->dropForeign(['unit_id']);
                $table->dropColumn('unit_id');
            }
        });

        Schema::dropIfExists('units');
    }
};
