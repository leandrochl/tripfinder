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
          'descricao' => 'Brasília',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('cities')->insert([
          'descricao' => 'Tokyo',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('cities')->insert([
          'descricao' => 'Ilha de Páscoa',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
    }
}
