<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class customerController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.customer', ['users' => $users]);
    }

    public function edit($id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect()->route('home');
        }

        return view('users.customerEdit', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'nullable',
            'address' => 'nullable',
        ]);

        $user = User::find($id);

        if (!$user) {
            return redirect()->route('home');
        }

        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
        ]);

        if ($request->filled('password')) {
            $user->update(['password' => Hash::make($request->input('password'))]);
        }

        return redirect()->route('customer.details');
    }
}
