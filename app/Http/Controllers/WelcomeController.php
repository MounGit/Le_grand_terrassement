<?php

namespace App\Http\Controllers;

use App\Models\Welcome;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index() {
        $welcome = Welcome::all();
        return view('backoffice.pages.welcome.welcome', compact('welcome'));
    }

    public function edit (Welcome $id) {
        $welcome = $id;
        return view('backoffice.pages.welcome.welcomeEdit', compact('welcome'));
    }

    public function update ( Request $request, Welcome $id) {
        $request->validate([
            "about_part1"=> "required",
            "about_part2"=> "required",
            "award_part1"=> "required",
            "award_part2"=> "required",
        ]);

        $welcome = $id;
        $welcome->about_part1 = $request->about_part1;
        $welcome->about_part2 = $request->about_part2;
        $welcome->award_part1 = $request->award_part1;
        $welcome->award_part2 = $request->award_part2;
        $welcome->save();

        return redirect()->route('welcome')->with('message', 'Modifié avec succès');
    }
}
