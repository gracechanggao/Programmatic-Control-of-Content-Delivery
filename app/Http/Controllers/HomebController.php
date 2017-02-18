<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Page;

use App\Http\Requests;






use Redirect, Auth;

use Illuminate\Support\Facades\Input;

class HomebController extends Controller
{
    
   	public function index()
	{
		return view('homeb')->withPages(Page::all());
	}

}
