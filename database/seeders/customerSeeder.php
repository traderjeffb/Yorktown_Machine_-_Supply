<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class customerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

              //customerSeeder::factory()->times(count:20)->create();
       \App\Models\Customer::factory()->count(30)->create();
    }
}
