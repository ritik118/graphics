<?php





Route::group(['namespace'=>'ritik\dynamicgraphs\controllers'],function(){

	Route::get('/printradio','QuestioningController@index');
Route::get('/radio','QuestioningController@search');
Route::get('/comment','QuestioningController@store');
Route::get('/getid','QuestioningController@getId');
Route::get('/radiocom','QuestioningController@searchcomment');

Route::get('/answer', 'AnswerController@store');

Route::get('/json','OptionController@store');

Route::get('/newcomment','commentController@store');
Route::get('/postcomment','commentController@store');

});


