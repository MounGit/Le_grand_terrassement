<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use CreateChefsTable;
use Database\Factories\ChefFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ChefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chef = Chef::all();
       return view('backoffice.pages.chef.chef', compact('chef'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.pages.chef.chefCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "photo_chef" => "required",
            "nom_chef" => "required",

        ]);
        $chef = new Chef;
        $chef->nom_chef = $request->nom_chef;
        $chef->photo_chef = $request->file("photo_chef")->hashName();
        $chef->save();

        $request->file('photo_chef')->storePublicly('img', 'public');
        return redirect()->route('chefs.index')->with('message', 'Nouveau chef ajouté avec succès');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chef  $chef
     * @return \Illuminate\Http\Response
     */
    public function show(Chef $chef)
    {
        return view('backoffice.pages.chef.chefShow', compact('chef'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chef  $chef
     * @return \Illuminate\Http\Response
     */
    public function edit(Chef $chef)
    {

        return view('backoffice.pages.chef.chefEdit', compact('chef'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chef  $chef
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chef $chef)
    {
        $request->validate([
            "photo_chef"=> "required",
            "nom_chef"=> "required",
        ]);
        Storage::disk("public")->delete("img/" . $chef->photo_chef);
        $chef->nom_chef = $request->nom_chef;
        $chef->photo_chef = $request->file("photo_chef")->hashName();
        $chef->save();
        $request->file('photo_chef')->storePublicly('img', 'public');

        return redirect()->route('chefs.index')->with('message', 'Modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chef  $chef
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chef $chef)
    {
        Storage::disk('public')->delete('img/'. $chef->url);
        $chef->delete();
        return redirect()->route('chefs.index')->with('message', 'Chef supprimé avec succès');
        
    }
}
