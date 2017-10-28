<?php

use Illuminate\Database\Seeder;
use App\Model\Berita;

class BeritaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     
      $faker = Faker\Factory::create();

      foreach(range(1,10) as $index)
      {
          Berita::create([
              'judul'        => $faker->sentence($nbWords = 6, $variableNbWords = true),
              'slug'         => $faker->slug,
              'berita'       => $faker->paragraphs($nb = 1, $asText = true),
              'tag_id'       => $faker->numberBetween($min = 1, $max = 10),
              'gambar'       => $faker->imageUrl($width = 640, $height = 480),
              'created_at'   => $faker->dateTime($max = 'now', $timezone = date_default_timezone_get()),
              'updated_at'   => $faker->dateTime($max = 'now', $timezone = date_default_timezone_get()),
          ]);
      }
    }
}
