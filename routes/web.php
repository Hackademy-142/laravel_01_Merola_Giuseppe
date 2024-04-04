<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pagina1', function () {
    return view('pagina1');
});

Route::get('/pagina2', function () {
    $array = [
        ['nome' => 'Giuseppe', 'cognome' => 'Merola'],
        ['nome' => 'Flavia', 'cognome' => 'Vignanelli'],
        ['nome' => 'Giovanni', 'cognome' => 'Sugamiele'],
        ['nome' => 'Emanuele', 'cognome' => 'Pelliccia'],
        ['nome' => 'Karim', 'cognome' => 'Ben Abid']
    ];
    return view('pagina2', ['students' => $array]);
});