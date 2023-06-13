<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['genero' => 'Femenino'],
            ['genero' => 'Masculino'],
            ['genero' => 'Otro']
        ];
        DB::table('generos')->insert($data);
    }
}
