<?php

namespace Database\Seeders;

use App\Models\Contacts;
use Database\Factories\ContactsFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contacts::factory(10)->create();
    }
}
