@extends('layouts.app')

@section('title', 'Users')
  
@section('content') 
    <div class="row mb-2">
        @foreach($users as $user) 
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary">{{$user->email}}</strong>
                    <h3 class="mb-0">
                        <a class="text-dark" href="#">{{$user->lastname}} {{$user->firstname}} {{$user->middlename}}</a>
                    </h3> 
                    <p class="card-text mb-auto">{{$user->phone}}</p>
                    <a href="/user/{{$user->id_user}}" class="btn btn-primary">Смотреть </a>
                    <a href="/user/{{$user->id_user}}/edit" class="btn btn-secondary">Редактировать </a>
                    <form action="/user/{{$user->id_user}}" method="post">
                        {{csrf_field()}}
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Удалить</button>
                    </form>
                    </div>             
                </div>
            </div>
        @endforeach  
    </div>




    {{ $users->links() }}

@endsection

 




