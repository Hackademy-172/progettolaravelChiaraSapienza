<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  {{-- BOOTSTRAP CSS --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  {{-- FINE BOOTSTRAP SCRIPT --}}
  
  <title>Redattori page</title>
</head>
<body>
  
  
  
  {{-- @dd() :  dump & die --}}
  {{-- il dump : mostra il contenuto --}}
  {{-- il die : interrompe l'esecuzione del codice --}}
  
  {{-- @dd($redattori) --}}
  
  <section class="container-fluid vh-100 mt-5">
    <div class="row ">
      
      @foreach ($redattori as $redattore)
      <div class="col-12 col-md-4 d-flex justify-content-center mb-4">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">{{$redattore['name']}}</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">{{$redattore['focus']}}</h6>
            <p>{{$redattore['id']}}</p>
            <a href="{{route('redattori-dettaglio', $redattore['id'])}}" class="btn btn-primary">Dettaglio</a>
          </div>
        </div>
      </div>
      @endforeach

    </div>
  </section>
  
  {{-- BOOTSTRAP SCRIPT --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  {{-- FINE BOOTSTRAP SCRIPT --}}
  
</body>
</html>