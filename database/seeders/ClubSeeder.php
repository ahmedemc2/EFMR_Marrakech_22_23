<?php

namespace Database\Seeders;

use App\Models\Club;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $clubs = [
            ['nom' => 'Robotique'],
            ['nom' => 'Musique'],
            ['nom' => 'Théâtre'],
            ['nom' => 'Photographie'],
            ['nom' => 'Sport'],
            ['nom' => 'Lecture'],
        ];

        foreach ($clubs as $club) {
            Club::create($club);
        }

    }
}
