@extends('layouts.app')

@section('title', 'Show user')
  
@section('content') 
    <div class="container">
                <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-primary">{{$user->email}}</strong>
                <h3 class="mb-0">
                    <a class="text-dark" href="#">{{$user->lastname}} {{$user->firstname}} {{$user->middlename}}</a>
                </h3> 
                <p class="card-text mb-auto">{{$user->phone}}</p>
            </div>  
    </div> 
@endsection
