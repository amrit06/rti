<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/style.css') }}">
    <title>{{ config('app.name', 'rti') }}</title>


    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


</head>

<body>


    @include('shared.navbar')

    <!-- this is layout include other pages here-->
    <!-- below is a section where part of code can be inserted by using the name content on other page -->
    <div class="container">
        @include('shared.feedback')
        @yield('content')
    </div>



</body>

</html>
