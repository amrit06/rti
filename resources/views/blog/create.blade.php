@extends('layouts.main')

@section('content')

    <a href="/blog" class="btn btn-default">Back</a>

    <h1>Create Blog Here</h1>

    {!! Form::open(['action' => 'App\Http\Controllers\BlogController@store', 'method' => 'POST']) !!}
    
        {{Form::label('title', 'Title of the Blog')}}
        {{Form::text('title', '', ['class'=>'form-control', 'placeholder'=>'Blog Title'])}}

        <br>

        {{Form::label('story', 'Story')}}
        {{Form::textarea('story', '', ['class'=>'form-control', 'placeholder'=>'Blog Story'])}}

        <br>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}

    {!! Form::close() !!}

@endsection
