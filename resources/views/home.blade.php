@extends('layout')
@section('content')

<section class="hero is-dark">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">
                INVICTUS BLOG
            </h1>
            <h2 class="subtitle">
                A personal Blogging Platform
            </h2>
        </div>
    </div>
</section>
<div class="card has-background-light">
    <h2 class="subtitle ">
        <p class="pt-6 has-text-centered">Welcome to<strong> Invictus Blog</strong>, a personal blogging platform
            developed by <a target="_blank" href="http://abhisanghimire.info">Abhisan Ghimire</a>. Invictus blog is a
            project
            developed by Abhisan for enhancing his skills in CRUD operation and gain strong hand over basics of
            laravel. Code for the project is freely available in his <a target="_blank"
                href="https://github.com/abhisanGhimire/abhisanblog">Github</a>, feel free to use it
            as per your requirement, please donot forget to leave a star.</p>
        <a href="{{ route('articles.index') }}" class="my-6 button is-link">Read Articles</a>
    </h2>
</div>
<span class="tag is-success is-medium is-light is-pulled-left mt-5">Latest Post</span>
@forelse($articles as $article)
<div class="box mt-6">
    <article class="media">
        <div class="media-left">
            <a href="{{ route('articles.show',$article->id) }}">
                <figure class="image is-64x64">
                    <img src="{{ url('storage/', [$article->image_url]) }}" alt="Image">
                </figure>
            </a>
        </div>
        <div class="media-content">
            <div class="content has-text-justified">
                <p>
                    <a href="{{ route('articles.show',$article->id) }}">
                        <strong>{{ $article->title }}</strong></a>
                    <small class="is-pulled-right">{{$article->created_at->diffForHumans() }}</small>
                    <br>

                </p>
            </div>

            <div class="content has-text-justified">
                {{ $article->short_description }} <a href="{{ route('articles.show',$article->id)}}"
                    class=" is-link is-pulled-right is-light">Read More</a>
            </div>

        </div>
    </article>
</div>
@empty
<div class="box mt-6">
    <div class="media">
        <div class="media-content">
            <div class="content">
                <p>
                    <strong>
                        <h1 class="title">No Post Yet</h1>
                    </strong>

                </p>

            </div>
        </div>
    </div>
</div>
@endforelse
@endsection
