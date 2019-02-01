<?php





Route::group(['namespace'=>'ritik\dynamicgraphs\controllers'],function(){

	
Route::get('/radio','QuestioningController@search');
Route::get('/getid','QuestioningController@getId');
Route::get('/radiocom','QuestioningController@searchcomment');

Route::get('/answer', 'AnswerController@store');

Route::get('/printradio','OptionController@store');


Route::get('/postcomment','commentController@store');

});


