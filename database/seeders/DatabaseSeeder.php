<?php

namespace Database\Seeders;

use App\Models\Bookink;
use App\Models\Customer;
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
            "role_id" => 1,
            'created_at' => now()
        ]);

        DB::table('welcomes')->insert([
            "about_part1" => "Fish don't fry in the kitchen and beans don't burn on the grill. Took a whole lotta tryin' just to get up that hill. Love exciting and new. Come aboard were expecting you. Love life's sweetest reward Let it flow it floats back to you.",
            "about_part2" => "Here he comes Here comes Speed Racer. He's a demon on wheels. Believe it or not I'm walking on air. I never thought I could feel so free. Flying away on a wing and a prayer.",
            "award_part1" => "Fish don't fry in the kitchen and beans don't burn on the grill. Took a whole lotta tryin' just to get up that hill. Love exciting and new. Come aboard were expecting you. Love life's sweetest reward Let it flow it floats back to you.",
            "award_part2" => "Here he comes Here comes Speed Racer. He's a demon on wheels. Believe it or not I'm walking on air. I never thought I could feel so free. Flying away on a wing and a prayer.",
        ]);
        
        Customer::factory(5)->create();   

        DB::table('bookinks')->insert([
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
    }
}
