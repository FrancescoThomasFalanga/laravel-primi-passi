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

    $links = [
        'homepage',
        'news',
        'contact',
        'about'
    ];

    $sectionLinks = [
        'Home',
        'Features',
        'Pricing',
        'FAQs',
        'About'
    ];


    return view('homepage', compact('links', 'sectionLinks'));
    
})->name('homepage');



Route::get('/news', function () {

    $links = [
        'homepage',
        'news',
        'contact',
        'about'
    ];

    $sectionLinks = [
        'Home',
        'Features',
        'Pricing',
        'FAQs',
        'About'
    ];


    return view('news', compact('links', 'sectionLinks'));
    
})->name('news');



Route::get('/contact', function () {

    $links = [
        'homepage',
        'news',
        'contact',
        'about'
    ];

    $sectionLinks = [
        'Home',
        'Features',
        'Pricing',
        'FAQs',
        'About'
    ];

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

    

    return view('contact', compact('links', 'sectionLinks', 'contacts'));
    
})->name('contact');



Route::get('/about', function () {

    $links = [
        'homepage',
        'news',
        'contact',
        'about'
    ];

    $sectionLinks = [
        'Home',
        'Features',
        'Pricing',
        'FAQs',
        'About'
    ];


    return view('about', compact('links', 'sectionLinks'));
    
})->name('about');