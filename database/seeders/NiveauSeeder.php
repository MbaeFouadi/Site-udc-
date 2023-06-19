<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NiveauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table("niveau")->insert([

            'code_niveau' => 'N1',
            'design_niveau' => 'Licence 1',
        ]);

        
        DB::table("niveau")->insert([
            'code_niveau' => 'N2',
            'design_niveau' => 'Licence 2',
        ]);

        DB::table("niveau")->insert([
            'code_niveau' => 'N3',
            'design_niveau' => 'Licence 3',
        ]);

        
        DB::table("niveau")->insert([
            'code_niveau' => 'N4',
            'design_niveau' => 'Master 1',
        ]);

        DB::table("niveau")->insert([
            'code_niveau' => 'N5',
            'design_niveau' => 'Master 2',
        ]);
    }
}
