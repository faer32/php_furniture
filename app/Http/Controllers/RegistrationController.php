<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegistrationRequest;

class RegistrationController extends Controller
{
    public function showRegistrationForm(){
        return view("users.registration");
    }

    public function register(Request $request){
        $request->validate([
            "email" => ["unique:users,email"],
            "username" => ["unique:users,username"]
        ]);
        $user = User::create([
            "name" => $request["name"],
            "lastName" => $request["lastName"],
            "username" => $request["username"],
            "email" => $request["email"],
            "password" => bcrypt($request["password"]),
        ]);
        
        if($user){
            auth("web")->login($user);
        }

        return redirect(route(("home")));
    }
}
