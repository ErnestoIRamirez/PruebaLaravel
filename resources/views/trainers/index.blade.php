@extends('layouts.app')

@section('title', 'Trainers Create')

@section('content')
<div class="row">
    @foreach($trainers as $trainer)
        <div class="col-sm">
            <div class="card text-center" style="width: 18rem; margin-top: 70px;">
                <img class="card-img-top rounded-circle mx-auto d-block" style="margin: 20px;height:100px; width: 100px;background-color: #EFEFEF;" src="/images/{{$trainer->avatar}}">
                <div class="card-body">
                    <h5 class="card-title">{{$trainer->name}}</h5>
                    <p class="card-text">{{$trainer->descripcion}}</p>
                    <a href="/trainers/{{$trainer->slug}}" class="btn btn-primary">Ver más</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
