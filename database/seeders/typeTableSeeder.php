<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class typeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $types = ['Esercizio giornalierio', 'Progetto breve', 'Progetto lungo', 'Lavoro di gruppo', 'Lavoro individuale'];
        foreach ($types as $type) {
            $new_type = new Type();
            $new_type->title = $type;
            $new_type->slug = Str::slug($type);
            $new_type->description = $faker->text();
            $new_type->save();
        }
    }
}
