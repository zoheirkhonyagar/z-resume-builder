<?php

use App\User;

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

Route::get('/', 'StudentController@index');

Route::get('/admin' , function(){
    return view('admin.main.index');
})->middleware('auth')->name('admin');

Route::get('student/all' , 'StudentController@all')->name('student.all')->middleware('auth');

Route::resource('student', 'StudentController' , ['except' => [
    'index',
    'show'
]])->middleware('auth');

Route::get('student/{student}' , 'StudentController@show')->name('student.show');



Route::post('/search', 'StudentController@search')->name('student.search');

Route::resource('course', 'CourseController' , ['except' => [
    'index'
]])->middleware('auth');

// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
$this->get('register', function(){

})->name('register');
$this->post('register', function(){
    
});


// Password Reset Routes...
$this->get('password/reset', function(){
    
})->name('password.request');
$this->post('password/email', function(){
    
})->name('password.email');
$this->get('password/reset/{token}', function(){
    
})->name('password.reset');
$this->post('password/reset', function(){
    
});