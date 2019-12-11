@extends('layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1>New Article</h1>

            <form method="POST" action="/articles">
                @csrf
                <div class="field">
                    <label class="label" for="Title">Title</label>
                    <div class="control">
                        <input class="input" type="text" name="title" id="title">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="excerpt">Excerpt</label>
                </div>
                <div class="control">
                    <input class="textarea" name="excerpt" id="excerpt">
                </div>

                <div class="field">
                    <label class="label" for="body">Body</label>
                </div>
                <div class="control">
                    <input class="textarea" name="body" id="body">
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>

                    <div class="control">
                        <button class="button is-text">Cancel</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
