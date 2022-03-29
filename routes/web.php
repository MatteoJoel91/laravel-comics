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

    $comics = config('comics');

    return view('comics', ['fumetti' => $comics]);

})->name('comics');


Route::get('/comic/{comic_id}', function($comic_id){

    $comics = config('comics');

    if (is_numeric($comic_id) && $comic_id >= 0 && $comic_id < count($comics)) {
        
        $comicMovie = $comics[$comic_id];

        return view('comic_info', ['comic' => $comicMovie]);

    }else{
        abort(404, 'Errore');
    }
})->name('comic');