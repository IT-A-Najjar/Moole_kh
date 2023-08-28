<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function someid()
    {
        return [6, 10, 11, 12, 13, 14];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $idData = $this->someid();
        $products = [];

        foreach ($idData as $productId) {
            $product = Products::where('id', $productId)->first();
            if ($product) {
                $products[] = $product;
            }
        }

        return view('shopping-cart', [
            'products' => $products,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
