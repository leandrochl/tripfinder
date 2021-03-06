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
          'nome_pt_br' => 'Distrito Federal',
          'nome_eng' => '',
          'descricao' => '',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('states_provinces_prefectures')->insert([
          'nome_pt_br' => 'Kanto',
          'nome_eng' => 'Kanto',
          'descricao' => '',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('states_provinces_prefectures')->insert([
          'nome_pt_br' => 'Ilha de Páscoa',
          'nome_eng' => 'Ilha de Páscoa',
          'descricao' => '',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
    }
}
