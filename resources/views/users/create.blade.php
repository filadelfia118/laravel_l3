<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="name"><br>
        <input type="text" name="email" placeholder="email"><br>
        <input type="text" name="password" placeholder="password"><br>
        <button type="submit">Save</button>
    </form>
    
</body>
</html>