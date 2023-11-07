@extends('layouts.app')

@section ('content')
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h4>Editar Usuario</h4>
            @if (count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
    </div>
    {{Form::open(array('action'=>array('App\Http\Controllers\EmpleadoController@update', $empleado->id),'method'=>'patch'))}}

    <div class="row g-3">
        <div class="col-md-4">
            <label for="name" class="form-label">Nombre Completo</label>
            <input type="text" name="name" id="name" class="form-control" value="{{$empleado->name}}">
        </div>
        <div class="col-6">
            <label for="email" class="form-label">Correo</label>
            <input type="text" name="email" id="email" class="form-control" value="{{$empleado->email}}">
        </div>

        <div class="col-12">

            <button class="btn btn-primary" type="submit"><span class="glyphicon glyphiconrefresh"></span>
                Actualizar</button>

            <a class="btn btn-info" type="reset" href="{{url('empleado')}}">
                <span class="glyphicon glyphicon-home"></span> Regresar </a>
        </div>
    </div>
</div>
{!!Form::close()!!}
@endsection


{{--@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{url('/empleado/'.$empleado->id)}}" method="post" enctype="multipart/form-data">
@csrf
{{method_field('PATCH')}}

@include('empleado.form',['modo'=>'Editar']);

</form>
</div>
@endsection--}}