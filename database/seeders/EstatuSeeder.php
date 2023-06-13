<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class EstatuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'codigo' => '0',
                'estatu' => 'false'
            ],
            [
                'codigo' => '1',
                'estatu' => 'true'
            ]
        ];
        DB::table('estatus')->insert($data);
    }
}
