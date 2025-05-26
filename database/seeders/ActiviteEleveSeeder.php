<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActiviteEleveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $activiteEleves = [
            ['activite_id' => 4, 'eleve_id' => 1],
            ['activite_id' => 2, 'eleve_id' => 2],
            ['activite_id' => 1, 'eleve_id' => 3],
            ['activite_id' => 5, 'eleve_id' => 4],
            ['activite_id' => 3, 'eleve_id' => 5],
            ['activite_id' => 6, 'eleve_id' => 6],
            ['activite_id' => 1, 'eleve_id' => 7],
            ['activite_id' => 2, 'eleve_id' => 8],
            ['activite_id' => 5, 'eleve_id' => 9],
            ['activite_id' => 3, 'eleve_id' => 10],
        ];

        DB::table('activite_eleve')->insert($activiteEleves);

    }
}
