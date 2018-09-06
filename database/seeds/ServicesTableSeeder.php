<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ServicesTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {

    $now = Carbon::now()->format('Y-m-d H:i:s');

    DB::table('services')->insert([
      'Service_ID' => '1',
      'Service_Name' => 'A-Service',
      'created_at' => $now,
      'updated_at' => $now,
      'Service_Location' => 'a-service.homestead'
    ]
  );

  DB::table('services')->insert(  [
      'Service_ID' => '2',
      'Service_Name' => 'B-Service',
      'created_at' => $now,
      'updated_at' => $now,
      'Service_Location' => 'b-service.homestead'
    ]
);

}
}
