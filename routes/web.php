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
});
Route::get('/', function () {

    $data = [
        'students' => [
            'Ugo',
            'Pino',
            'Gianni',
            'Martina'
        ],

        'teachers' => [
            'Stefano',
            'Simone',
            'Giovanni',
            'Sofia'
        ]
    ];



    return view('home', $data);
});


