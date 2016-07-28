@extends('layouts.default')

@section('content')

    @if($posts->count())
    @foreach($posts as $post)
        <article>
            <h2>{{ $post->title }}</h2>
            <p>{{Str_limit($post->body, 50)}}</p>
            <a href='{{URL::to('get-post', $post->slug)}}'>Читать далее...</a>
        </article>
    @endforeach
        @endif
    @stop