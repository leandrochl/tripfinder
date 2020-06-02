<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('cities')->insert([
          'nome_pt_br' => 'Brasília',
          'nome_eng' => '',
          'descricao' => '',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('cities')->insert([
          'nome_pt_br' => '',
          'nome_eng' => 'Tokyo',
          'descricao' => '',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('cities')->insert([
          'nome_pt_br' => 'Ilha de Páscoa',
          'nome_eng' => '',
          'descricao' => '',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
    }
}
