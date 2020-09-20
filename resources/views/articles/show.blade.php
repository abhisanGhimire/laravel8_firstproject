@extends('layout')
@section('content')

<p class="title is-4">{{ $article->title }}</p>

<div class="card is-clearfix">
    <div class="card-image">
        <figure class="image is-3by1">
            <img src="{{ url('storage/', [$article->image_url]) }}" alt="Placeholder image">
        </figure>
    </div>
    <div class="card-content">
        <div class="media">
            <div class="media-content">
                <p class="title is-4"> {{ $article->short_description }}
                </p>
                <p class="subtitle is-6"><a href="https://abhisanghimire.info" target="_blank">@abhisanghimire </a>
                </p>

            </div>
        </div>

        <div class="content has-text-justified">
            {!! $article->description !!}
        </div>
    </div>
    @auth
    <div class="field is-grouped is-pulled-right mx-5 my-5">
        <p class="control">
            <a href="{{ route('articles.edit',$article->id) }}" class="button is-link ">
                Edit
            </a>
        </p>
        <form action="{{ route('articles.destroy',$article->id) }}" method="post">
            @csrf
            @method('DELETE')
            <p class="control">
                <button type="submit" value="delete" class="button is-danger ">
                    Delete
                </button>
            </p>
        </form>
    </div>
    @endauth
</div>


@endsection
