@extends('layouts.dashboard', ['title' => 'edit post'])

@section('content')
    <h1>Edit post: {{ $post->title }}</h1>
    @if ($errors->any())
        <div class="alert alert--danger">
            You have errors
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.show', $post) }}" method="PUT">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input value="{{ $post->title }}" class="form-control" type="text" name="title" id="title" placeholder="Title">
            @error('title')
                <span class="form-error">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea
                class="form-control"
                name="body"
                id="body"
                placeholder="Write something cool"
            >{{ $post->body }}</textarea>
            @error('body')
                <span class="form-error">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit">Edit</button>
    </form>
@endsection