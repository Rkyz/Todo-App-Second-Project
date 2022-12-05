<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{asset('assets\img\logo.png')}}" type="image/x-icon">
    <title>Todo App</title>
</head>
<body>
@if (Auth::check())
<ul>
    <li><a href="/  ">Home</a></li>
    <li><a href="/data">Data</a></li>
    <li><a href="/create">Create</a></li>
    <li><a href="/logout">Logout</a></li>
  </ul>
@endif
@yield('content')
</body>
</html>