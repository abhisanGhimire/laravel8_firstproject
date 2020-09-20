<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticlesRequest;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ArticlesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['edit', 'destroy', 'update', 'create', 'store']]);
    }

    public function index()
    {
        $articles = Article::latest()->get();
        return view('articles.index', compact(['articles']));
    }

    public function show(Article $article)
    {
        return view('articles.show', compact(['article']));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(ArticlesRequest $request)
    {
        $imagePath = request('image_file')->store('uploads', 'public');
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(720, 720);
        $image->save();
        Article::create([
            'title' => $request->title,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'category' => $request->category,
            'image_url' => $imagePath,
        ]);
        return redirect()->route('articles.index');
    }

    public function edit(Article $article)
    {
        return view('articles.edit', compact(['article']));
    }

    public function update(Article $article, Request $request)
    {
        $article->update(['title' => $request->title,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'category' => $request->category]);
        return redirect()->route('articles.show', $article);
    }

    public function destroy(Article $article)
    {

        $article->delete();
        return redirect()->route('articles.index');
    }
}
