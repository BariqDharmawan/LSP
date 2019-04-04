<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
  public function alluser(){
    $users = User::all();
    $no = 1;
    return view('master.user.all', compact('users', 'no'));
  }

  public function deleteuser($id){
    $user = User::findOrFail($id);
    $user->delete();
    return redirect()->route('user.all');
  }

  public function saveuser(Request $request){
    $new = new User;
    $new->name = $request->nama;
    $new->email = $request->email;
    $new->password = Hash::make($request->password);
    $new->save();
    return redirect()->route('user.all');
  }

  public function updateuser(Request $request, $id)
  {
    $user = User::findOrFail($id);
    $user->name = $request->nama;
    $user->email = $request->email;
    $user->akses = $request->akses;
    $user->password = $request->password;
    $user->save();
    return redirect()->back();
  }
}
