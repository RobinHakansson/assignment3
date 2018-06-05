<?php

use Illuminate\Database\Seeder;

class BookingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('bookings')->insert([
          [
              "guest_id" => 1,
              "room_id" => 6,
              "check_in" => "2018-07-01",
              "check_out" => "2018-07-07",
              "price" => 1400,
          ],
          [
              "guest_id" => 2,
              "room_id" => 2,
              "check_in" => "2018-08-15",
              "check_out" => "2018-08-17",
              "price" => 333.33,
          ],
          [
              "guest_id" => 3,
              "room_id" => 4,
              "check_in" => "2018-06-03",
              "check_out" => "2018-06-13",
              "price" => 2400,
          ],
        ]);
    }
}
