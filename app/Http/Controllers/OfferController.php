<?php

namespace App\Http\Controllers;

use App\Models\Offers;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('offers',[
            'offers' => Offers::all()

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('offers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'type' => 'required',
            'des' => 'required',
            'discount' => 'required',
            'expiry' => 'required',
        ]);

        $offer = new Offers();
        $offer -> offer_type   = strip_tags($request -> input('type')) ;
        $offer -> offer_des   = strip_tags($request -> input('des')) ;
        $offer -> discount_value   = strip_tags($request -> input('discount')) ;
        $offer -> expiry_date   = strip_tags($request -> input('expiry')) ;

        $offer -> save();

        return redirect() -> route ('offer.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('offers.edit',[
            'offer' => Offers::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request -> validate([
            'type' => 'required',
            'des' => 'required',
            'discount' => 'required',
            'expiry' => 'required',
        ]);

        $to_update = Offers::findOrFail($id);
        $to_update -> offer_type   = strip_tags($request -> input('type')) ;
        $to_update -> offer_des   = strip_tags($request -> input('des')) ;
        $to_update -> discount_value   = strip_tags($request -> input('discount')) ;
        $to_update -> expiry_date   = strip_tags($request -> input('expiry')) ;
        $to_update -> save();

        return redirect() -> route ('offer.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $to_delete =  Offers::findOrFail($id);
        $to_delete -> delete();
        return redirect() -> route ('offer.index');

    }
}
