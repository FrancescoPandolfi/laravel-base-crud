@extends('layouts.layout')

@section('content')
        
    <div class="container">
        <div class="row">
                @foreach ($articles as $article)
                <div class="col-4"> 
                    <div class="card mb-3">
                        <img class="card-img-top" src="{{ $article->img }}" alt="Card image cap">
                        <div class="card-body">
                            <h2 class="card-title">{{ $article->title }}</h2>
                            <p class="card-text">{{ $article->body }}</p>
                            <p class="card-text"><small class="text-muted">by {{ $article->author }}</small></p>

                            <form action="{{route('articles.destroy', $article)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger float-right ">Delete Article</button>
                            </form>

                            <a href="{{route('articles.edit', $article)}}" class="btn btn-info float-right mr-3">Edit Article</a>

                        </div>
                    </div>
                </div>
                @endforeach
        </div>
    </div>

@endsection