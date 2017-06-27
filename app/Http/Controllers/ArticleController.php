<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



use App\Page;

use App\Http\Requests;






use Redirect, Auth;

use Illuminate\Support\Facades\Input;


class ArticleController extends Controller
{
    //
//      public function index()
//    {
//        return view('view');
////          return view('AdminHome')->withPages(Page::all());
//
//    }
    


        	public function index()
	{
		return view('starttest')->withPages(Page::all());
	}
                
        public function show($id)
  {
    return view('admin.pages.show')->withPage(Page::find($id));
  }

}
