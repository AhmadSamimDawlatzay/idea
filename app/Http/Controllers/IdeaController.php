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
		$statusCounts = Idea::statusCont();
		return view('ideas',
		  compact('ideas', 'statusCounts'));
	}
	
	public function show(Idea $idea)
	{
		return view('idea-show', compact('idea'));
	}
	
	public function destroy(Idea $idea)
	{
		$idea->delete();
		return to_route('ideas.index');
	}
}
