@extends('layout')

@section('content')
    <article style="width:500px; margin: 0 auto 50px; font-family:sans-serif; border-bottom: 1px solid #525252">
        <h1>
            {{ $post->title }}
        </h1>
        <p>
            <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        </p>
        <div>
            {!! $post->body !!}
        </div>
        <a href="/">GO BACK</a>
    </article>
@endsection
