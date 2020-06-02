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
          'nome_pt_br' => 'Plano piloto',
          'nome_eng' => '',
          'descricao' => '',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('districts_wards')->insert([
          'nome_pt_br' => 'Minato',
          'nome_eng' => 'Minato',
          'descricao' => '',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('districts_wards')->insert([
          'nome_pt_br' => 'Ilha de Páscoa',
          'nome_eng' => '',
          'descricao' => '',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
    }
}
