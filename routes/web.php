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


    return view('homepage');
    
})->name('homepage');



Route::get('/news', function () {


    return view('news');
    
})->name('news');



Route::get('/contact', function () {

    $contacts = array(
        (object) [
            'name' => 'Francesco',
            'lastName' => 'Falanga',
            'age' => 21,
            'address' => "Via dei Codici, 104",
        ],
        (object) [
            'name' => 'Gabriel',
            'lastName' => 'Spanu',
            'age' => 26,
            'address' => "Via della Variabile, 404",
        ],
        (object) [
            'name' => 'Pippo',
            'lastName' => 'Pinco',
            'age' => 34,
            'address' => "Via dell'Algoritmo, sin(180)",
        ],
        (object) [
            'name' => 'Paperino',
            'lastName' => 'Topolinato',
            'age' => 41,
            'address' => "Via dei Codici, 808",
        ],
    );

    return view('contact', compact('contacts'));
    
})->name('contact');



Route::get('/about', function () {


    return view('about');
    
})->name('about');