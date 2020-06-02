<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class TouristicPointsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('touristic_points')->insert([
          'pais' => 'Chile',
          'local' => 'Ilha de Páscoa',
          'descricao' => 'Easter Island, a Chilean territory, is a remote volcanic island in Polynesia. Its native name is Rapa Nui.',
          'homepage' => true,
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('touristic_points')->insert([
          'pais' => 'Brasil',
          'local' => 'Catedral de Brasília',
          'descricao' => 'The Cathedral of Brasília is the Roman Catholic cathedral serving Brasília, Brazil, and serves as the seat of the Archdiocese of Brasília.',
          'homepage' => true,
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('touristic_points')->insert([
          'pais' => 'Japão',
          'local' => 'Tokyo Tower',
          'descricao' => 'Tokyo Tower is a communications and observation tower in the Shiba-koen district of Minato, Tokyo, Japan. At 332.9 meters, it is the second-tallest structure in Japan.',
          'homepage' => true,
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('touristic_points')->insert([
          'pais' => 'Tailândia',
          'local' => 'Ilhas Phi Phi',
          'descricao' => 'The Phi Phi Islands are an island group in Thailand, between the large island of Phuket and the Straits of Malacca coast of Thailand. The islands are administratively part of Krabi Province.',
          'homepage' => false,
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
    }
}
