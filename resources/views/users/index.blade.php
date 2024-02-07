@extends('layouts.app')

@section('title','Users')

@section('content')
<div class="container">
    <h4>Users</h4>
    <a href="{{route('users.create')}}">Adauga</a>
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
    {{$users->links()}}
</div>
@endsection