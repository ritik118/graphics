<?php

namespace ritik\dynamicgraphs\controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Questioning;
use App\Option;
use App\Answer;
class AnswerController extends Controller
{
	

    public function store(){
    	$questioning=new Questioning();
    	$question=$questioning->all();
    	for($i=1;$i<=1000;$i++){
    		foreach ($question as $row){
    			$q=$row['id'];
    			$options=new Option();
    			$o = $options->select('*')->where('ques_id','=',$q)->get();
    			$randoption=array();
    			foreach ($o as $op){
    				$randoption[]=$op['id'];
    			}
    			$randIndex = array_rand($randoption);
    			$opop=$randoption[$randIndex];
				$data=[
			'user_id' => $i,
			'ques_id' => $q,
			'option_id'=>$opop
			];
		//Answer::create($data);
    		}
    	}
    }
}
