<?php

namespace App\Http\Controllers;

use App\Models\Nav;
use Illuminate\Http\Request;

class NavController extends Controller
{
    public function index () {
        $nav = Nav::all();
        return view('backoffice.pages.navbar.nav', compact('nav'));
    }

    public function edit (Nav $id) {

        $nav = $id;
        return view('backoffice.pages.navbar.navEdit', compact('nav'));
    }

    public function update (Request $request, Nav $id) {
        $request->validate([
            "name1" => "required",
            "name2" => "required",
            "section1" => "required",
            "section2" => "required",
            "section3" => "required",
            "section4" => "required",
            "section5" => "required",
        ]);
        $nav = $id;
        $nav->name1 = $request->name1;
        $nav->name2 = $request->name2;
        $nav->section1 = $request->section1;
        $nav->section2 = $request->section2;
        $nav->section3 = $request->section3;
        $nav->section4 = $request->section4;
        $nav->section5 = $request->section5;
        $nav->save();

        return redirect()->route('nav')->with('message', 'Navigation modifiée avec succès');
    }
}
