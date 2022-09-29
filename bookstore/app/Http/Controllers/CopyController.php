<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Copy;
use App\Models\User;
use Illuminate\Http\Request;

class CopyController extends Controller
{
    public function index()
    {
        //visszatér az összes Copy-el : SELECT * FROM CopyS
        $copies=response()->json(Copy::all());
        return $copies;
    }

    public function show($id)
    {
        $copy=response()->json(Copy::find($id));
        return $copy;
    }

    public function destroy($id)
    {
        Copy::find($id)->delete();
        return redirect('/copy/list');
    }

    public function store(Request $request)
    {
        $copy = new Copy();
        $copy->user_id = 1;
        $copy->book_id = $request->book_id;
        $copy->status = 0;
        $copy->save();
        return redirect('/copy/list');
    }
    public function update(Request $request, $id){
        $copy = Copy::find($id);
        $copy->user_id = $request->user_id;
        $copy->book_id = $request->book_id;
        $copy->status = $request->status;
        $copy->save();
        return redirect('/copy/list');
    }

    public function newView()
    {
        $books=Book::all();
        return view('copy.new', ['books' => $books]);
    }

    public function editView($id)
    {
        $copy=Copy::find($id);
        $users=User::all();
        $books=Book::all();
        return view('copy.edit', ['copy'=>$copy, 'users'=>$users, 'books'=>$books]);
    }

    public function listView()
    {
        $copies = Copy::all();
        return view('copy.list', ['copies' => $copies]);
    }
}
