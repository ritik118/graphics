<?php

namespace ritik\dynamicgraphs\controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Comment;
use App\Questioning;
class CommentController extends Controller
{
    
	public function store(Request $request){
		$comment=$request->comments;
		$choice=$request->choices;
		Comment::where('ques_id','=',$choice)->update(array('comment' => $comment));
	}

}
