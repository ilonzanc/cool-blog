<x-dashboard-layout title="Posts">
<h1>Posts</h1>
<div class="d-flex justify-content-end">
    <a href="{{ route('posts.create') }}" class="btn">New post</a>
</div>

@if (count($posts))
<table class="table--index">
    <thead>
        <tr>
            <th>Title</th>
            <th>Created at</th>
            <th>Actions</th>
        </tr>
    </thead>
    @foreach($posts as $post)
    <tr class="mb-3">
        <td>{{ $post->title }}</td>
        <td>{{ date('d/m/Y', strtotime($post->created_at)) }}</td>
        <td>
            <a href="{{ route('posts.show', $post) }}">View</a>
            <a href="{{ route('posts.edit', $post) }}">Edit</a>
            <button class="js-delete-row-btn" data-id="{{ $post->id }}"
                type="button">Delete</button>
        </td>
    </tr>
    @endforeach
</table>
<div class="modal js-modal">
    <div class="modal__overlay js-modal-close"></div>
    <div class="modal__body">
        <p>Are you sure you want to delete this post?</p>
        <div class="d-flex justify-content-center">
            <form action="{{ route('posts.destroy', 0) }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn--danger me-2">Delete</button>
            </form>
            <button type="button" class="btn js-modal-close ms-2">Cancel</button>
        </div>
        <button class="js-modal-close" type="button">
            <i class="fas fa-times"></i>
        </button>
    </div>
</div>
{{ $posts->links() }}
@else
<p>No posts found</p>

@endif
</x-dashboard-layout>
