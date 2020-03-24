<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{

    public function index()
    {
        $articles = Article::latest()->get();
        return view('articles.index', compact('articles'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'title' => 'required|string',
            'img' => 'required|string',
            'body' => 'required|string',
            'author' => 'required|string'
        ]);

        Article::create($validated);
        $article = Article::all()->last();
        return redirect(route('articles.show', $article));

    }

 
    public function show(Article $article)
    {
        return view('articles.show', ['article' => $article]);
    }

    public function edit(Article $article)
    {
        return view('articles.edit', ['article' => $article]);
    }

    public function update(Request $request, Article $article)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'img' => 'required|string',
            'body' => 'required|string',
            'author' => 'required|string'
        ]);

        $article->update($validated);
        return redirect(route('articles.show', $article));
   
    }

    public function destroy(Article $article)
    {
        $article->delete();

        $articles = Article::latest()->get();

        return view('articles.index', compact('articles'));
    }
}
