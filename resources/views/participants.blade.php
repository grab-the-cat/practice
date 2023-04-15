@extends('layouts.app')
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">Аналіз чутливості в задачах лінійного програмування</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="/edit">Редагувати дані</a>
        <a class="p-2 text-dark" href="/logout">Вихід</a>
    </nav>
</div>
@section('body')
<h2>Зареєстровані учасники</h2>

<?php
    $db = new PDO(dsn: "mysql:host=db4free.net;dbname=practicep", username:"grabthecat",password:"password");

    $info = [];
    $sq = 'SELECT * FROM `users`';

    if ($query = $db->query($sq)){
        $info = $query->fetchAll(PDO::FETCH_ASSOC);
    } else {
        print_r($db->errorInfo());
    }
?>
<div class="container">
    <div class="row align-items">
        <div class="col-3">
            <h5>id</h5>
        </div>
        <div class="col-3">
            <h5>Ім'я та прізвище</h5>
        </div>
        <div class="col-3">
            <h5>Організація</h5>
        </div>
        <div class="col-3">
            <h5>email</h5>
        </div>
    </div>
    <?php foreach ($info as $data): ?>
    <div class="row align-items">
          <div class="col-3">
                <p><?= $data['id'] ?></p>
          </div>
          <div class="col-3">
              <p><?= $data['name'],' ', $data['surname'] ?></p>
          </div>
         <div class="col-3">
             <p><?= $data['organization'] ?></p>
         </div>
          <div class="col-3">
             <p><?= $data['email'] ?></p>
         </div>
    </div>
     <?php endforeach; ?>
</div>

<form action=>
    <button class="btn btn-lg btn-primary" type="submit">Вийти</button>
</form>

<form action=/edit>
    <button class="btn btn-lg btn-primary" type="submit">Редагувати</button>
</form>
@endsection
