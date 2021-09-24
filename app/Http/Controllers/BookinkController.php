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
        // return view('backoffice.pages.bookink.bookinkCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     "name" => "required",
        //     "email" => "required",
        //     "url" => "required", 
        //     "msg" => "required"
        // ]);

        // $bookink = new Bookink;
        // $bookink->name = $request->name;
        // $bookink->email = $request->email;
        // $bookink->url = $request->url;
        // $bookink->msg = $request->msg;
        // $bookink->save();


        // return redirect()->route('home')->with('message', 'Message envoyé avec succès');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bookink  $bookink
     * @return \Illuminate\Http\Response
     */
    public function show(Bookink $bookink)
    {
        // return view('backoffice.pages.bookink.bookinkCreate', compact('bookink'));
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
        $request->validate([
            "adress1" => "required",
            "adress2" => "required",
            "adress3" => "required",
            "phone" => "required",
            "mday" => "required",
            "tuday" => "required",
            "wday" => "required",
            "thday" => "required",
            "fday" => "required",
            "satday" => "required",
            "sunday" => "required",
        ]);


        $bookink->adress1 = $request->adress1;
        $bookink->adress2 = $request->adress2;
        $bookink->adress3 = $request->adress3;
        $bookink->phone = $request->phone;
        $bookink->mday = $request->mday;
        $bookink->tuday = $request->tuday;
        $bookink->wday = $request->wday;
        $bookink->thday =$request->thday;
        $bookink->fday = $request->fday;
        $bookink->satday = $request->satday;
        $bookink->sunday = $request->sunday;
        $bookink->save();

        return redirect()->route('bookinks.index')->with('message', 'Information réservations modifiées avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bookink  $bookink
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bookink $bookink)
    {
        // $bookink->delete();
        // return redirect()->route('bookinks.index')->with('message', 'Message supprimé avec succès');
        
    }
}
