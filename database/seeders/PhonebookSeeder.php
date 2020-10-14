<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Phonebook;

class PhonebookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Phonebook::class, 1)->create();
    }
}
