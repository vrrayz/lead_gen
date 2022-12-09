<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
   <ul>
    @foreach ($users as $user)
    <li>
        <h3>{{ $user->firstname }} {{ $user->lastname }}</h3>
        Username: <b>{{ $user->username }}</b>
        <br>
        Email: <b>{{ $user->email }}</b>
        <br>
        Phone: <b>{{ $user->phone }}</b>
        <br>
        Zip Code: <b>{{ $user->zipcode }}</b>
        <br>
        Country: <b>{{ $user->country }}</b>
        <br>
        State: <b>{{ $user->state }}</b>
        <br>
        <hr>
    </li>
    @endforeach
   </ul>
</body>

</html>