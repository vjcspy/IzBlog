<?php namespace Modules\Izblog\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class IzBlogController extends Controller {
	
	public function index()
	{
		return view('izblog::index');
	}
	
}