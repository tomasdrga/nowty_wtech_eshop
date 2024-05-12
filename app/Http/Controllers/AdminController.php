<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;

class AdminController extends Controller
{

  public function index()
  {
    $users = User::all();
    return view('admin', ['users' => $users]);
  }

  public function destroy_user($id)
  {
    // Fetch user with the given id and delete
    $user=User::find($id);
    \Cart::erase($user->id);
    $user->delete();

    return response()->json(['status' => 'success']);

  }

  public function getUsers() {
    $users = User::all();

    return view('users_table', compact('users'));
  }
}
