<?php

namespace App\Http\Controllers;

use App\Models\Notes;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(auth()->user()){
            return view('notes.index',[
                'messages'=>Notes::orderBy('created_at', 'desc')->get()
            ]);
        }else{
            return view('contact',[
                'message' => "تم تسجيل رسالتك سيتم التواصل معك باقرب وقت"
            ]);
        }
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
        $request -> validate([
            'name' => 'required',
            'email' => 'required',
            'content' => 'required',
            ]);

        $note = new Notes();
        $note -> name   = strip_tags($request -> input('name')) ;
        $note -> email   = strip_tags($request -> input('email')) ;
        $note -> content   = strip_tags($request -> input('content')) ;

        $note -> save();

        return redirect() -> route ('note.index');
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
        return view('contact');
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
