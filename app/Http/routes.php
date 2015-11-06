<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/','PagesController@index');



Route::post('save','PagesController@save');
Route::post('update','PagesController@update');

Route::get('EditTask/{id}','PagesController@EditTask');
Route::get('DeleteTask/{id}','PagesController@DeleteTask');
Route::get('DeleteDoneTask/{id}','PagesController@DeleteDoneTask');
Route::get('AcceptTask/{id}','PagesController@AcceptTask');

Route::get('DoneTask','PagesController@DoneTask');

Route::get('/categories',function(){

    if(Request::ajax()){
        return 'ajax get request and giving all categories';

    }

});