<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class departementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
      

        


        
        DB::table("departements")->insert([
            'code_depart' => 'Drt',
             'designa_depart' => 'Droit',
            'statut' => 1,
            'id_comp' => 1,
            'diplome_id' => 2,

        ]);

        
        DB::table("departements")->insert([
            'code_depart' => 'SEC',
             'designa_depart' => 'Sciences Economiques ',
            'statut' => 1,
            'id_comp' => 1,
            'diplome_id' => 2,

        ]);

        DB::table("departements")->insert([
            'code_depart' => 'AES',
             'designa_depart' => 'Administration Economique et Sociale',
            'statut' => 1,
            'id_comp' => 1,
            'diplome_id' => 2,

        ]);
        DB::table("departements")->insert([
            'code_depart' => 'DDJ',
             'designa_depart' => 'Décentralisation et déconcentration juridiquee',
            'statut' => 1,
            'id_comp' => 1,
            'diplome_id' => 5,

        ]);
        DB::table("departements")->insert([
            'code_depart' => 'ECI',
             'designa_depart' => 'Economie des Institutions',
            'statut' => 1,
            'id_comp' => 1,
            'diplome_id' => 5,

        ]);
        DB::table("departements")->insert([
            'code_depart' => 'DAF',
             'designa_depart' => 'Droit des Affaires et des Fiscalités',
            'statut' => 1,
            'id_comp' => 1,
            'diplome_id' => 6,

        ]);
        DB::table("departements")->insert([
            'code_depart' => 'BF',
             'designa_depart' => 'Banque et Finance',
            'statut' => 1,
            'id_comp' => 1,
            'diplome_id' => 6,

        ]);

        DB::table("departements")->insert([
            'code_depart' => 'LMF',
             'designa_depart' => 'Lettres Modernes Françaises',
            'statut' => 1,
            'id_comp' => 2,
            'diplome_id' => 2,

        ]);
        DB::table("departements")->insert([
            'code_depart' => 'LEA',
             'designa_depart' => 'Langues Etrangères Appliquées',
            'statut' => 1,
            'id_comp' => 2,
            'diplome_id' => 2,

        ]);
        DB::table("departements")->insert([
            'code_depart' => 'PLC',
             'designa_depart' => 'Langue Chinoise',
            'statut' => 1,
            'id_comp' => 2,
            'diplome_id' => 2,

        ]);

        DB::table("departements")->insert([
            'code_depart' => 'H.G',
             'designa_depart' => 'Histoire',
            'statut' => 1,
            'id_comp' => 2,
            'diplome_id' => 2,

        ]);
        
       
        DB::table("departements")->insert([
            'code_depart' => 'AD',
             'designa_depart' => 'Archivistique et Documentation',
            'statut' => 1,
            'id_comp' => 2,
            'diplome_id' => 4,

        ]);
        DB::table("departements")->insert([
            'code_depart' => 'GEO',
             'designa_depart' => 'Géographie',
            'statut' => 1,
            'id_comp' => 2,
            'diplome_id' => 2,

        ]);
        DB::table("departements")->insert([
            'code_depart' => 'H.G',
             'designa_depart' => ' Histoire',
            'statut' => 1,
            'id_comp' => 2,
            'diplome_id' => 5,

        ]);

        DB::table("departements")->insert([
            'code_depart' => 'LA',
             'designa_depart' => 'Lettres Arabes',
            'statut' => 1,
            'id_comp' => 3,
            'diplome_id' => 2,

        ]);

        DB::table("departements")->insert([
            'code_depart' => 'SI',
             'designa_depart' => 'Sciences Islamiques ',
            'statut' => 1,
            'id_comp' => 3,
            'diplome_id' => 2,

        ]);

        DB::table("departements")->insert([
            'code_depart' => 'JI',
             'designa_depart' => 'Juridiction Islamique',
            'statut' => 1,
            'id_comp' => 3,
            'diplome_id' => 2,

        ]);

        DB::table("departements")->insert([
            'code_depart' => 'ECFI',
             'designa_depart' => 'Etudes Coraniques et Formation des Imams',
            'statut' => 1,
            'id_comp' => 3,
            'diplome_id' => 2,

        ]);
        DB::table("departements")->insert([
            'code_depart' => 'DI',
             'designa_depart' => 'Droit Islamique',
            'statut' => 1,
            'id_comp' => 3,
            'diplome_id' => 5,

        ]);

        DB::table("departements")->insert([
            'code_depart' => 'ELA',
             'designa_depart' => 'Enseignement de la Langue Arabe',
            'statut' => 1,
            'id_comp' => 3,
            'diplome_id' => 6,

        ]);

        DB::table("departements")->insert([
            'code_depart' => 'SV',
             'designa_depart' =>'Sciences de la Vie',
            'statut' => 1,
            'id_comp' => 4,
            'diplome_id' => 2,

        ]);

        DB::table("departements")->insert([
            'code_depart' => 'STE',
             'designa_depart' => "Sciences de la Terre et de l'Environnement ",
            'statut' => 1,
            'id_comp' => 4,
            'diplome_id' => 2,

        ]);

        DB::table("departements")->insert([
            'code_depart' => 'SM',
             'designa_depart' =>'Sciences Marines',
            'statut' => 1,
            'id_comp' => 4,
            'diplome_id' => 4,

        ]);

        DB::table("departements")->insert([
            'code_depart' => 'MATH',
             'designa_depart' =>'Mathématique',
            'statut' => 1,
            'id_comp' => 4,
            'diplome_id' => 2,

        ]);

        DB::table("departements")->insert([
            'code_depart' => 'PC',
             'designa_depart' =>'Physique-Chimie',
            'statut' => 1,
            'id_comp' => 4,
            'diplome_id' => 2,

        ]);

        DB::table("departements")->insert([
            'code_depart' => 'PASA',
             'designa_depart' =>'Probabilité, Analyse et Statistique Appliquées',
            'statut' => 1,
            'id_comp' => 4,
            'diplome_id' => 5,

        ]);

        DB::table("departements")->insert([
            'code_depart' => 'PASA',
             'designa_depart' =>'Gestion des ressources halieutiques',
            'statut' => 1,
            'id_comp' => 4,
            'diplome_id' => 5,

        ]);

        DB::table("departements")->insert([
            'code_depart' => 'GEA',
             'designa_depart' =>'Gestion des Entreprises et des Administrations',
            'statut' => 1,
            'id_comp' => 5,
            'diplome_id' => 1,

        ]);

        DB::table("departements")->insert([
            'code_depart' => 'COM',
             'designa_depart' =>'Commerce ',
            'statut' => 1,
            'id_comp' => 5,
            'diplome_id' => 1,

        ]);

        DB::table("departements")->insert([
            'code_depart' => 'TH',
             'designa_depart' =>'Tourisme et Hôtellerie ',
            'statut' => 1,
            'id_comp' => 5,
            'diplome_id' => 1,

        ]);

        DB::table("departements")->insert([
            'code_depart' => 'GIF',
             'designa_depart' =>'Génie Informatique',
            'statut' => 1,
            'id_comp' => 5,
            'diplome_id' => 1,

        ]);

        DB::table("departements")->insert([
            'code_depart' => 'HE',
             'designa_depart' =>'Habitat et son Environnement',
            'statut' => 1,
            'id_comp' => 5,
            'diplome_id' => 1,

        ]);

        DB::table("departements")->insert([
            'code_depart' => 'STQ',
             'designa_depart' =>'Statistique',
            'statut' => 1,
            'id_comp' => 5,
            'diplome_id' => 1,

        ]);

        DB::table("departements")->insert([
            'code_depart' => 'MSID',
             'designa_depart' =>'Mathématique, Statistique et Informatique Décisionnelle',
            'statut' => 1,
            'id_comp' => 5,
            'diplome_id' => 4,

        ]);

        DB::table("departements")->insert([
            'code_depart' => 'ASSI',
             'designa_depart' =>"Administration et Sécurité  des Systèmes d’information",
            'statut' => 1,
            'id_comp' => 5,
            'diplome_id' => 4,

        ]);

        DB::table("departements")->insert([
            'code_depart' => 'ASR',
             'designa_depart' =>"Administration et Sécurité des Réseaux",
            'statut' => 1,
            'id_comp' => 5,
            'diplome_id' => 4,

        ]);

        DB::table("departements")->insert([
            'code_depart' => 'FPE',
             'designa_depart' =>"Formation de Professeur des Ecoles",
            'statut' => 1,
            'id_comp' => 6,
            'diplome_id' => 3,

        ]);

        DB::table("departements")->insert([
            'code_depart' => 'SI',
             'designa_depart' =>"Soins Infirmiers ",
            'statut' => 1,
            'id_comp' => 7,
            'diplome_id' => 3,

        ]);

        DB::table("departements")->insert([
            'code_depart' => 'SO',
             'designa_depart' =>"Soins Obstétricaux ",
            'statut' => 1,
            'id_comp' => 7,
            'diplome_id' => 3,

        ]);

        DB::table("departements")->insert([
            'code_depart' => 'DRTp',
             'designa_depart' =>"Droit ",
            'statut' => 1,
            'id_comp' => 8,
            'diplome_id' => 2,

        ]);

        DB::table("departements")->insert([
            'code_depart' => 'SECp',
             'designa_depart' =>"Sciences économiques",
            'statut' => 1,
            'id_comp' => 8,
            'diplome_id' => 2,

        ]);

        DB::table("departements")->insert([
            'code_depart' => 'AESp',
             'designa_depart' =>"Administration Economique et Sociale",
            'statut' => 1,
            'id_comp' => 8,
            'diplome_id' => 2,

        ]);

        DB::table("departements")->insert([
            'code_depart' => 'LMFp',
             'designa_depart' =>"Lettres Modernes Françaises ",
            'statut' => 1,
            'id_comp' => 8,
            'diplome_id' => 2,

        ]);

        DB::table("departements")->insert([
            'code_depart' => 'LEAp',
             'designa_depart' =>"Langues Etrangères Appliquées",
            'statut' => 1,
            'id_comp' => 8,
            'diplome_id' => 2,

        ]);

        DB::table("departements")->insert([
            'code_depart' => 'GEOp',
             'designa_depart' =>"Géographie",
            'statut' => 1,
            'id_comp' => 8,
            'diplome_id' => 2,

        ]);

        DB::table("departements")->insert([
            'code_depart' => 'LAp',
             'designa_depart' =>"Lettres Arabes ",
            'statut' => 1,
            'id_comp' => 8,
            'diplome_id' => 2,

        ]);
        DB::table("departements")->insert([
            'code_depart' => 'SVp',
             'designa_depart' =>"Science de la Vie ",
            'statut' => 1,
            'id_comp' => 8,
            'diplome_id' => 2,

        ]);
        DB::table("departements")->insert([
            'code_depart' => 'STEp',
             'designa_depart' =>"Sciences de la Terre et de l'Environnement ",
            'statut' => 1,
            'id_comp' => 8,
            'diplome_id' => 2,

        ]);
        DB::table("departements")->insert([
            'code_depart' => 'GEAp',
             'designa_depart' =>"Gestion des Entreprises et des Administrations ",
            'statut' => 1,
            'id_comp' => 8,
            'diplome_id' => 1,

        ]);
        DB::table("departements")->insert([
            'code_depart' => 'FPEp',
             'designa_depart' =>"Formation de Professeur des Ecoles",
            'statut' => 1,
            'id_comp' => 8,
            'diplome_id' => 3,

        ]);
        DB::table("departements")->insert([
            'code_depart' => 'GRHp',
             'designa_depart' =>"Gestion des Ressources Humaines ",
            'statut' => 1,
            'id_comp' => 8,
            'diplome_id' => 4,

        ]);
        DB::table("departements")->insert([
            'code_depart' => 'DDCB',
             'designa_depart' =>"Développement Durable et  Conservation de la Biodiversité ",
            'statut' => 1,
            'id_comp' => 8,
            'diplome_id' => 5,

        ]);

        DB::table("departements")->insert([
            'code_depart' => 'GEAm',
             'designa_depart' =>"Gestion des Entreprises et des Administrations ",
            'statut' => 1,
            'id_comp' => 9,
            'diplome_id' => 1,

        ]);

        DB::table("departements")->insert([
            'code_depart' => 'FPEm',
             'designa_depart' =>"Formation de Professeur des Ecoles ",
            'statut' => 1,
            'id_comp' => 9,
            'diplome_id' => 3,

        ]);

        DB::table("departements")->insert([
            'code_depart' => 'AESm',
             'designa_depart' =>"Administration Economique et Sociale ",
            'statut' => 1,
            'id_comp' => 9,
            'diplome_id' => 2,

        ]);

        DB::table("departements")->insert([
            'code_depart' => 'SUFOP',
             'designa_depart' =>"Site Universitaire de Formation Permanente",
            'statut' => 1,
            'id_comp' => 10,
            'diplome_id' => 3,

        ]);





    }
}
