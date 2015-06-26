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
abstract class BarInterface{
     abstract  function getAA();
}

class Bar extends  BarInterface{
    public function __construct(){
    }
    public function addplus($value){
        return $value + 10;
    }
    function getAA(){

    }
}

App::bind('BarInterface',function(){
      return new Bar();
}) ;

Route::get('bar', function (BarInterface $bar,Request $request){

// \App\Article::create(['title'=>'new','body'=>'New body']);

//App\Article::where('body','loren inpun')->get();

    return App\Article::where('body','loren inpun')->get();;
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('home',function(){
    return view('index');
});


Route::get('tagle',function(){
    if(Auth::check()){
       $user =  Auth::user();
Auth::user()->articles()->save(new \App\Article());

    return $user;}
    return "sorry you should authorizaishen";
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::any('foo', function () {
    return 'Hello World';
});

/*Route::group(['middleware' => 'auth',], function () {

    Route::get('user/profile', function () {
        // Uses Auth Middleware

        return 'hell';
    });
});*/
Route::get('user/{id}',function($id){
    if(Auth::user()->getAttribute('name') == $id){
        return "hello";
    }else return Auth::user()->getAttribute('name');


});