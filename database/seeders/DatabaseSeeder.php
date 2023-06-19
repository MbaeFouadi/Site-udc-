<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Actualite;
use App\Models\ChefComposante;
use App\Models\Composante;
use App\Models\Departement;
use App\Models\Evenement;
use App\Models\Projet;
use Database\Factories\ActualiteFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // GENERE DES DONNEES AUTOMATIQUE GRACE FAKER
        // Actualite::factory(10)->create();

        // Evenement::factory(6)->create();
        
        // GENERE DES DONNEES MANUEL
        // Projet::factory(1)->create();

        // ChefComposante::factory(1)->create();
        // Composante::factory()->create();

        // Departement::factory(1)->create();

        $this->call([
            // actualiteSeeder::class,
            // projetSeeder::class,
            // evenementSeeder::class,
            // composanteSeeder::class,
            // NiveauSeeder::class,
            // DiplomeSeeder::class
            departementSeeder::class,
        ]);
    }
}
