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

    <nav class="navbar navbar-expand navbar-light bg-light mb-5">
        <a class="navbar-brand" href="/articles"><img class="logo" src="https://www.thetimes.co.uk/d/img/logos/times-black-ee1e0ce4ed.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
          <a class="nav-item nav-link" href="{{asset('articles/create')}}">Add new article</a>
          </div>
        </div>
    </nav>

@yield('content')

</body>
</html>