@extends('layouts.app')

@section('title', 'Trainer Edit')

@section('content')

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    @endif
    {!! Form::model($trainer, ['route' => ['trainers.update', $trainer], 'method' => 'PUT', 'files' => true])!!}
        @include('trainers.form')

    {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}

    {!!Form::close()!!}

{{--  <form class="form-group" method="POST" action="/trainers/{{$trainer->slug}}" enctype="multipart/form-data">
  --}}

    {{--  @method('PUT')
    @csrf
    <div class="form-group">
        <label for="">Nombre</label>
        <input type="text" name="name" class="form-control" value="{{$trainer->name}}">
    </div>

    <div class="form-group">
        <label for="">Avatar</label>
        <input type="file" name="avatar">
    </div>

    <div class="form-group">
        <label for="">Descripción</label>
        <input type="text" name="descrip" value="{{$trainer->descripcion}}">
    </div>

    <button type="submit" class="btn btn-primary">Actualizar</button>
</form>  --}}
@endsection
