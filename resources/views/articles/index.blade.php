@extends('layout')
@section('content')

<p class="control level-right">
    @auth
    <a href="{{ route('articles.create') }}" class="button is-primary is-light">
        + Create New Article
    </a>
    @endauth
</p>
@forelse($articles as $article)

<div class="card my-3">

    <div class="card-content
    is-clearfix">
        <div class="media">

            <div class="media-content">
                <p class="title is-4"> <a href="{{ route('articles.show',$article->id) }}">
                        {{ $article->title }}
                    </a>
                </p>
                <p class="subtitle is-7">
                    {{ $article->category }} | {{$article->updated_at->diffForHumans() }}
                </p>
                <a href="{{ route('articles.show',$article->id) }}">
                    <div class="has-text-centered">
                        <figure class="image is-96x96 is-inline-block">
                            <img src="{{ url('storage/', [$article->image_url]) }}" alt="Placeholder image">
                        </figure>
                    </div>
                </a>
            </div>
        </div>

        <div class="content has-text-center">
            {{$article->short_description}}
        </div>
        @guest
        <a href="{{ route('articles.show',$article->id)}}" class=" button is-link is-light">Read Article</a>
        @endguest
        @auth
        <div class="field is-grouped is-pulled-left ">

            <p class="control subtitle is-7">
                Last Edited:{{$article->created_at->diffForHumans() }} | Created:
                {{$article->updated_at->diffForHumans() }}
            </p>
        </div>
        <div class="field is-grouped is-pulled-right">
            <p class="control">
                <a href="{{ route('articles.show',$article->id)}}" class=" button is-link is-light">Read Article</a>
            </p>
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

</div>

@empty
<strong>
    <h1 class="title">No Post Yet</h1>
</strong>

@endforelse

@endsection
