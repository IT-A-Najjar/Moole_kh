<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(
            'product.index',
            [
                'products' => Product::all(),
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $img = $request->file('image');
            
            // $imageName = time() . '.' . $img->getClientOriginalExtension();

            // تخزين الصورة في المسار المحدد
            // $img->move(public_path('image'), $imageName);

            // يمكنك هنا تخزين اسم الصورة في قاعدة البيانات إذا لزم الأمر

            $request->validate([
                'name' => 'required',
                'price' => 'required',
                'image'=> 'required',
            ]);

            $product = new Product();
            $product->name   = strip_tags($request->input('name'));
            $product->price = strip_tags($request->input('price'));
            $image = new Image();
            // $image->name = $imageName;

            $product->save();
            // $image->seve();

            // return redirect()->route('product.index');
            return $img;
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
