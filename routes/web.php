<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>['auth', 'has.permission']], function(){

Route::get('/', function () {
    return view('welcome');
});

Route::resource('departments','DepartmentController');
Route::resource('roles','RoleController');
Route::resource('users','UserController');
Route::resource('permissions','PermissionController');
Route::resource('leaves','LeaveController');
Route::post('accept-reject-leave/{id}','LeaveController@acceptReject')->name('accept.reject');
Route::resource('notices','NoticeController');

Route::get('/mail','MailController@create')->name('mails.create');
Route::post('/mail','MailController@store')->name('mails.store');

});

Auth::routes();
