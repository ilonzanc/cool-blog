<x-app-layout>
    <div class="container">
        <h2>Last posts</h2>
        @if (count($posts))
            @foreach($posts as $post)
                <h3>{{ $post->title }}</h3>
                <p>{{ $post->body }}</p>
            @endforeach

            <a href="{{ route('posts.index') }}">View all posts</a>
        @else
            <p>There are no posts :(</p>
        @endif
    </div>
</x-app-layout>