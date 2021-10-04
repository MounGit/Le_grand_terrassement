<?php

namespace Database\Seeders;

use App\Models\Bookink;
use App\Models\Customer;
use App\Models\User;
use App\Models\Welcome;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('roles')->insert([
            ["name" => "admin"],
            ["name" => "webmaster"],
            ["name" => "editeur"]  

        ]);

        DB::table('users')->insert([
            "name" => "Pablo",
            "email" => "test@mail.com",
            "password" => Hash::make('bakabaka'),
            "role_id" => 2,
            'created_at' => now()
        ]);

        DB::table('welcomes')->insert([
            "about_part1" => "Fish don't fry in the kitchen and beans don't burn on the grill. Took a whole lotta tryin' just to get up that hill. Love exciting and new. Come aboard were expecting you. Love life's sweetest reward Let it flow it floats back to you.",
            "about_part2" => "Here he comes Here comes Speed Racer. He's a demon on wheels. Believe it or not I'm walking on air. I never thought I could feel so free. Flying away on a wing and a prayer.",
            "award_part1" => "Fish don't fry in the kitchen and beans don't burn on the grill. Took a whole lotta tryin' just to get up that hill. Love exciting and new. Come aboard were expecting you. Love life's sweetest reward Let it flow it floats back to you.",
            "award_part2" => "Here he comes Here comes Speed Racer. He's a demon on wheels. Believe it or not I'm walking on air. I never thought I could feel so free. Flying away on a wing and a prayer.",
        ]);


        DB::table('chefs')->insert([

            ["photo_chef" => "1.jpg",
            "nom_chef" => "Jhon Doe"],
            ["photo_chef" => "1.jpg",
            "nom_chef" => "Jhon Doe"],
            ["photo_chef" => "1.jpg",
            "nom_chef" => "Jhon Doe"],
            ["photo_chef" => "1.jpg",
            "nom_chef" => "Jhon Doe"],
        ]);

        DB::table('customers')->insert([
            [
                "name" => "Davies",
                "firstname" => "Charles",
                "comment" => "Compellingly customize highly efficient outsourcing with premium quality vectors. Conveniently target customer directed relationships after highly efficient process improvements.",
                "grade" => 5,
                "url" => "small1.jpg"
            ],
            [
                "name" => "Davies",
                "firstname" => "Charles",
                "comment" => "Compellingly customize highly efficient outsourcing with premium quality vectors. Conveniently target customer directed relationships after highly efficient process improvements.",
                "grade" => 5,
                "url" => "small2.jpg"
            ]
        ]);


        Customer::factory(5)->create();   

        DB::table('bookinks')->insert([
            // "title1" => "BOOK",
            // "title2" => "YOUR",
            // "title3" => "TABLE",
            // "subtitle" => "satisfaction, everytime.",
            "adress1" => "Florence Building",
            "adress2" => "Kings Square",
            "adress3" => "London, LDN1 23 ",
            "phone" => "+448754 658 048",
            "mday" => "11:00 AM - 11:00 PM",
            "tuday" => "11:00 AM - 11:00 PM",
            "wday" => "11:00 AM - 11:00 PM",
            "thday" => "11:00 AM - 11:00 PM",
            "fday" => "11:00 AM - 1:00 AM",
            "satday" => "11:00 AM - 1:00 AM",
            "sunday" => "11:00 AM - 1:00 AM",
        ]);

        // Bookink::factory(15)->create();

        User::factory(10)->create();

        DB::table('navs')->insert([
            "name1" => "THE",
            "name2" => "GRILL",
            "section1" => "ABOUT US",
            "section2" => "SPECIALS",
            "section3" => "OUR MENU",
            "section4" => "BOOK A TABLE",
            "section5" => "EXTRAS",
        ]);

        DB::table('sections')->insert([
            "video"=> "https://www.youtube.com/watch?v=H3NIBobsWh0",
            "logo" => "intro-logo.png", 
            "sect1_title" => "A Warm Welcome",
            "sect1_subtitle" => "Were very happy to see you.",
            "sect1_bg" => "bg1.jpg",
            "sect2_title" => "Our Acclaimed Chef",
            "sect2_subtitle" => "dedicated to excellence",
            "sect2_bg" => "bg2.jpg",
            "sect3_title" => "Our Happy Customers",
            "sect3_subtitle" => "satisfaction, everytime.",
            "sect3_bg" => "bg3.jpg",
            "sect4_title" => "Book Your Table",
            "sect4_subtitle" => "satisfaction, everytime.",
            "sect4_bg" => "bg4.jpg"
        ]);
    }
}
