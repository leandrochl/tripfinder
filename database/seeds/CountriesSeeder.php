<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('countries')->insert([
          'descricao' => 'Brasil',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('countries')->insert([
          'descricao' => 'Japão',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('countries')->insert([
          'descricao' => 'Chile',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
    }
}
