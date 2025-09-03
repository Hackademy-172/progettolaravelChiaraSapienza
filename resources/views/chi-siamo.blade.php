<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
      {{-- @dd() :  dump & die --}}
      {{-- il dump : mostra il contenuto --}}
      {{-- il die : interrompe l'esecuzione del codice --}}
  
      {{-- @dd($studenti) --}}
  
      <section class="container-fluid vh-100">
        <div class="row ">
  
          @foreach ($studenti as $studente)
          <div class="col-12 col-md-4">
              <h1>{{$studente['name']}}</h1>
              <h2>{{$studente['id']}}</h2>
              <h3>{{$studente['surname']}}</h3>  
          </div>
          @endforeach
  
  
        </div>
      </section>

      <a href="/">Torna indietro</a>

</body>
</html>