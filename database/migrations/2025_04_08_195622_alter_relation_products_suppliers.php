<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Insert a supplier register to establish the relationship
        // We need this because we already have products in the database and we need to establish a relationship with them.
        // This is a temporary solution, in the future we will create a seeder to add suppliers.
        $supplier_id = DB::table('suppliers')->insertGetId([
            'name' => 'Standard Supplier',
            'site' => 'www.standardsupplier.com',
            'uf' => 'RS',
            'email' => 'contact@standardsupplier.com',
        ]);
        // Creating the column in products table that will receive the fk from suppliers table.
        Schema::table('products', function (Blueprint $table) use ($supplier_id) {
            // Adding the supplier_id column to the products table
            $table->unsignedBigInteger('supplier_id')->default($supplier_id)->after('id');
            $table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Dropping the foreign key and the column from the products table
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['supplier_id']);
            $table->dropColumn('supplier_id');
        });
    }
};