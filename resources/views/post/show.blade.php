@extends('layouts.dashboard', ['title' => 'Post'])

@section('content')
    <a href="/posts">Back to overview</a>
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
@endsection