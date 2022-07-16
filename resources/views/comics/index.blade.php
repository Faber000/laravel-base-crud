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
        <div class="my-container">
            @foreach ($comics as $comic)
                <div class="comic-row">
                    <div class="d-flex align-items-center">
                        <div class="id-div">{{$comic->id}}</div>
                        <div><img width="100" src="{{$comic->thumb}}"></div>
                        <div class="title">{{$comic->title}}</div>
                    </div>
                    <div class="type">
                        <div>{{$comic->type}}</div>
                    </div>
                    <div class="buttons">
                        <div><a href="{{route('comics.show', $comic->id)}}" class="btn btn-info">Visualizza</a></div>
                        <div><a href="{{route('comics.edit', $comic->id)}}" class="btn btn-warning">Modifica</a></div>
                        <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Cancella</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
</body>
</html>