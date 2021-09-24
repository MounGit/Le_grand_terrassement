<?php

namespace App\Http\Controllers;

use App\Models\Bookink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookink = Bookink::all();
        return view('backoffice.pages.bookink.bookink', compact('bookink'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.pages.bookink.bookinkCreate');
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
            "name" => "required",
            "email" => "required",
            "url" => "required", 
            "msg" => "required"
        ]);

        $bookink = new Bookink;
        $bookink->name = $request->name;
        $bookink->email = $request->email;
        $bookink->url = $request->file('url')->hashName();
        $bookink->msg = $request->msg;
        $bookink->save();

        $request->file('url')->storePublicly('img', 'public');

        return redirect()->route('bookinks.index')->with('message', 'Message envoyé avec succès');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bookink  $bookink
     * @return \Illuminate\Http\Response
     */
    public function show(Bookink $bookink)
    {
        return view('backoffice.pages.bookink.bookinkCreate', compact('bookink'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bookink  $bookink
     * @return \Illuminate\Http\Response
     */
    public function edit(Bookink $bookink)
    {
        return view('backoffice.pages.bookink.bookinkEdit', compact('bookink'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bookink  $bookink
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bookink $bookink)
    {
        // $request->validate([
        //     "name" => "required",
        //     "email" => "required",
        //     "url" => "required", 
        //     "msg" => "required"
        // ]);

        // Storage::disk('public')->delete('img/'. $bookink->url);

        // $bookink->name = $request->name;
        // $bookink->email = $request->email;
        // $bookink->url = $request->file('url')->hashName();
        // $bookink->msg = $request->msg;
        // $bookink->save();

        // $request->file('url')->storePublicly('img', 'public');

        // return redirect()->route('bookinks.index')->with('message', 'Message modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bookink  $bookink
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bookink $bookink)
    {
        Storage::disk('public')->delete('img/'. $bookink->url);
        $bookink->delete();
        return redirect()->route('bookinks.index')->with('message', 'Message supprimé avec succès');
        
    }
}
