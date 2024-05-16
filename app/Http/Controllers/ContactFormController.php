<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactForm;
use App\Models\User;

class ContactFormController extends Controller
{
    public function show(){
        return view("email");
    }

    // public function contactForm(ContactFormRequest $request){
    //     Mail::to("mister.5577@mail.ru")->send(new ContactForm($request->validated()));
    // }

    public function email_process(Request $request){
        // dd($request);
        
        $user = User::where(["email" => $request["email"]])->first();
        if (!$user) {
            return redirect(route('login'))->withErrors(["email" => "Пользователь не найден"]);
        }
        
        $password = uniqid();
        $user->password = bcrypt($password);
        $user->save();
        if (Mail::to($user)->send(new ContactForm($password, "Восстановление пароля", "Пароль:"))) {
            return redirect(route('login'))->with('success', 'Ссылка для восстановления пароля отправлена на ваш email.');
        } else {
            return redirect(route('login'))->with('error', 'Не удалось отправить ссылку для восстановления пароля. Пожалуйста, попробуйте еще раз.');
        }

    }

}
