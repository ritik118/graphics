<?php

namespace ritik\dynamicgraphs\controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use ritik\dynamicgraphs\models\Questioning;
use ritik\dynamicgraphs\models\Option;
use ritik\dynamicgraphs\models\Answer;
use ritik\dynamicgraphs\models\Comment;
class OptionController extends Controller
{
    

	public function store(){



			$path=storage_path()."/json/rawdata.json";
$json =file_get_contents($path);
$jsonarray=json_decode($json,true);
$n=sizeof($jsonarray);
$label=array();
$name=array();
$count=0;
for($i=0;$i<$n;$i++){
	if($jsonarray[$i]['type'] == "radio-group"){
	$label[$count]=$jsonarray[$i]['label'];
	$name[$count]=$jsonarray[$i]['name'];
	$count++;
}
}


	for($i=0; $i<sizeof($label); $i++){
		$data=[
			'label' => $label[$i],
			'name' => $name[$i]
		];
		Questioning::create($data);
		}




$labeln=array();
$name1=array();
$count=0;
for($i=0;$i<$n;$i++){
	if($jsonarray[$i]['type'] == "radio-group"){
	$labeln[$count]=$jsonarray[$i]['label'];
	$name1[$count]=$jsonarray[$i]['name'];
	$count++;
}
}
 for($i=1; $i<=sizeof($labeln); $i++){
$post = Questioning::find($i);
$label1=$post->label;

for($j=0;$j<$n;$j++) {
	if($jsonarray[$j]['label'] == $label1){
		foreach ($jsonarray[$j]['values'] as $key => $value) {
			$l=$value['label'];
			$v=$value['value'];
			$data=[
			'label'=>$l,
			'value'=>$v,
			'ques_id'=>$i
		];
		Option::create($data);
		}
		
	}
}
}


$questioning=new Questioning();
    	$question=$questioning->all();
    	for($i=1;$i<=100;$i++){
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
		Answer::create($data);
    		}
    	}


for($i=1;$i<sizeof($label);$i++){
			$data=[
			'ques_id' => $i,
			'comment' => "Ritik"
		];
		Comment::create($data);
		}

		return view('ritik.dynamicgraphs.store');

 	}

 	

}
