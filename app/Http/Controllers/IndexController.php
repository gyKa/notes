<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    public function index()
    {
        $notes = app('db')->select("SELECT name, text FROM notes ORDER BY id DESC");

        return view('index', ['notes' => $notes]);
    }
}
