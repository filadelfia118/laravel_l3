<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
</head>
<body>
    <h4>Users</h4>
    @forelse ($users as $user )
        <div>
            <b>User</b>
            {{$user->id}}<br>
            <b>Name:</b>
            {{$user->name}}<br>
            <b>Email</b>
            {{$user->email}}
        </div>
    @empty
    <p>NU SUNT UTILIZATORI</p>
    @endforelse
    
</body>
</html>