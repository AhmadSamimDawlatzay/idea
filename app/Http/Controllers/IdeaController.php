<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
	public function index(Request $request)
	{
		$ideas = Idea::query()
		  ->When($request->status, function ($query, $status)
		  {
			  $query->Where('status', $status);
		  })
		  ->get();
		return view('ideas',
		  compact('ideas'));
	}
}
