<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function save(Request $request){
        if(Auth::check()){
            return redirect(route('user.participants'));
        }

        $validateFields = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'sex' => 'required',
            'birthday' => 'required',
            'organization' => 'required',
            'position' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $confirm = $_POST['confirm'];

        if ($validateFields['password'] <> $confirm){
            return redirect(route('user.registration'))->withErrors([
                'password'=>'Паролі не співпадають'
            ]);
        }

        if (User::where('email',$validateFields['email'])->exists()){
            return redirect(route('user.registration'))->withErrors([
                'email'=>'Такий користувач вже зареєстрований'
            ]);
        }

        $user = User::create($validateFields);
        if($user){
            Auth::login($user);
            return redirect(route('user.participants'));
        }

        return redirect(route('user.login'))->withErrors([
            'formError'=>'Помилка при збереженні користувача'
        ]);
    }

}
