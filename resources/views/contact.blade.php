@extends('layout')
@section('head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">

@endsection
@section('content')

<div class="tile is-ancestor">
    <div class="tile is-4 is-vertical is-parent">
        <div class="tile is-child box">
            <p class="title has-text-left">View Other Projects</p>
            <p class=" has-text-left">
                Todo With Laravel</br>
                Todo With React</br>
                Music App with JS</br>
            </p>
        </div>
        <div class="tile is-child box">
            <p class="title has-text-left">Find Me On </p>
            <p class=" has-text-left">
                <a href="https://www.facebook.com/abhisan.ghim/" class="has-text-info"> <i
                        class="fab fa-facebook-square"></i>
                    Facebook</br></a>
                <a href="https://www.instagram.com/_abhisan_/" class="has-text-danger"> <i
                        class="fab fa-instagram"></i></i> Instagram</br>
                </a> <a href="https://twitter.com/GhimireAbhisan" class="has-text-info"> <i
                        class="fab fa-twitter-square"></i>
                    Twitter</br>
                </a></p>
        </div>
    </div>
    <div class="tile is-parent">
        <div class="tile is-child box">

            <p class="title">Contact</p>
            <label class="label is-pulled-left mt-1">Name</label>
            <input class="input" type="text" placeholder="Enter Your Name">
            <label class="label is-pulled-left mt-1">Email</label> <input class="input " type="email"
                placeholder="Enter Your E-mail">
            <label class="label is-pulled-left mt-1">Query</label> <textarea class="textarea "
                placeholder="Any queries you have"></textarea>
            <button class="button is-link mt-3" type="submit">Send</button>
        </div>
    </div>
</div>
@endsection
