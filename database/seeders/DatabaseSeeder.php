<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            [
                'name' => 'Maria Angélica Miranda Mendoza',
                'telefono' => '71005231',
                'ci' => '12922186',
                'consultorio' => '1',
                'email'=>'angelicamirandau@gmail.com',
                'password'=>Hash::make('Miranda123'),
                'tipo' => 'doctor',
                'foto' => null,           
            ]
        ]);
    }
}
