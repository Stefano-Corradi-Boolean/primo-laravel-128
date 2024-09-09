<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function(){

    // $data = [
    //     'title' => 'Titolo da variabile',
    //     'subtitle' => 'Sottotitolo da variabile'
    // ];

    //dump($data);

    //return view('home', $data);

    $title = 'Titolo da variabile';
    $subtitle = 'Sottotitolo da variabile';
    $name = 'Ugo';
    $surname = 'De Ughi';
    $colori = ['rosso', 'verde', 'blu', 'viola', 'giallo', 'azzurro'];
    $stampa_colori = true;
    // compact crea un array associativo con chiave => valore dei nomi delle fariabili che passo sotto forma di stringa e senza $
    return view('home', compact('title','subtitle', 'colori', 'name', 'surname', 'stampa_colori'));
});

Route::get('/chi-siamo', function(){
    return view('about');
});
