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
    $comics = config('comic-data');
    
    return view('home', [
        'comics' => $comics,
    ]);
})->name('home');

// Rotta per Sezione News

Route::get('/news', function () {
    return view('news');
})->name('news');

// Rotta Per Dettaglio Prodotto 

Route::get('/comic/{id}', function ($id) {
    // prodotti
    $comics = config('comic-data');

    if( is_numeric($id) && $id >= 0 && $id < count($comics) ){
        $comic = $comics[$id];
        // dump($comic);
    } else {
        abort(404);
    }

    return view('comic-detail' , [
        'comic' => $comic,
    ]);
})->name('comic-detail');