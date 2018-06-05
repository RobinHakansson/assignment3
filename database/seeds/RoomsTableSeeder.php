<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('rooms')->insert([
          [
              "room_number" => "100",
              "number_of_beds" => 1,
              "description" => "Trevligt rum med blå gardiner och en helkroppsspegel.",
          ],
          [
              "room_number" => "101",
              "number_of_beds" => 1,
              "description" => "Trevligt rum med blå gardiner och en helkroppsspegel.",
          ],
          [
              "room_number" => "102",
              "number_of_beds" => 2,
              "description" => "Trevligt rum med blå gardiner och en helkroppsspegel.",
          ],
          [
              "room_number" => "103",
              "number_of_beds" => 2,
              "description" => "Trevligt rum med blå gardiner och en helkroppsspegel.",
          ],
          [
              "room_number" => "104",
              "number_of_beds" => 2,
              "description" => "Trevligt rum med blå gardiner och en helkroppsspegel.",
          ],
          [
              "room_number" => "105",
              "number_of_beds" => 4,
              "description" => "Trevligt rum med blå gardiner och en helkroppsspegel.",
          ],
          [
              "room_number" => "200",
              "number_of_beds" => 2,
              "description" => "Trevligt rum med blå gardiner och en helkroppsspegel.",
          ],
          [
              "room_number" => "201",
              "number_of_beds" => 2,
              "description" => "Trevligt rum med blå gardiner och en helkroppsspegel.",
          ],
          [
              "room_number" => "202",
              "number_of_beds" => 2,
              "description" => "Trevligt rum med blå gardiner och en helkroppsspegel.",
          ],
          [
              "room_number" => "204",
              "number_of_beds" => 2,
              "description" => "Trevligt rum med blå gardiner och en helkroppsspegel.",
          ],
          [
              "room_number" => "205",
              "number_of_beds" => 4,
              "description" => "Trevligt rum med blå gardiner och en helkroppsspegel.",
          ],

      ]);
    }
}
