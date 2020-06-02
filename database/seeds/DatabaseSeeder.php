<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call([
        UsersTypeSeeder::class,
        UsersSeeder::class,
        TouristicPointsSeeder::class,
        ContinentsSeeder::class,
        CountriesSeeder::class,
        StatesProvincesSeeder::class,
        CitiesSeeder::class,
        DistrictsSeeder::class,
        AttractionsSeeder::class
      ]);
    }
}
