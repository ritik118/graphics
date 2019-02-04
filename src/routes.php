<?php





Route::group(['namespace'=>'ritik\dynamicgraphs\controllers'], function () {

    Route::get('/printradio', 'QuestioningController@index');
    Route::get('/radio', 'QuestioningController@search');
    Route::get('/getid', 'QuestioningController@getId');
    Route::get('/radiocom', 'QuestioningController@searchcomment');
    Route::get('/store', 'QuestioningController@store');
    Route::get('/questiontable', 'QuestioningController@getTable');

    Route::get('/optionstore', 'OptionController@store')->name('optionstore');
    Route::get('/optiontable', 'OptionController@search');
    
    Route::get('/commentstore', 'CommentController@storenew')->name('commentstore');
    Route::get('/postcomment', 'commentController@store');

});
