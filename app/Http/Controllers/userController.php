<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $users = User::all();
    return view('users.index', compact('users'));
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
      $request->validate([
          'name' => 'required',
          'email' => 'required',
          'password' => 'required', // You can adjust the min length as needed
      ]);
  
      // Hash the password before storing it
      $request['password'] = Hash::make($request['password']);
  
      User::create($request->all());
  
      return redirect()->route('users.index')->with('success', 'User created successfully.');
  }
  
  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
      $request->validate([
          'name' => 'required',
          'email' => 'required|email',
          'password' => 'nullable|min:6', // Making password optional; add any necessary rules
      ]);
  
      $user = User::find($id);
  
      if (!$user) {
          return redirect()->route('users.index')->with('error', 'User not found.');
      }
  
      // Update name and email
      $user->update([
          'name' => $request->input('name'),
          'email' => $request->input('email'),
      ]);
  
      // Update password only if provided
      if ($request->filled('password')) {
          $user->update(['password' => Hash::make($request->input('password'))]);
      }
  
      return redirect()->route('users.index')->with('success', 'User updated successfully.');
  }
  
  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $users = User::find($id);
    $users->delete();
    return redirect()->route('users.index')
      ->with('success', 'Post deleted successfully');
  }
  // routes functions
  /**
   * Show the form for creating a new post.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('users.create');
  }
  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $users= User::find($id);
    return view('users.show', compact('users'));
  }
  /**
   * Show the form for editing the specified post.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $users = User::find($id);
    return view('users.edit', compact('users'));
  }
}
