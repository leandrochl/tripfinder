<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class StatesProvincesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('states_provinces_prefectures')->insert([
          'descricao' => 'Distrito Federal',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('states_provinces_prefectures')->insert([
          'descricao' => 'Kanto',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('states_provinces_prefectures')->insert([
          'descricao' => 'Ilha de Páscoa',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
    }
}
