<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Types;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('types.index',[
                'types' => Types::all()
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(
            'types.create',
            [
                'Categories' => Categories::all(),
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'name' => 'required',
            'category_id' => 'required',
        ]);

       $type = new Types();
       $type -> name   = strip_tags($request -> input('name')) ;
       $type -> category_id   = strip_tags($request -> input('category_id')) ;
       $type -> save();

       return redirect() -> route ('type.index');
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
    public function edit(string $id)
    {
        return view('types.edit',[
            'type' => Types::findOrFail($id),
            'Categories' => Categories::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $type)
    {
        $request -> validate([
            'name' => 'required',
            'category_id' => 'required',
        ]);

        $to_update = Types::findOrFail($type);
        $to_update -> name   = strip_tags($request -> input('name')) ;
        $to_update -> category_id   = strip_tags($request -> input('category_id')) ;
        $to_update -> save();

       return redirect() -> route ('type.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($type)
    {
        $to_delete =  Types::findOrFail($type);
        $to_delete -> delete();
        return redirect() -> route ('type.index');
    
    }
}
