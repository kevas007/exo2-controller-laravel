<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
@foreach ($users as $user)
        <h1>{{ $user->id}}</h1>
        <h1>{{ $user->nom}}</h1>
        <h1>{{ $user->age}}</h1>
        <h1>{{ $user->email}}</h1>
@endforeach
</body>

</html>
