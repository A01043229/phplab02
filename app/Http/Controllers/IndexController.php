<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('layouts.app');
    }
    public function welcome()
    {
        return view('welcome');
    }
    public function page1()
    {
        $people = ['abc', 'dcf', 'efg', 'hij'];
        return view('page1', compact('people'));
    }
    public function page2($id, $name, $pass)
    {
        return view('page2', compact('id', 'name', 'pass'));
    }
    public function page3()
    {
        return view('page3');
    }
}
