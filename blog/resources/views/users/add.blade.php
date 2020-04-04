@extends('layouts.app')

@section('title', 'Add user')
  
@section('content') 
    <h2>Создание пользователя</h2>
    <form action="/users" method="POST">
         {{csrf_field()}}
        @include('layouts.errors')
        <div class="form-group">
            <label for="lastname">Фамилия</label>
            <input class="form-control" type="text" id="lastname" name="lastname" placeholder="Например: Петров">
        </div>  
        <div class="form-group">
            <label for="firstname">Имя</label>
            <input class="form-control" type="text" id="firstname" name="firstname" placeholder="Например: Иван">
        </div> 
        <div class="form-group">
            <label for="middlename">Отчество</label>
            <input class="form-control" type="text" id="middlename" name="middlename"  placeholder="Default input">
        </div> 
        <div class="form-group">
            <label for="phone">Телефон</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone"> 
        </div>  
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email"> 
        </div>  
        <button type="submit" class="btn btn-primary">Создать</button>

  

    </form>

@endsection
