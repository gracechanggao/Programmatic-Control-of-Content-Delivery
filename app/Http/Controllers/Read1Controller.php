<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Read1Controller extends Controller
{
    //
      public function index()
    {
        return view('Question/read1');
//          return view('AdminHome')->withPages(Page::all());

    }
}
