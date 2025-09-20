<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    function index(Request $request)
    {
        $items = Person::all();
        return view('person.index', ['items' => $items]);
    }

    function find(Request $request)
    {
        return view('person.find', ['input' => '']);
    }

    function search(Request $request)
    {
        $item = Person::find($request->input);
        $params = ['input' => $request->input, 'item' => $item];
        return view('person.find', $params);
    }
}
