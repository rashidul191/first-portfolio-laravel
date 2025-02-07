<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //


        $faker = Faker::create();

        // Loop to insert multiple fake contacts (You can adjust the range for the number of rows)
        foreach (range(1, 10) as $index) {
            DB::table('contacts')->insert([
                'fullName' => $faker->name,              // Fake full name
                'email' => $faker->email,                // Fake email
                'phone' => $faker->phoneNumber,          // Fake phone number
                'message' => $faker->sentence,           // Fake message (could be a random sentence)
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

    }
}
