<?php
use Illuminate\Http\Request;
// Route::get('message', 'MessageController.php');
/*
Route::get('message', function(){
    return view('message::message');
})->name('message');

Route::post('message', function (Request $request){
   // return view('message::message')->name('message')
   return $request->all();
});
*/
// assign a namespace to the routes
Route::group(['namespace'=>'Blairt\Message\Http\Controllers'], function() {
    // updated routes
    Route::get('message','MessageController@index')->name('message');
    Route::post('message','MessageController@store');
});


