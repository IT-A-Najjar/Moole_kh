<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use App\Models\Offers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        if($id_offer == null){
            return view('checkout',[
                'message' => "تم التسجيل بنجاح"
            ]);
//        }else{
//            return view('checkout',[
//                'message' => "ادخل بيانات التواصل",
//                'offer' => $id_offer
//            ]);
//        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
//    public function store(Request $request)
//    {
//        $request -> validate([
//            'name' => 'required',
//            'address' => 'required',
//            'email' => 'required',
//            'phone_number' => 'required',
//            'password' => 'required',
//        ]);
//
//
//
//            $customer = new Customers();
//            $customer -> name   = strip_tags($request -> input('name')) ;
//            $customer -> address   = strip_tags($request -> input('address')) ;
//            $customer -> email   = strip_tags($request -> input('email')) ;
//            $customer -> phone_number   = strip_tags(Hash::make($request -> input('phone_number'))) ;
//            $customer -> password   = strip_tags($request -> input('password')) ;
//
//            $customer -> save();
//            return redirect() -> route ('customer.index');
//    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'password' => 'required',
        ]);

        // التحقق مما إذا كان البريد الإلكتروني أو رقم الهاتف موجودين مسبقاً
        $existingCustomer = Customers::where('email', $request->input('email'))
            ->orWhere('phone_number', $request->input('phone_number'))
            ->first();

        if ($existingCustomer) {
            // البيانات موجودة مسبقاً
            return view('checkout',[
                'message' => "بياناتك موجودة مسبقا"
            ]);
//            return back()->with('error', 'البيانات موجودة مسبقاً.');
        }else{
            $customer = new Customers();
            $customer->name = strip_tags($request->input('name'));
            $customer->address = strip_tags($request->input('address'));
            $customer->email = strip_tags($request->input('email'));
            $customer->phone_number = strip_tags($request->input('phone_number'));
            $customer->password = strip_tags( Hash::make($request->input('password')));

            $customer->save();
            return redirect()->route('customer.index');
        }

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
