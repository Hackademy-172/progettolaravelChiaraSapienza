<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    {{-- BOOTSTRAP CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    {{-- FINE BOOTSTRAP SCRIPT --}}
    
    <title>Dettaglio redattore page</title>
</head>
<body>
    
    <section class="container-fluid">
        
        <div class="row">
            
            <div class="col-12 text-center">
                <h2> {{$redattore['name']}} - {{$redattore['focus']}}  </h2>
                <p> Ciao a tutti ho {{$redattore['age']}} anni, e mi occupo di {{$redattore['ruolo']}}  </p>
                
                <a href="{{route('redattori')}}" class="btn btn-success"> Torna indietro </a>
                
            </div>
        </div>  
    </section>
    
    {{-- BOOTSTRAP SCRIPT --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    {{-- FINE BOOTSTRAP SCRIPT --}}
</body>
</html>