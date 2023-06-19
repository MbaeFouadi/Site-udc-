<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class actualiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        // $faker=Faker::create(app\Models\Actualite);

        $faker = Faker::create();

       

        foreach(range(1,20) as $value)
        {

            $titre = $faker->sentence;
            $slug = Str::slug($titre, '-');
            DB::table("actualites")->insert([
                // 'titre'=>$faker->sentence(),
                'titre'=>$titre,
                // 'slug'=>Str::slug($faker->sentence(),"-"),
                'slug'=>$slug,
                'contenu'=>$faker->text(),
                'lieu'=>$faker->address(),
                'date'=>$faker->dateTime(),
                'img_actualites'=>$faker->imageUrl(360, 360, 'people'),
            ]);
        }

    }
}
