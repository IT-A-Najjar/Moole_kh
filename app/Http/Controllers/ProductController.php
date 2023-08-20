<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Product;
use App\Models\Products;
use App\Models\Types;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
//    public function index(Request $request)
//    {
//        if(!empty($request)){
//            return view(
//                'product.index',
//                [
//                    'products' => Products::orderBy('created_at', 'desc')->get(),
//                ]
//            );
//        }else{
//            return $request;
//        }
//    }
//// في وحدة التحكم (Controller)
    public function index(Request $request)
    {
        $sortBy = $request->input('sort_by'); // افترض أن قيمة 'sort_by' تأتي من القائمة

        $productsQuery = Products::query();

        if ($sortBy == null) {
            $productsQuery->orderBy('created_at', 'desc');
        } elseif ($sortBy == '1s') {
            $productsQuery->orderBy('price', 'asc');
        }elseif ($sortBy == '2s') {
            $productsQuery->whereBetween('price', [0, 55]);
        } elseif ($sortBy == '3s') {
            $productsQuery->whereBetween('price', [55, 100]);
        } else {
            $productsQuery->where('type_id', $sortBy);
        }

        $products = $productsQuery->get();
        $types = Types::all();

        return view('product.index', compact('products','types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create',[
            'types' => Types::all()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'type_id'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // تحقق من نوع وحجم الصورة
        ]);

        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $imageName);

        $product = new Products([
            'name' => $request->input('name'),
            'desctiption' => $request->input('description'),
            'price' => $request->input('price'),
            'image' => $imageName,
            'type_id'=>$request->input('type_id'),
        ]);
        $product->save();

        return redirect()->route('product.index'); // توجيه إلى صفحة القائمة
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
