@extends('layout')
@section('head')

@endsection
@section('content')
<div id="wrapper">
    <div id="page" class="box">

        <h1 class="heading has-text-weight-bold is-size-4">New Article</h1>

        <form method="POST" action="{{ route('articles.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="field">
                <label class="label is-pulled-left mt-1">Title</label>
                <div class="control">
                    <input class="input @error('title') is-danger @enderror" type="text" name="title"
                        value="{{ old('title') }}">
                    @error('title')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label class="label is-pulled-left mt-1">Category</label>
                <div class="control">
                    <input class="input @error('category') is-danger @enderror" type="text" name="category"
                        value="{{ old('category') }}">
                    @error('category')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label class="label is-pulled-left mt-1">Short description</label>
                <div class="control">
                    <input class="input @error('short_description') is-danger @enderror" type="text"
                        name="short_description" value="{{ old('short_description') }}">
                    @error('short_description')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="field">
                <label class="label is-pulled-left mt-1">Description</label>


                <div class="control">
                    <textarea class="textarea @error('description') is-danger @enderror"
                        name="description">{{ old('description') }}</textarea>
                    @error('description')
                    <p class=" help is-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div id="image_file" class="file has-name is-fullwidth @error('image_file') is-danger @enderror">
                <label class="file-label">
                    <input class="file-input " type="file" name="image_file">
                    <span class="file-cta">
                        <span class="file-icon">
                            <i class="fas fa-upload"></i>
                        </span>
                        <span class="file-label">
                            Choose a file…
                        </span>
                    </span>
                    <span class="file-name">
                        No file uploaded
                    </span>
                </label>

            </div>
            @error('image_file')

            <p class=" help is-danger">{{ $message }}</p>
            @enderror
            <div class=" is-grouped mt-6 has-text-centered">
                <div class="control">
                    <button class="button is-link " type="submit">Submit</button>
                    <a class="button is-light ">Cancel</a>
                </div>
            </div>

        </form>

    </div>
</div>
<script>
    const fileInput = document.querySelector('#image_file input[type=file]');
    fileInput.onchange = () => {
      if (fileInput.files.length > 0) {
        const fileName = document.querySelector('#image_file .file-name');
        fileName.textContent = fileInput.files[0].name;
      }
    }
</script>
@endsection
