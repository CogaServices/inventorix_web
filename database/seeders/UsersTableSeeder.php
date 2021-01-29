<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
//use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /* DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
            'photo'=>'',
            'numero'=>'00000000',
            'Actif'=>true
        ]);*/

        DB::table('users')->insert([
            'name' => 'Administrateur',
            'email' => 'admininventoryx@gmail.com',
            'password' => Hash::make('Inventoryx'),
            'photo'=>'',
            'numero'=>'00000000',
            'Actif'=>true
        ]);
    }
}
