<h1>{{$modo}} empleado </h1>

<div class="form-group">

    <div class="col-md-4">
        <label for="name">Nombre Completo</label>
        <input type="text" name="name" value="{{isset($empleado->name)?$empleado->name:''}}" class="form-control"
            id="name">
    </div>
    <br>
    <div class="col-md-4">
        <label for="email">Correo Electronico</label>
        <input type="text" name="email" value="{{isset($empleado->email)?$empleado->email:''}}" class="form-control"
            id="email">
    </div>
    <br>
    <div class="col-md-4">
        <label for="password">Contraseña</label>
        <input type="password" name="password" value="{{isset($empleado->password)?$empleado->password:''}}"
            class="form-control" id="password">
    </div>
    <br>
    <br>
    <a href="{{url('empleado/')}}" class="btn btn-secondary"> Regresar </a>
    <button type="submit" class="btn btn-primary" value="{{$modo}} datos">Confirmar</button>


</div>