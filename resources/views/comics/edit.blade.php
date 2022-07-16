<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
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
            <h1>Modifica {{$comic->title}}</h1>

            <form action="{{route('comics.update', $comic->id)}}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}">
                </div>

                <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <input type="text" class="form-control" id="description" name="description" value="{{$comic->description}}">
                        </select>
                </div>

                <div class="mb-3">
                        <label for="thumb" class="form-label">Percorso Immagine</label>
                        <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}">
                </div>

                <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="number" class="form-control" id="price" name="price" value="{{$comic->price}}">
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}">
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data pubblicazione</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Tipo</label>
                    <input type="text" class="form-control" id="type" name="type" value="{{$comic->type}}">
                </div>

                <button type="submit" class="btn btn-primary">Modifica</button>
            </form>
        </div>
    </main>
</body>
</html>