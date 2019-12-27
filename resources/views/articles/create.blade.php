@extends('layout')
@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css" />
@endsection
@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1>New Article</h1>

            <form method="POST" action="/articles">
                @csrf
                <div class="field">
                    <label class="label" for="Title">Title</label>
                    <div class="control">
                        <input
                            class="input @error('title') is-danger @enderror"
                            type="text"
                            name="title"
                            id="title"
                            value="{{ old('title') }}"
                            required>
{{--                       @if ($errors->has('title'))--}}
{{--                            <p class="help is-danger">{{ $errors->first('title') }}</p>--}}
{{--                        @endif--}}

                        @error('title')
                            <p class="help is-danger">{{$errors->first('title') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label for="excerpt">Excerpt</label>
                    <div class="control">
                        <input class="textarea @error('excerpt') is-danger @enderror"
                               name="excerpt"
                               id="excerpt"
                               value=" {{ old('excerpt') }} "
                               required>
                        @error('excerpt')
                            <p class="help is-danger">{{$errors->first('excerpt') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="body">Body</label>
                    <div class="control">
                        <input class="textarea @error('body') is-danger @enderror"
                               name="body"
                               id="body"
                               value=" {{ old('body') }} "
                               required>
                        @error('body')
                        <p class="help is-danger">{{$errors->first('body') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="tags">Tags</label>
                    <div class="select is-multiple control">
                        <select
                            name="tags[]"
                        >
                            @foreach ($tags as $tag)
                                <option value="{{$tag->id}}">{{ $tag->name }}</option>
                            @endforeach
                        </select>

                        @error('tags')
                        <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
