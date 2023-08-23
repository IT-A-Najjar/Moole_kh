<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Customers;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::orderBy('created_at', 'desc')->get();
        $comment = Comments::orderBy('created_at', 'desc')->get();
        return view('news.index', [
            'newss' => $news,
            'comments'=>$comment
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
     */public function store(Request $request)
{

        $request -> validate([
            'name' => 'required',
            'news_id' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'content' => 'required',
        ]);
        if(auth()->user()){
            $id_user= auth()->user()->id;
        }

        $comment = new Comments();
        $comment -> content   = strip_tags($request -> input('content')) ;
        $comment -> name   = strip_tags($request -> input('name')) ;
        if(auth()->user()){
            $comment -> user_id   =  auth()->user()->id;
        }else{
            $comment -> user_id   = 1;
        }
        $comment -> news_id = strip_tags($request -> input('news_id')) ;
        $comment -> save();

        return redirect() -> route ('comment.index');
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
