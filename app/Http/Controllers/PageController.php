<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Page;

use Redirect, Auth;

use Illuminate\Support\Facades\Input;
class PageController extends Controller {

	

          public function show($id)
  {
    return view('admin.pages.show')->withPage(Page::find($id));
  }


}