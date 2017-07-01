<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function createForm()
    {
        return view('create');
    }

    public function create(Request $request)
    {
       $name = $request->input('name');
       $text = $request->input('text');

       app('db')->insert('INSERT INTO notes (name, text) values (?, ?)', [$name, $text]);

       return redirect('/'); 
    }
}
