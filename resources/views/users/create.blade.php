@extends('layouts.app')

@section('title','Create User')

@section('content')
<form action="{{ route('users.store') }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="name"><br>
    <input type="text" name="email" placeholder="email"><br>
    <input type="text" name="password" placeholder="password"><br>
    <button type="submit">Save</button>
</form>
@endsection