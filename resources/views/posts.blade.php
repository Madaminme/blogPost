@extends('layout')

@section('content')
    @foreach ($posts as $post)
        <article style="width:500px; margin: 0 auto 50px; font-family:sans-serif; border-bottom: 1px solid #525252">
            <h1>
                <a href="/posts/{{ $post->slug }}">
                    {!! $post->title !!}
                </a>
            </h1>
            <p>
                By <a href="/author/{{ $post->author->id }}">
                    {{ $post->author->username }}
                </a> in
                <a href="/categories/{{ $post->category->slug }}">
                    {{ $post->category->name }}
                </a>
            </p>
            <div>
                {!! $post->excerpt !!}
            </div>
        </article>
    @endforeach
@endsection
