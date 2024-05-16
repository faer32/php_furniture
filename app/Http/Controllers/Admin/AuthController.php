<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return view("admin.login");
    }

    public function logout(){        
        auth("admin")->logout();
        return redirect(route("admin.login"));
    }

    public function login_process(Request $request){
        // $request->validate([
        //     "email" => ["required"]
        // ]);
        $requestData = $request->only('name', 'password');
        if(auth("admin")->attempt($requestData)) {
            return redirect(route("admin.products.index"));
        }

        return redirect(route("admin.login"))->withErrors(["email" => "Пользователь не найден"]);
    }
}
