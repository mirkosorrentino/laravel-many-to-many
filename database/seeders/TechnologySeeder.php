<?php

namespace Database\Seeders;

use App\Models\Technology;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $technologies = ['HTML5', 'CSS', 'Vanilla JS', 'Vue.JS', 'PHP', 'Laravel', 'SQL'];

        foreach ($technologies as $technology) {
            $new_technology = new Technology();
            $new_technology->title = $technology;
            $new_technology->slug = Str::slug($technology);
            $new_technology->description = $faker->text();
            $new_technology->creator = $faker->words(2, true);
            $new_technology->date_of_birth = $faker->dateTime();

            $new_technology->save();
        }
    }
}
