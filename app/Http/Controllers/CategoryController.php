<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('category.index',[
                'categories' => Categories::all()
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'name' => 'required',
        ]);

       $category = new Categories();
       $category -> name   = strip_tags($request -> input('name')) ;

       $category -> save();

       return redirect() -> route ('category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($category)
    {
        return view('category.edit',[
            'category' => Categories::findOrFail($category)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $category)
    {
        $request -> validate([
            'name' => 'required',
        ]);

        $to_update = Categories::findOrFail($category);
        $to_update -> name   = strip_tags($request -> input('name')) ;
        
        $to_update -> save();

       return redirect() -> route ('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($category)
    {
        $to_delete =  Categories::findOrFail($category);
        $to_delete -> delete();
        return redirect() -> route ('category.index');
    
    }
}
