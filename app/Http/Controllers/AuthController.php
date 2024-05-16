<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm(){
        return view("users.login");
    }

    public function logout(){
        auth("web")->logout();
        return redirect(route("home"));
    }

    public function login_process(Request $request){
        // $request->validate([
        //     "email" => ["required"]
        // ]);
        //dd($request);
        $requestData = $request->only('username', 'password');
        if(auth("web")->attempt($requestData)) {
            return redirect(route("home"));
        }

        return redirect(route("login"))->withErrors(["email" => "Пользователь не найден"]);
    }

}
