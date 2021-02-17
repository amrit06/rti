@extends('layouts.main')

@section('content')
    <h1>This is Service Page!</h1>
    
    {{-- $id is passed from direct routing
         <p>id passed is {{$id}}</p> --}}

    <!-- when array object is send you can access the key directly-->
    <p>we are looking at {{$title}} in {{$programming}}</p>
    
    
    @if (count($coder) > 0)
        <ul>
            @foreach ($coder as $item)
                <li>{{$item}}</li>
            @endforeach
        </ul>
    @endif

@endsection
