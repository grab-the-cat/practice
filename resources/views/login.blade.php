@extends('layouts.app')
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">Аналіз чутливості в задачах лінійного програмування</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="/registration">Реєстрація</a>
    </nav>
</div>
@section('body')
<form class="col-3 offset-4 border rounded" method="POST" action="{{route('user.login')}}">
    @csrf
    <div class="form-group">
        <label for="email" class="col-form-label-lg">Email</label>
        <input class="form-control" id="email" name="email" type="email" value="" placeholder="Email">
        @error('email')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="password" class="col-form-label-lg">Пароль</label>
        <input class="form-control" id="password" name="password" type="password" value="" placeholder="Пароль">
        @error('password')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
    <div class="form-group">
        <button class="btn btn-lg btn-primary" type="submit" name="sendMe" value="1">Увійти</button>
    </div>
</form>
@endsection
