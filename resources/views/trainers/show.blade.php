@extends('layouts.app')

@section('title', 'Trainers Create')

@section('content')
    <img class="card-img-top rounded-circle mx-auto d-block" style="margin: 20px;height:200px; width: 200px;background-color: #EFEFEF;" src="/images/{{$trainer->avatar}}">
    <div class="text-center">
        <h5 class="card-title">{{$trainer->name}}</h5>
        <h1>{{$trainer->slug}}</h1>
        <p class="card-text">{{$trainer->descripcion}}</p>
        <a href="/trainers/{{$trainer->slug}}/edit" class="btn btn-primary">Editar</a>
    </div>
@endsection
