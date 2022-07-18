<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    function index()
    {
        return view('todo.index');
    }

    function create()
    {
        return view('todo.create');
    }

    function edit()
    {
        return view('todo.edit');
    }

    function view()
    {
        return view('todo.view');
    }
}
