<?php

namespace ritik\dynamicgraphs\controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
 use ritik\dynamicgraphs\models\Questioning;
 use ritik\dynamicgraphs\models\Answer;
class QuestioningController extends Controller
{

	public function index(){
    	 $labels=Questioning::all('label');
    	 $comment=Questioning::find(1)->comments()->get();
    	 
    	return View('ritik.dynamicgraphs.printradio')->with('label',$labels)->with('comment',$comment);
	}

	
 	public function getId(Request $request){
 		$choice=$request->choices;
 		$choices=Questioning::select('id')->where('label','=',$choice)->get();
 		return response()->json($choices);
 	}

 	public function searchcomment(Request $request){
 		$a=$request->ac;
 		$ques_idd=Questioning::select('id')->where('label','=',$a)->get();
 		
 		$comment=Questioning::find($ques_idd[0]->id)->comments;
 		
 		return response()->json($comment);
 	}


 	public function search(Request $request){
 		$a=$request->ac;
 		$ques_idd=Questioning::select('*')->where('label','=',$a)->get();
 		$ques_id=$ques_idd[0]['id'];
 		$options = Questioning::find($ques_id)->options;
 		
 		$count=array();
 		 foreach ($options as $op) {
 		$opid=$op->id;
 			$count[] = Answer::where('option_id','=',$opid)->count();
 			
 			
 			//$count[] = Questioning::find($ques_id)->answers->get();
 			
 		}
 		$rows=array();
		$table=array();
		$table['cols']=array(
			array(
				'type'=>'string',
				'label'=>$a
				
			),	
			array(
				'type'=>'number',
				'label'=>'count'
				
			)
		);
		$i=0;
		foreach ($options as $row){

			$sub_array=array();
			$sub_array[]=array(
				"v"=>$row->label
			);
			$sub_array[]=array(
				"v"=>$count[$i]
			);
			$rows[]=array(
				"c"=>$sub_array
			);
			$i=$i+1;
		}
		$table['rows']=$rows;

		return response()->json($table);

 	}


}
