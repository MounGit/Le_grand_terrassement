<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Database\Factories\CustomerFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = Customer::all();
        return view('backoffice.pages.customer.customer', compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.pages.customer.customerCreate');
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
            "firstname" => "required",
            "comment" => "required",
            "grade" => "required",
            "url" => "required"
        ]);
        $customer = new Customer;
        $customer->name = $request->name;
        $customer->firstname = $request->firstname;
        $customer->comment = $request->comment;
        $customer->grade = $request->grade;
        $customer->url = $request->file('url')->hashName();
        $customer->save();

        $request->file('url')->storePublicly('img', 'public');
        return redirect()->route('customers.index')->with('message', 'Commentaire ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        return view('backoffice.pages.customer.customerShow', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        return view('backoffice.pages.customer.customerEdit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            "name" => "required",
            "firstname" => "required",
            "comment" => "required",
            "grade" => "required",
            "url" => "required"
        ]);

        Storage::disk('public')->delete('img/'. $customer->url);

        $customer->name = $request->name;
        $customer->firstname = $request->firstname;
        $customer->comment = $request->comment;
        $customer->grade = $request->grade;
        $customer->url = $request->file('url')->hashName();
        $customer->save();

        return redirect()->route('customers.index')->with('message', 'Commentaire ajouté avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        Storage::disk('public')->delete('img/'. $customer->url);
        $customer->delete();

        return redirect()->route('customers.index')->with('message', 'Commentaire supprimé avec succès');    
    }
}
