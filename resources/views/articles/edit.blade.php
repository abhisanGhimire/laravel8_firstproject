@extends('layout')
@section('head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">

@endsection
@section('content')
<div id="wrapper">
    <div id="page" class="container">

        <h1 class="heading has-text-weight-bold is-size-4">Update Article</h1>

        <form method="POST" action="{{ route('articles.update',$article->id) }}">
            @csrf
            @method('PUT')
            <div class="field">
                <label class="label" for="title">
                    Title
                </label>

                <div class="control">
                    <input class="input @error('title') is-danger @enderror" type="text" name="title"
                        value="{{ old('title',$article->title) }}">
                    @error('title')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="field">
                <label class="label is-pulled-left mt-1">Category</label>
                <div class="control">
                    <input class="input @error('category') is-danger @enderror" type="text" name="category"
                        value="{{ old('category',$article->category) }}">
                    @error('category')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="field">
                <label class="label" for="short_description">
                    Short Description
                </label>

                <div class="control">
                    <input class="input @error('short_description') is-danger @enderror" type="text"
                        name="short_description" value="{{ old('short_description',$article->short_description) }}">
                    @error('short_description')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="field">
                <label class="label" for="description">
                    Description
                </label>

                <div class="control">
                    <textarea class="textarea @error('description') is-danger @enderror"
                        name="description">{{ old('description',$article->description) }}</textarea>
                    @error('description')
                    <p class=" help is-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link " type="submit">Submit</button>
                </div>
            </div>
        </form>

    </div>
</div>
@endsection
