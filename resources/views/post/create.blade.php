@extends('layouts.dashboard', ['title' => 'new post'])

@section('content')
    <h1>New post</h1>
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

    <form action="/posts" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title" id="title" placeholder="Title">
            @error('title')
                <span class="form-error">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" name="body" id="body" placeholder="Write something cool"></textarea>
            @error('body')
                <span class="form-error">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit">Add</button>
    </form>
@endsection