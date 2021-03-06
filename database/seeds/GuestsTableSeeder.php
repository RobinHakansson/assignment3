<?php

use Illuminate\Database\Seeder;

class GuestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('guests')->insert([
            [
              "first_name" => "Maja",
              "last_name" => "Lundin",
              "mobile_phone" => "0707654321",
              "email" => "maja@email.com",
            ],
            [
              "first_name" => "Martin",
              "last_name" => "Lantz",
              "mobile_phone" => "0701234567",
              "email" => "martin@email.com",
            ],
            [
              "first_name" => "Mia",
              "last_name" => "Lennartsson",
              "mobile_phone" => "0701122334",
              "email" => "mia@email.com",
            ],
          ]);
    }
}
