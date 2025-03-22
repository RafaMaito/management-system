<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ContactReason;

class ContactReasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create the contact reasons.
        ContactReason::create(['contact_reason' => 'Question']);
        ContactReason::create(['contact_reason' => 'Complaint']);
        ContactReason::create(['contact_reason' => 'Compliment']);
    }
}
