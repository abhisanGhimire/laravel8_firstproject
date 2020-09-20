<nav class="navbar is-fixed-top is-light" role="navigation" aria-label="main navigation">
    <div class="container">
        <div class="navbar-brand">
            <a href="{{ route('home') }}">
                <h1 class="title is-family-monospace">
                    Invictus Blog
                </h1>
            </a>
            <span class="navbar-burger burger" data-target="navMenu">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </div>

        <div id="navMenu" class="navbar-menu">
            <div class="navbar-end">
                <a class="navbar-item is-family-monospace {{ Request::path()==='/'?'is-tab is-active is-expanded':'' }}"
                    href="{{ route('home') }}">
                    Home
                </a>

                <a class="navbar-item is-family-monospace {{ Request::path()==='articles'?'is-tab is-active':'' }} "
                    href="{{ route('articles.index') }}">
                    Articles
                </a>
                <a class="navbar-item is-family-monospace {{ Request::path()==='about'?'is-tab is-active':'' }}"
                    href="{{ route('about') }}">
                    About
                </a>
                <a class="navbar-item is-family-monospace {{ Request::path()==='contact'?'is-tab is-active':'' }}"
                    href="{{ route('contact') }}">
                    Contact
                </a>
                @auth
                <a class="navbar-item is-family-monospace" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                @endauth
            </div>
        </div>
    </div>
</nav>
<script>
    $(document).ready(function(){
        var burger=document.querySelector('.burger');
        var navMenu=document.getElementById('navMenu');
        burger.addEventListener('click',function(){
            burger.classList.toggle('is-active');
            navMenu.classList.toggle('is-active');
        })
    });
</script>
