<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Read1Question1Controller extends Controller
{
    //
      public function index()
    {
        return view('Question/question1');
//          return view('AdminHome')->withPages(Page::all());

    }
}
