<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::create([
        'email' => 'test1@mail.com',
        'message' => 'Message test 1'
        ]);
        Contact::create([
        'email' => 'test2@mail.com',
        'message' => 'Message test 2'
        ]);
    }
}
