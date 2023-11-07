<!-- resources/views/paciente/informacion.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">

    <h2>Información De Los Pacientes</h2>

    <div class="row mt-4 mb-4">
        <!-- Módulo: Crear Paciente -->
        <div class="col-md-4">
            <!-- ... -->
            
        </div>

        <!-- Módulo: Consultar Paciente -->
        <div class="col-md-4">
            <!-- ... -->
        </div>

        <!-- Módulo: Descargar Datos en PDF -->
        <div class="col-md-4">
            <!-- ... -->
        </div>
    </div>

    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Edad</th>
                <th>Correo</th>
                <!-- Agrega más columnas según tus necesidades -->
            </tr>
        </thead>

        <tbody>
            @foreach($pacientes as $paciente)
            <tr>
                <td>{{ $paciente->id }}</td>
                <td>{{ $paciente->nombre }}</td>
                <td>{{ $paciente->apellidos }}</td>
                <td>{{ $paciente->edad }}</td>
                <td>{{ $paciente->correo }}</td>
                <!-- Agrega más celdas según tus necesidades -->
                <td>
                    <!-- Agrega botones y enlaces según tus necesidades -->
                    <a href="{{ route('descargar_pdf', $paciente->id) }}" class="btn btn-success">Descargar PDF</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection
