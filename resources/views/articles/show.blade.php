@extends ('layout')

@section ('content')
<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<div class="title">
				<h2><a href="/articles/{{ $article->id }}">{{ $article->title }}</a></h2>
			<p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
            <p>{{ $article->body }}</p>
            <p>
                @foreach ($article->tags as $tag)
                    <a href="{{ route('article.index', ['tag' => $tag->name]) }}">{{ $tag->name }}</a>
                @endforeach
            </p>
		</div>
	</div>

</div>
@endsection
