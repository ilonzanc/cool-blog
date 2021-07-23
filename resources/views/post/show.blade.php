@extends('layouts.dashboard', ['title' => 'Post'])

@section('content')
    <a href="{{ route('posts.index') }}">Back to overview</a>
    <h1>{{ $post->title }}</h1>
    <table>
        <tr>
            <th>Title</th>
            <td>{{ $post->title }}</td>
        </tr>
        <tr>
            <th>Body</th>
            <td><p>{{ $post->body }}</p></td>
        </tr>
    </table>

    <a
        href="{{ route('posts.edit', $post) }}"
        class="btn"
    >Edit post</a>
@endsection