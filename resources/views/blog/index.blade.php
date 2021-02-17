@extends('layouts.main')

@section('content')
    <h1>This is Blog Index</h1>
    @if (count($blog) >= 1)
        @foreach ($blog as $b)
            <div class="well">
                <h3> <a href="/blog/{{$b->id}}"> {{ $b->title }} </a> </h3>
                <small>Written on {{ $b->created_at }}</small>
            </div>
        @endforeach
    @else
        <p>There is No Blogs</p>
    @endif
@endsection
