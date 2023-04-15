<?php

use Illuminate\Support\Facades\Route;

Route::view('/','login');
Route::name('user.')->group(function (){
    Route::view('/participants','participants')->middleware('auth')->name('participants');

    Route::get('/login',function (){
        if(Auth::check()){
            return redirect(route('user.participants'));
        }
        return view('login');
    })->name('login');

    Route::post('/login',[\App\Http\Controllers\LoginController::class,'login']);

    Route::get('/logout',function (){
        Auth::logout();
        return redirect('/');
    })->name('logout');

    Route::get('/registration',function (){
        if(Auth::check()){
            return redirect(route('user.participants'));
        }
        return view('registration');
    })->name('registration');

    Route::post('/registration',[\App\Http\Controllers\RegisterController::class, 'save']);

    Route::view('/edit','edit')->middleware('auth')->name('edit');

    Route::post('/edit',[\App\Http\Controllers\EditController::class, 'edit']);
});
