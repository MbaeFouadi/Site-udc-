<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class evenementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();

        foreach(range(1,5) as $value)
        {

            $titre = $faker->sentence;
            $slug = Str::slug($titre, '-');
            DB::table("evenements")->insert([
                // 'titre'=>$faker->sentence(),
                'titre'=>$titre,
                // 'slug'=>Str::slug($faker->sentence(),"-"),
                'slug'=>$slug,
                'description'=>$faker->text(),
              
                'date'=>$faker->date(),
                'img'=>$faker->imageUrl(360, 360, 'people'),
            ]);
        }

    }
}
