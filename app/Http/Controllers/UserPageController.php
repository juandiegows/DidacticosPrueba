<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserPageController extends Controller
{
    public function SignIn(){
        return View('user.signIn');
    }
    public function create(Request $request)
    {
        $user = new User();
        $user->name = $request->input('name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->birth_day = $request->input('birth_day');
        $user->role_id = 2;
        $user->created_at = date('Y-m-d H:i:s');
        $user->save();

        return redirect()->route('home');
    }
    
}
