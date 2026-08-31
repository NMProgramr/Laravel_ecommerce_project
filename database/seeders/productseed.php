<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class productseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



        function persianSlug($string, $separator = '-')
        {
            // Remove any character that is not Persian, English, number, or space
            $string = preg_replace('/[^\x{0600}-\x{06FF}\x{0750}-\x{077F}a-zA-Z0-9\s]/u', '', $string);

            // Replace spaces with separator
            $string = preg_replace('/[\s]+/', $separator, $string);

            // Remove multiple separators
            $string = preg_replace('/[' . $separator . ']+/', $separator, $string);

            // Trim separators from beginning and end
            return trim($string, $separator);
        }


        $faker = Factory::create("fa_IR");
        for($i = 1 ; $i <= 18 ; $i++){
            $title = $faker->realtext(20);
            DB::table('products')->insert([
                'title' => $title,
                'descrioption' => $faker->realText(400),
                'slug' => persianSlug($title) ,
                'src'=>"product{$i}",
                'price'=>$faker->randomNumber(2),
                'quantitiy'=>$faker->randomNumber(2),
                'category_id'=>rand(1,5),
                'popularity'=>rand(0,1),
                'mostselling'=>rand(0,1),



            ]);
        }
    }
}
