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
    
    //Questa rotta restituisce sia la vista ma passa anche un dato alla vista che in questo caso è l'intero array di array chiave valore
    return view('chi-siamo', [ "studenti" => $studenti ]   );
});

//la rotta parametrica si chiama cosi perchè nell'uri c'è il parametro
Route::get('/dettaglio/{id}', function( $id ){
    //questo è l'array che contiene al suo interno altri array
    $studenti = [
        //ogni array interno possiede come chiave valore anche un elemento chiamato id
        [ "id" => 1, "name" => "Gianluca", "surname" => "Foglia" , "age" => 28 , "materia" => "Laravel"  ],
        [ "id" => 2, "name" => "Domenico", "surname" => "Mongelli" ,"age" => 24 , "materia" => "HTML" ],
        [ "id" => 3, "name" => "Riccardo", "surname" => "Malla", "age" => 22 , "materia" => "CSS3"   ],
        [ "id" => 4, "name" => "Pietro", "surname" => "Losciale" , "age" => 27 , "materia" => "OOP"  ],
    ];
    
    //il foreach cicle tutto l'array grande per estrarre ogni singolo array più piccolo
    foreach($studenti as $studente ){
        //questo "if" confronta se l'id passato come parametro è uguale alla chiave id del singolo array analizzato
        if($id == $studente["id"]){
            //Questa rotta restituisce sia la vista ma passa anche un dato alla vista che in questo caso è l'unico array chiave valore trovato
            //l'array chiave valore trovato corrisponde all'array che possiede valore della chiave id lo stesso valore dell'id passato come parametro
            return view( "dettaglio-studente", ["studente" => $studente]  );
        }
    } 
    
});






Route::get('/redazione', function () {
    $redattori = [
        
        [ "id" => 1, "name" => "Simone", "focus" => "Pokémon" ],
        [ "id" => 2, "name" => "Ilaria", "focus" => "Super Mario" ],
        ["id" => 3, "name" => "Elena", "focus" => "Zelda" ],
        [ "id" => 4, "name" => "Chiara", "Focus" => "Animal Crossing" ],
        
    ];
    
    return view('redazione', [ "redattori" => $redattori ]   );
});



Route::get('/dettaglio/{id}', function( $id ){
    $redattori = [
        [ "id" => 1, "name" => "Simone", "focus" => "Pokémon" , "age" => 30 ],
        [ "id" => 2, "name" => "Ilaria", "focus" => "Super Mario" ,"age" => 26  ],
        [ "id" => 3, "name" => "Elena", "Focus" => "Zelda", "age" => 27    ],
        [ "id" => 4, "name" => "Chiara", "Focus" => "Animal Crossing" , "age" => 27  ],
    ];
    
    foreach($redattori as $redattore ){if 
($id == $redattore["id"]){
         return view( "dettaglio-redattore", ["redattore" => $redattore]  );
        }
    } 
    
});





Route::get('/redazione', function () {
    $redattori = [
            
        [ "id" => 1, "name" => "Simone", "focus" => "Pokémon" ],
        [ "id" => 2, "name" => "Ilaria", "focus" => "Super Mario" ],
        ["id" => 3, "name" => "Elena", "focus" => "Zelda" ],
        [ "id" => 4, "name" => "Chiara", "Focus" => "Animal Crossing" ],
        
    ];    
    return view('redazione', [ "redattori" => $redattori ]   );
});


Route::get('/redazione', function () {
    $redattori = [
            
        [ "id" => 1, "name" => "Simone", "focus" => "Pokémon" ],
        [ "id" => 2, "name" => "Ilaria", "focus" => "Super Mario" ],
        ["id" => 3, "name" => "Elena", "focus" => "Zelda" ],
        [ "id" => 4, "name" => "Chiara", "Focus" => "Animal Crossing" ],
        
    ];    
    return view('redazione', [ "redattori" => $redattori ]   );
});


Route::get('/redazione', function () {
    $redattori = [
            
        [ "id" => 1, "name" => "Simone", "focus" => "Pokémon" ],
        [ "id" => 2, "name" => "Ilaria", "focus" => "Super Mario" ],
        ["id" => 3, "name" => "Elena", "focus" => "Zelda" ],
        [ "id" => 4, "name" => "Chiara", "Focus" => "Animal Crossing" ],
        
    ];    
    return view('redazione', [ "redattori" => $redattori ]   );
});


Route::get('/dettaglio/{id}', function( $id ){
    $redattori = [
        [ "id" => 1, "name" => "Simone", "focus" => "Pokémon" , "age" => 30 ],
        [ "id" => 2, "name" => "Ilaria", "focus" => "Super Mario" ,"age" => 26  ],
        [ "id" => 3, "name" => "Elena", "Focus" => "Zelda", "age" => 27    ],
        [ "id" => 4, "name" => "Chiara", "Focus" => "Animal Crossing" , "age" => 27  ],
    ];    
    foreach($redattori as $redattore ){if 
($id == $redattore["id"]){
         return view( "dettaglio-redattore", ["redattore" => $redattore]  );
        }
    }     
});



Route::get('/dettaglio/{id}', function( $id ){
    $redattori = [
        [ "id" => 1, "name" => "Simone", "focus" => "Pokémon" , "age" => 30 ],
        [ "id" => 2, "name" => "Ilaria", "focus" => "Super Mario" ,"age" => 26  ],
        [ "id" => 3, "name" => "Elena", "Focus" => "Zelda", "age" => 27    ],
        [ "id" => 4, "name" => "Chiara", "Focus" => "Animal Crossing" , "age" => 27  ],
    ];    
    foreach($redattori as $redattore ){if 
($id == $redattore["id"]){
         return view( "dettaglio-redattore", ["redattore" => $redattore]  );
        }
    }     
});



Route::get('/dettaglio/{id}', function( $id ){
    $redattori = [
        [ "id" => 1, "name" => "Simone", "focus" => "Pokémon" , "age" => 30 ],
        [ "id" => 2, "name" => "Ilaria", "focus" => "Super Mario" ,"age" => 26  ],
        [ "id" => 3, "name" => "Elena", "Focus" => "Zelda", "age" => 27    ],
        [ "id" => 4, "name" => "Chiara", "Focus" => "Animal Crossing" , "age" => 27  ],
    ];    
    foreach($redattori as $redattore ){if 
($id == $redattore["id"]){
         return view( "dettaglio-redattore", ["redattore" => $redattore]  );
        }
    }     
});
