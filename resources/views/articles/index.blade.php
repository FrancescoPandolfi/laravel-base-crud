<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Document</title>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-6">  
            @foreach ($articles as $article)
                <div class="card mb-3">
                    <img class="card-img-top" src="{{ $article->img }}" alt="Card image cap">
                    <div class="card-body">
                        <h2 class="card-title">{{ $article->title }}</h2>
                        <p class="card-text">{{ $article->body }}</p>
                        <p class="card-text"><small class="text-muted">by {{ $article->author }}</small></p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

</body>
</html>