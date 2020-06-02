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
          'nome_pt_br' => 'América',
          'nome_eng' => 'America',
          'descricao' => '',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('continents')->insert([
          'nome_pt_br' => 'Ásia',
          'nome_eng' => 'Asia',
          'descricao' => '',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('continents')->insert([
          'nome_pt_br' => 'África',
          'nome_eng' => 'Africa',
          'descricao' => '',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('continents')->insert([
          'nome_pt_br' => 'Europa',
          'nome_eng' => 'Europe',
          'descricao' => '',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('continents')->insert([
          'nome_pt_br' => 'Austrália',
          'nome_eng' => 'Australia',
          'descricao' => '',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('continents')->insert([
          'nome_pt_br' => 'Antártica',
          'nome_eng' => 'Antartica',
          'descricao' => '',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
    }
}
