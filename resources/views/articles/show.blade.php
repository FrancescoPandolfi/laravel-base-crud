@extends('layouts.layout')

@section('content')
        
    <div class="container">
        <div class="row">
            <div class="col-12">  
                {{-- @foreach ($articles as $article) --}}
                    <div class="card mb-3">
                        <img class="card-img-top" src="{{ $article->img }}" alt="Card image cap">
                        <div class="card-body">
                            <h2 class="card-title">{{ $article->title }}</h2>
                            <p class="card-text">{{ $article->body }}</p>
                            <p class="card-text"><small class="text-muted">by {{ $article->author }}</small></p>
                        </div>
                    </div>
                {{-- @endforeach --}}
            </div>
        </div>
    </div>

@endsection