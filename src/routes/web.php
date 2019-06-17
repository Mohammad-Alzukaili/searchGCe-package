<?php
Route::group(['namespace'=>'Mawdoo3\Search\Http\Controllers'],function(){

    Route::get('/search','SearchController@search')->name('search');
    Route::get('/get_result/{q}','SearchController@getResults');
    Route::post('/search','SavedResultController@send');

    Route::post('/save',"SavedResultController@save");
    Route::get("/show","SavedResultController@showSavedLinks")->name("show");
    Route::get("/delete","SavedResultController@delete");
    Route::post("/update","SavedResultController@update");
//    Route::get('/search?{q}',"SearchController@search");
});

