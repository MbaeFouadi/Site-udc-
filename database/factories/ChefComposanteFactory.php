<?php

namespace Database\Factories;

use App\Models\Composante;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ChefComposante>
 */
class ChefComposanteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'nom'=> 'SOULE',
            // 'prenom'=> 'HAMIDOU HAMADA',
            // 'adress'=> 'aaaaaaaaaaa',
            // 'telephone'=> '+269 000 00 00',
            // 'id_comp'=>'3',

            // 'nom'=> 'SOIFFAOUIDDINE',
            // 'prenom'=> 'SIDI',
            // 'adress'=> 'aaaaaaaaaaa',
            // 'telephone'=> '+269 000 00 00',
            // 'id_comp'=>'8',

            // 'nom'=> 'ALI',
            // 'prenom'=> 'MOHAMED M’BAYÉ',
            // 'adress'=> 'aaaaaaaaaaa',
            // 'telephone'=> '+269 000 00 00',
            // 'id_comp'=>'9',

            // 'nom'=> 'AHMED ',
            // 'prenom'=> 'BACAR',
            // 'adress'=> 'aaaaaaaaaaa',
            // 'telephone'=> '+269 000 00 00',
            // 'id_comp'=>'5',

            // 'nom'=> 'ABDOURAOUF',
            // 'prenom'=> 'ABDOU OUMAR',
            // 'adress'=> 'aaaaaaaaaaa',
            // 'telephone'=> '+269 000 00 00',
            // 'id_comp'=>'2',

            // 
            // 'nom'=> 'Ali',
            // 'prenom'=> 'Mohamed Gou',
            // 'adress'=> '',
            // 'telephone'=> '',
            // 'id_comp'=>'4',

            // 'nom'=> 'Kamal',
            // 'prenom'=> 'Ahamada Abdallah',
            // 'adress'=> '',
            // 'telephone'=> '',
            // 'id_comp'=>'7',

            'nom'=> 'AHMED',
            'prenom'=> 'SAID HASSANE',
            'adress'=> '',
            'telephone'=> '',
            'id_comp'=>'6',
        ];
    }
}
