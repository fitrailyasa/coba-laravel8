@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post["slug"] }}</h2>
        <h5>{{ $post["author"] }}</h5>
        <p>{{ $post["body"] }}</p>
</article>

    <a href="/blog">Back To Posts</a>
@endsection