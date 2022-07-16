<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Comics</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-primary">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('comics.index')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('comics.create')}}">Crea</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="my-container d-flex align-items-center flex-column">
            <h1>{{$comic->title}}</h1>
            <div><img class="mb-3" width="200" src="{{$comic->thumb}}"></div>
            <div class="mb-3">
                    {!!$comic->description!!}
            </div>
            <h3>Serie: {{$comic->series}}</h3>
            <h3>Data di uscita: {{$comic->sale_date}}</h3>
            <h3>Prezzo: {{$comic->price}} €</h3>
        </div>
    </main>
</body>
</html>