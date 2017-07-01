<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    public function index()
    {
        $notes = app('db')->select("SELECT name, text FROM notes");

        return view('index', ['notes' => $notes]);
    }
}
