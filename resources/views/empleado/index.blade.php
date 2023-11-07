@extends('layouts.app')
@section('content')
<div class="container">

    @if(Session::has('mensaje'))
    {{Session::get('mensaje')}}

    @endif
    <a href="{{url('empleado/create')}}" class="btn btn-success">Registrar Nuevo Empleado </a>
    <a href="{{ url('informacion-pacientes') }}" class="btn btn-info">Ver Información de los Pacientes</a>
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"class="btn btn-danger">
        Cerrar Sesión
    </a>
   
    <br />
    <br />
    <table class="table table-light">

        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Foto</th>
                <th>Nombre Completo</th>
                <th>Correo Electronico</th>
                <th>Acciones</th>

            </tr>
        </thead>

        <tbody>
            @foreach( $users as $empleado )
            <tr>
                <td>{{ $empleado->id}}</td>

                <td>
                    <img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$empleado->Foto}}" width="100"
                        alt="">
                </td>

                <td>{{ $empleado->name}}</td>
                <td>{{ $empleado->email}}</td>

                <td>

                    <a href="{{URL::action('App\Http\Controllers\EmpleadoController@edit',$empleado->id)}}"
                        class="btn btn-warning">
                        Editar
                    </a>
                    |

                    <!--ELIMINAR-->
                    <a href="{{ url('empleado/delete', $empleado->id) }}" data-bs-toggle="modal"
                        data-bs-target="#modal-delete-{{ $empleado->id }}">
                        <button type="button" class="btn btn-danger">Eliminar</button>
                    </a>


                </td>

            </tr>
            @include('empleado.modal')

            @endforeach
        </tbody>

    </table>
</div>
@endsection