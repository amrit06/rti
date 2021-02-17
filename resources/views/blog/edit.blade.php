@extends('layouts.main')

@section('content')

    <a href="/blog" class="btn btn-default">Back</a>

    <h1>Create Blog Here</h1>

    {!! Form::open(['action' => ['App\Http\Controllers\BlogController@update', $blog->id], 'method' => 'POST']) !!}
    
        {{Form::label('title', 'Title of the Blog')}}
        {{Form::text('title', $blog->title, ['class'=>'form-control', 'placeholder'=>'Blog Title'])}}

        <br>

        {{Form::label('story', 'Story')}}
        {{Form::textarea('story', $blog->story, ['class'=>'form-control', 'placeholder'=>'Blog Story'])}}

        <br>
        {{Form::submit('Update', ['class'=>'btn btn-primary'])}}

        <!--if you look at route list we can't send method = POST we need to send PUT
        and we can't put method => PUT therfore we need below like override post to 
        put for route-->
        {{Form::hidden('_method', 'PUT')}}

    {!! Form::close() !!}

@endsection
