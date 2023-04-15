<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class EditController extends Controller
{
    public function edit(Request $request){
        $user = Auth::user();

        $user['name'] = $request->input('name');
        $user['surname'] = $request->input('surname');
        $user['sex'] = $request->input('sex');
        $user['birthday'] = $request->input('birthday');
        $user['organization'] = $request->input('organization');
        $user['position'] = $request->input('position');
        $user['email'] = $request->input('email');

        $user -> save();

        return redirect(route('user.participants'));
    }
}
