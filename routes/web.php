<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\StudentsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/chi-siamo', function () {
    $studenti = [

    [ "id" => 1, "name" => "Gianluca", "surname" => "Foglia" ],
    [ "id" => 2, "name" => "Domenico", "surname" => "Mongelli" ],
 ["id" => 3, "name" => "Riccardo", "surname" => "Malla" ],
    [ "id" => 4, "name" => "Pietro", "surname" => "Losciale" ],

    ];
    
    return view('chi-siamo', [ "studenti" => $studenti ]   );
});
QUESTA ROTTA L'HA INSERITA AUTOMATICAMENTE. LA DEVO CANCELLARE?
Route::get('/', function () {
    return view('welcome');
});