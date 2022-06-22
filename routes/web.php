<?php

use Illuminate\Support\Facades\Route;

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

    $user = [
        'name' => 'Guido',
        'age' => 25
    ];



    return view('home', $user);
})->name('home');


Route::get('/students', function () {

    $data = [
        'students' => [
            'Ugo',
            'Pino',
            'Gianni',
            'Martina'
        ]
    ];


    return view('students', $data);
})->name('students');


Route::get('/teachers', function () {

   $data = [
        'teachers' => [
            'Stefano',
            'Simone',
            'Giovanni',
            'Sofia'
        ]
   ];

    return view('teachers', $data);
})->name('teachers');


