@extends('layout')
@section('content')

<p class="title is-4">About Invictus Blog</p>
<div class="card">
    <div class="card-image">
        <figure class="image is-16by9">
            <img src="https://i1.wp.com/wp.laravel-news.com/wp-content/uploads/2020/08/laravel8.jpg?fit=1400%2C708&ssl=1?resize=2200%2C1125"
                alt="Placeholder image">
        </figure>
    </div>
    <div class="card-content">
        <div class="media">
            <div class="media-content">
                <p class="title is-4">A personal blogging platform</p>

                <p class="subtitle is-6"><a href="https://abhisanghimire.info" target="_blank">@abhisanghimire </a></p>

            </div>
        </div>

        <div class="content has-text-justified">
            <strong>Invictus Blog</strong> is developed with Bulma CSS framework, a free and open source CSS framework
            based on
            Flexbox
            and built with Sass. Its backend is handled by Laravel, open-source PHP web framework, created by Taylor
            Otwell. It was developed as a practice project in a workshop conducted by <a
                href="https://nirajghimire.com.np" target="_blank">Niraj ghimire</a>. Here, you can find contents based
            on various categories and topics that interests the writer. If you are a developer and want to collaborate
            with Abhisan, feel free to <a href="{{ route('contact') }}">contact</a>.
        </div>
    </div>
</div>

@endsection
