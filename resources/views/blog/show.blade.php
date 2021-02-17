@extends('layouts.main')

@section('content')
    
    <a href="/blog" class="btn btn-default">Back</a>

    <h1>This is Blog {{$eachblog->id}}</h1>
    <small>Written on {{ $eachblog->created_at }}</small>
    <p>{{$eachblog->story}}</p>

    <hr>
    <a href="/blog/{{$eachblog->id}}/edit" class="btn btn-secondary">Edit</a>


    {!! Form::open(['action' => ['App\Http\Controllers\BlogController@destroy', $eachblog->id], 'method' => 'POST', 'class' => 'pull-right'] ) !!}
        {!! Form::hidden('_method', 'DELETE') !!}
        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection