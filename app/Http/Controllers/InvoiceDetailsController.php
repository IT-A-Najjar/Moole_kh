<?php

namespace App\Http\Controllers;

use App\Models\Invoice_details;
use App\Models\Invoices;
use App\Models\Products;
use Illuminate\Http\Request;

class InvoiceDetailsController extends Controller
{
    public function someid()
    {
        return [
            "6" => 1,
            "10" => 2,
            "11" => 1,
            "12" => 1,
            "13" => 1,
            "14" => 1
        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $idData = $this->someid();
        $request = new Request(['idData' => $idData]);
        $this->updateCart($request);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function updateCart(Request $request)
    {
        $cartData = $request->input('idData');
//        $total = 0;
//        foreach ($cartData as $productId => $quantity) {
//            $total += $quantity;
//        }
        $total = array_sum($cartData);

        $invoice = new Invoices();
        $invoice->time = now();
        $invoice->total_amount = $total;
        $invoice->customer_id = auth()->user()->id;
        $invoice->save();
        foreach ($cartData as  $productId => $quantity) {
            $product = Products::findOrFail($productId);
            $invoice_n = Invoices::orderBy('created_at', 'desc')
                ->orderBy('id', 'desc')
                ->first();
            $invoices_d = new Invoice_details();
            $invoices_d ->	name   = $product->name ;
            $invoices_d -> 	count   = $quantity ;
            $invoices_d -> unit_price   = $product->price ;
            $invoices_d -> total_price   = $product->price * $cartData[$productId] ;
            $invoices_d->product_id = $productId;
            $invoices_d->invoice_id=$invoice_n->id;

            $invoices_d -> save();
        }

        return response()->json(['message' => 'Cart updated successfully']);
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

    private function method(string $string)
    {
    }
}
