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
        // Add the new column contact_reasons_id
        Schema::table('site_contacts', function (Blueprint $table) {
            $table->unsignedBigInteger('contact_reasons_id')->nullable();
        });

        // Attribute the contact_reason to the new column contact_reasons_id
        DB::statement('UPDATE site_contacts SET contact_reasons_id = contact_reason');

        // Create the foreign key
        Schema::table('site_contacts', function (Blueprint $table) {
            $table->foreign('contact_reasons_id')->references('id')->on('contact_reasons');
        });

        // Remove the old column
        Schema::table('site_contacts', function (Blueprint $table) {
            $table->dropColumn('contact_reason');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Add the old column contact_reason.
        Schema::table('site_contacts', function (Blueprint $table) {
            $table->integer('contact_reason');
        });

        // Copy the contact_reasons_id to the old column contact_reason.
        DB::statement('UPDATE site_contacts SET contact_reason = contact_reasons_id');

        // Remove the foreign key.
        Schema::table('site_contacts', function (Blueprint $table) {
            $table->dropForeign('site_contacts_contact_reasons_id_foreign');
        });

        // Remove the new column.
        Schema::table('site_contacts', function (Blueprint $table) {
            $table->dropColumn('contact_reasons_id');
        });
    }
};
