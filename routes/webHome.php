<?php 

Route::get('/index', 'HomeController@index');

// Route::get('/login', 'HomeController@login');
Route::get('/loginModal', 'HomeController@loginModal');


Route::get('/registerModal', 'HomeController@registerModal');


Route::get('/register', 'HomeController@register');
Route::post('signup','HomeController@signup');

//Route::post('login','HomeController@login1');



 ?>