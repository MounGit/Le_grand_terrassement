<?php

namespace Database\Seeders;

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
            'password' => Hash::make('bakabaka'),
            "role_id" => 1,
            'created_at' => now()
        ]);

        DB::table('welcomes')->insert([
            "about_part1" => "Fish don't fry in the kitchen and beans don't burn on the grill. Took a whole lotta tryin' just to get up that hill. Love exciting and new. Come aboard were expecting you. Love life's sweetest reward Let it flow it floats back to you.",
            "about_part2" => "Here he comes Here comes Speed Racer. He's a demon on wheels. Believe it or not I'm walking on air. I never thought I could feel so free. Flying away on a wing and a prayer.",
            "award_part1" => "Fish don't fry in the kitchen and beans don't burn on the grill. Took a whole lotta tryin' just to get up that hill. Love exciting and new. Come aboard were expecting you. Love life's sweetest reward Let it flow it floats back to you.",
            "award_part2" => "Here he comes Here comes Speed Racer. He's a demon on wheels. Believe it or not I'm walking on air. I never thought I could feel so free. Flying away on a wing and a prayer.",
        ]);

        
    }
}
