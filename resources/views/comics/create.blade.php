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

            <form action="{{route('comics.store')}}" method="POST">
                @csrf
                
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <input type="text" class="form-control" id="description" name="description">
                    </select>
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label">Percorso Immagine</label>
                    <input type="text" class="form-control" id="thumb" name="thumb">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="number" class="form-control" id="price" name="price">
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control" id="series" name="series">
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data pubblicazione</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date">
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Tipo</label>
                    <input type="text" class="form-control" id="type" name="type">
                </div>

                <button type="submit" class="btn btn-primary">Crea</button>
            </form>
        </div>
    </main> 
</body>
</html>