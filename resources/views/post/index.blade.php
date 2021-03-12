@extends('layouts.dashboard', ['title' => 'Posts'])


@section('content')
<a href="/posts/create">New post</a>
@dump($posts)
@endsection