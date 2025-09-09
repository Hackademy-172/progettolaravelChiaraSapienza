<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\StudentsController;

//Questa rotta la troveremo sempre all'avvio di un progetto Laravel
// Route:get è il modo che abbiamo per definire una rotta, in questo caso  di tipo get, cioé restituisce una risorsa
// il metodo get richiede l'utilizzo di due parametri, il primo si chiama uri, il secondo è il controller.
// uri = identificatore univoco della risorsa
// il metodo controller è l< funzione che troviamo dopo l'uri, questa funzione dice al server che cosa deve fare
// function (){} è una funzione anonima molto utilizzata per essere passata come secondo parametro di una funzione detta di ordine superiore.
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

Route::get('/dettaglio/{id}', function( $id ){

             $studenti = [

                    [ "id" => 1, "name" => "Gianluca", "surname" => "Foglia" , "age" => 28 , "materia" => "Laravel"  ],
                    [ "id" => 2, "name" => "Domenico", "surname" => "Mongelli" ,"age" => 24 , "materia" => "HTML" ],
                    [ "id" => 3, "name" => "Riccardo", "surname" => "Malla", "age" => 22 , "materia" => "CSS3"   ],
                    [ "id" => 4, "name" => "Pietro", "surname" => "Losciale" , "age" => 27 , "materia" => "OOP"  ],
                ];

                foreach($studenti as $studente ){
                    if($id == $studente["id"]){
                       
                        return view( "dettaglio-studente", ["studente" => $studente]  );
                    }
                } 

});
