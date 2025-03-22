<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Supplier;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        // Instructs to register the model events in the database seeder.
            // Create a new supplier record.
        Supplier::create([
            'name' => 'Test Supplier',
            'site' => 'Test Supplier',
            'uf' => 'MG',
            'email' => 'test@testemail.com',
        ]);

        // Insert a new supplier record using the query builder.
        DB::table('suppliers')->insert([
            'name' => 'Test Supplier 2',
            'site' => 'Test Supplier 2',
            'uf' => 'RS',
            'email' => 'test2@emailtest.com.br',
        ]);
    }
}
