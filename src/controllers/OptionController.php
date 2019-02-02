<?php

namespace ritik\dynamicgraphs\controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use ritik\dynamicgraphs\models\Questioning;
use ritik\dynamicgraphs\models\Option;

class OptionController extends Controller
{
    

	public function store(){



			$path=storage_path()."/json/rawdata.json";
$json =file_get_contents($path);
$jsonarray=json_decode($json,true);
$n=sizeof($jsonarray);


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
$post=Option::find($i)->questionings()->get();
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

return redirect()->action('AnswerController@store');

 	}

 	

}
