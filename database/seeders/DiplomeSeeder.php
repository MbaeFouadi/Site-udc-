<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiplomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table("diplomes")->insert([
          
            'design_diplome' => 'DUT',
        ]);

        
        DB::table("diplomes")->insert([
          
            'design_diplome' => 'Licence',
        ]);

        DB::table("diplomes")->insert([
          
            'design_diplome' => 'Licence Professionnelle',
        ]);

        DB::table("diplomes")->insert([
          
            'design_diplome' => 'Licence Professionnelle(L3)',
        ]);

        DB::table("diplomes")->insert([
          
            'design_diplome' => 'Master',
        ]);

        DB::table("diplomes")->insert([
          
            'design_diplome' => 'Master  Professionnelle',
        ]);
    }
}
