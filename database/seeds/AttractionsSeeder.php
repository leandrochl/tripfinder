<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class AttractionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('attractions')->insert([
          'descricao' => 'Catedral de Brasília',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('attractions')->insert([
          'descricao' => 'Tokyo Tower',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('attractions')->insert([
          'descricao' => 'Ilha de Páscoa',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
    }
}
