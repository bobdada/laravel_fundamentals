<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    
   return "hi there";
});

//Route::get('/contact/{id}','postController@index');

//Route::resource('/posts','postController');

Route::get('contact','postController@contact');

Route::get('post/{id}/{username}','postController@post');
 
//  Route::get('/about',function(){
//    return "contact us here";
//  });
 
// Route::get('/pages/{id}/{eg}', function ($id,$eg) {
//     return "this is the page no" . $id . "with eg no" . $eg;
// });

// Route::get('/pages/solution/example', array('as'=>'admineg',function(){
//   $url=route('admineg');
//   return "the page is" . $url;
   
 //}));
