<?php

namespace Database\Seeders;

use App\Models\Activite;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActiviteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $activites = [
            ['description' => 'Atelier de robotique avancée', 'dateDebut' => '2025-06-10', 'nombreJours' => 3],
            ['description' => 'Concert de fin d\'année', 'dateDebut' => '2025-06-15', 'nombreJours' => 1],
            ['description' => 'Spectacle de théâtre', 'dateDebut' => '2025-06-20', 'nombreJours' => 2],
            ['description' => 'Sortie photo au parc', 'dateDebut' => '2025-06-12', 'nombreJours' => 1],
            ['description' => 'Tournoi de football', 'dateDebut' => '2025-06-18', 'nombreJours' => 2],
            ['description' => 'Marathon de lecture', 'dateDebut' => '2025-06-22', 'nombreJours' => 4],
            ['description' => 'Compétition de robotique interclubs', 'dateDebut' => '2025-06-25', 'nombreJours' => 2],
            ['description' => 'Jam session musicale', 'dateDebut' => '2025-06-14', 'nombreJours' => 1],
            ['description' => 'Exposition photo', 'dateDebut' => '2025-06-16', 'nombreJours' => 3],
            ['description' => 'Lecture publique', 'dateDebut' => '2025-06-19', 'nombreJours' => 1],
        ];


        foreach ($activites as $activite) {
            Activite::create($activite);
        }
    }
}
