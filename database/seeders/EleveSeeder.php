<?php

namespace Database\Seeders;

use App\Models\Eleve;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EleveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $eleves = [
            ['nom' => 'Doe', 'prenom' => 'John', 'club_id' => 4],
            ['nom' => 'Smith', 'prenom' => 'Emma', 'club_id' => 2],
            ['nom' => 'Dupont', 'prenom' => 'Lucas', 'club_id' => 1],
            ['nom' => 'Martin', 'prenom' => 'Chloé', 'club_id' => 5],
            ['nom' => 'Bernard', 'prenom' => 'Hugo', 'club_id' => 3],
            ['nom' => 'Petit', 'prenom' => 'Léa', 'club_id' => 6],
            ['nom' => 'Durand', 'prenom' => 'Noah', 'club_id' => 1],
            ['nom' => 'Lemoine', 'prenom' => 'Jade', 'club_id' => 2],
            ['nom' => 'Moreau', 'prenom' => 'Tom', 'club_id' => 5],
            ['nom' => 'Fournier', 'prenom' => 'Inès', 'club_id' => 3],
        ];

        foreach ($eleves as $eleve) {
            Eleve::create($eleve);
        }

    }
}
