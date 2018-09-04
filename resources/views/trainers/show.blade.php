@extends('layouts.app')

@section('title', 'Trainers Create')

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status')}}
        </div>
    @endif

    <img class="card-img-top rounded-circle mx-auto d-block" style="margin: 20px;height:200px; width: 200px;background-color: #EFEFEF;" src="../images/{{$trainer->avatar}}">
    <div class="text-center">
        <h5 class="card-title">{{$trainer->name}}</h5>
        <p class="card-text">{{$trainer->descripcion}}</p>
        <a href="{{$trainer->slug}}/edit" class="btn btn-primary">Editar</a>
        {!! Form::open ([ 'route' => ['trainers.destroy', $trainer->slug], 'method' => 'DELETE'])!!}
        {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
        {!! Form::close()!!}
    </div>
@endsection
