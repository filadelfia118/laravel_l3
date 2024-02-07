<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::paginate(5);//aceasta extrage cat e5 
        //$users = User::all(); aceasta extrage toti utilizatorii
        return view('users.index',['users'=>$users]);
    }

    public function create(){
        return view('users.create');
    }
    public function store(Request $request){
        User::create($request->all());
        return redirect()->route('users.create');
    }
}
