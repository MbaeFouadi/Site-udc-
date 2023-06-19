<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class projetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $faker = Faker::create();

        foreach(range(1,10) as $value)
        {

            $titre = $faker->sentence;
            $slug = Str::slug($titre, '-');
            DB::table("projets")->insert([
                // 'titre'=>$faker->sentence(),
                'titre'=>$titre,
                // 'slug'=>Str::slug($faker->sentence(),"-"),
                'slug'=>$slug,
                'contenu'=>$faker->text(),
                'statut'=> 1,
                'date_publie'=>$faker->date() ,
                'img_projet'=>$faker->imageUrl(360, 360, 'people'),
            ]);
        }

    }
}
