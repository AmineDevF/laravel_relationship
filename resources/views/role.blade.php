<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- get role data --}}
    <hr>
    <h1 style="background-color: rgb(72, 255, 0)">Get All off user </h1>
    <hr>
    @foreach ($role_user as $user )
        <h2>{{$user->name}}</h2>
        <h2>{{$user->email}}</h2>
    @endforeach

    {{-- get user data  --}}
<hr>
    <h1 style="background-color: rgb(0, 174, 255)">Get All off Role </h1>
<hr>
    @foreach ($user_role as $role )
        <h2>{{$role->name}}</h2>
       
    @endforeach
</body>
</html>
