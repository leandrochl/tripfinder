<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class DistrictsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('districts_wards')->insert([
          'descricao' => 'Plano piloto',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('districts_wards')->insert([
          'descricao' => 'Minato',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('districts_wards')->insert([
          'descricao' => 'Ilha de Páscoa',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
    }
}
