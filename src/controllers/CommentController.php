<?php

namespace ritik\dynamicgraphs\controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use ritik\dynamicgraphs\models\Comment;
use ritik\dynamicgraphs\models\Questioning;
class CommentController extends Controller
{

	public function storenew(){
		$label=Questioning::count();
for($i=1;$i<sizeof($label);$i++){
			$data=[
			'ques_id' => $i,
			'comment' => "Ritik"
		];
		Comment::create($data);
		}

		return view('ritik.dynamicgraphs.store');
	}
    
	public function store(Request $request){
		$comment=$request->comments;
		$choice=$request->choices;
		Comment::where('ques_id','=',$choice)->update(array('comment' => $comment));
	}

}
