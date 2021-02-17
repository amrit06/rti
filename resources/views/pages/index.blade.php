@extends('layouts.main')


<!-- put wrapped code by section in content section in layout.main-->
@section('content')
    <h1>This is Index Page</h1> 

    <!-- if any var is passed from controller we can use them like this -->
    <p>var passed is {{$var}}</p>   
@endsection
