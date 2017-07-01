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

    public function editForm($id)
    {
	$notes = app('db')->select('SELECT id, name, text FROM notes WHERE id = ?', [$id]);

        if (empty($notes)) {
           abort(404);
        }

        return view('create', ['note' => $notes[0]]);
    }

    public function edit(Request $request)
    {
       $id = $request->input('id');
       $name = $request->input('name');
       $text = $request->input('text');

       app('db')->update('UPDATE notes SET name = ?, text = ? WHERE id = ?', [$name, $text, $id]);

       return redirect('/'); 
    }
}
