<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email' => 'admin@email.com',
            'name' => 'Administrador',
            'password' => Hash::make('12345678'),
            'user_type' => 1,
            'api_token' => Str::random(60),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
