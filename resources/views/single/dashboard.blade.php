@extends('layouts.app')
@section('content')
<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>
    <center>
    <h1>
        Welcome to Bill Man Service...!!!
        {{Session::get('username')}}
        {{session()->put('username',Session::get('username'))}}
</h1>
</center>

<center>
 
</center>
</body>

</html>

@endsection