<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class UsersTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('user_types')->insert([
          'descricao' => 'Administrador',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('user_types')->insert([
          'descricao' => 'Cliente',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
    }
}
