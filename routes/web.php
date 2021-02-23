<?php

use Illuminate\Support\Facades\Route;

//jalankan controller pagescontroller method home
Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

Route::get('/mahasiswa', 'MahasiswaController@index');

//students
Route::get('/students', 'StudentsController@index');
Route::get('getDataStudents', [
    'uses' => 'StudentsController@getstudents',
    'as' => 'ajax.get.students'
]);
