@extends('layouts.app')
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">Аналіз чутливості в задачах лінійного програмування</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="/">Вхід</a>
    </nav>
</div>
@section('body')
<form class="col-4 offset-4 border rounded" method="POST" action="{{route('user.registration')}}">
    @csrf
    <div class="form-group">
        <label for="name" class="col-form-label-lg">Ім'я</label>
        <input class="form-control" id="name" name="name" type="string" value="" placeholder="Ім'я">
        @error('name')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="surname" class="col-form-label-lg">Прізвище</label>
        <input class="form-control" id="surname" name="surname" type="string" value="" placeholder="Прізвище">
        @error('surname')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="sex" class="col-form-label-lg">Стать</label>
        <input class="form-control" id="sex" name="sex" type="string" value="" placeholder="Стать">
        @error('sex')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="birthday" class="col-form-label-lg">Дата народження</label>
        <input class="form-control" id="birthday" name="birthday" type="date" value="" placeholder="Дата народження">
        @error('birthday')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="organization" class="col-form-label-lg">Організація</label>
        <input class="form-control" id="organization" name="organization" type="string" value="" placeholder="Організація">
        @error('organization')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="position" class="col-form-label-lg">Посада</label>
        <input class="form-control" id="position" name="position" type="string" value="" placeholder="Посада">
        @error('position')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
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
        <label for="confirm" class="col-form-label-lg">Підтвердження паролю</label>
        <input class="form-control" id="confirm" name="confirm" type="password" value="" placeholder="Пароль">
        @error('confirm')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>

    <div class="form-group">
        <button class="btn btn-lg btn-primary" type="submit" name="sendMe" value="1">Зареєструватися</button>
    </div>
</form>
@endsection
