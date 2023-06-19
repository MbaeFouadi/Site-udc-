<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Departement>
 */
class DepartementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'code_depart' => 'GEA',
            // 'designa_depart' => 'Gestion des Entreprises et des Administrations',
            // 'statut' => 1,
            // 'id_comp' => 5,

            // 'code_depart' => 'GIF',
            // 'designa_depart' => 'Génie Informatique',
            // 'statut' => 1,
            // 'id_comp' => 5,

            // 'code_depart' => 'DP',
            // 'designa_depart' => 'Droit',
            // 'statut' => 1,
            // 'id_comp' => 1,

            // 'code_depart' => 'AES',
            // 'designa_depart' => 'Administration Economique et Sociale',
            // 'statut' => 1,
            // 'id_comp' => 1,

            // 'code_depart' => 'BF',
            // 'designa_depart' => 'Banque et Finance',
            // 'statut' => 1,
            // 'id_comp' => 1,

            'code_depart' => '',
            'designa_depart' => 'Mathématique',
            'statut' => 1,
            'id_comp' => 3,
        ];
    }
}
