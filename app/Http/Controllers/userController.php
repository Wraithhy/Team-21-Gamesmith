<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Http\Hash;


class userController extends Controller
{
    function index(){
        $data = User::all();
        return view('users.index', ['users' =>$data]);
    }

    public function create(){
        return view('users.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            
        ]);

        $newUser = User::create($data);

        return redirect(route('users.index'));

    }

    public function edit(User $user){
        return view('users.edit', ['user' => $user]);
    }

    public function update(User $user, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $user->update($data);

        return redirect(route('users.index'))->with('success', 'Product Updated Succesffully');

    }

    public function destroy(User $user){
        $user->delete();
        return redirect(route('users.index'))->with('success', 'Product deleted Succesffully');
    }
}


