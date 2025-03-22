<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SiteContact;
use Illuminate\Support\Facades\DB;

class SiteContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SiteContact::create([
            'name' => 'Test Contact',
            'phone' => '1234567890',
            'email' => 'testcontact@testemail.com',
            'contact_reason' => 'Test Reason',
            'message' => 'Test Message',
        ]);

        $contact = new SiteContact();
        $contact->name = 'Test Contact 2';
        $contact->phone = '0987654321';
        $contact->email = 'testcontact2@testemail.com.br';
        $contact->contact_reason = 'Test Reason 2';
        $contact->message = 'Test Message 2';
        $contact->save();
    }
}
