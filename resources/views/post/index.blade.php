@extends('layouts.dashboard', ['title' => 'Posts'])


@section('content')
<div class="d-flex justify-content-end">
    <a
        href="{{ route('posts.create') }}"
        class="btn"
    >New post</a>
</div>
@forelse($posts as $post)
<div class="mb-3">
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->body }}</p>
    <a href="{{ route('posts.show', $post) }}">View</a>
    <a href="{{ route('posts.edit', $post) }}">Edit</a>
    <hr>
</div>
@empty
<p>No posts found</p>
@endforelse
{{ $posts->links() }}
@endsection