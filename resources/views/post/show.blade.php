@include('layouts.dashboard', ['title' => 'Post'])

@section('content')
    @dump($post)
@endsection