<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ContinentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('continents')->insert([
          'descricao' => 'Ámerica',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('continents')->insert([
          'descricao' => 'Ásia',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('continents')->insert([
          'descricao' => 'África',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('continents')->insert([
          'descricao' => 'Europa',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('continents')->insert([
          'descricao' => 'Oceania',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
    }
}
