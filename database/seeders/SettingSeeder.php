<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table("settings")->insert([
           "supppsed" => "nav",
           "detials" => '{
       "home" : "خانه",
       "shop" : "فروشگاه",
       "contact" : "تماس با ما",
       "login" : "ورود"
   }',
       ]);
    //     DB::table("settings")->insert([
    //         "supppsed" => "contact",
    //         "detials" => '{
    //     "title" : "بگو سلام!",
    //     "body" : "لورم ایپسوم متن ساخعلی تکنولمعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیازی اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.",
    //     "addreses" : "ایران ، تهران",
    //     "phone" : "021 23 456 7890",
    //     "email" : "gamecenter@contact.com"
    // }',
    //     ]);






    }
}
