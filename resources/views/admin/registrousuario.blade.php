@extends('adminlte::page')

@section('title', 'Registro de usuarios')

@section('content_header')
   
@stop

@section('content')
<br>
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Registro Usuarios</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
      <div class="card-body">
        <div class="form-group">
            <label for="InputNombre1">Nombre</label>
            <input type="text" class="form-control" id="InputNombre1" placeholder="Ingrese su nombre">
        </div>

        <div class="form-group">
          <label for="InputEmail1">Correo electronico</label>
          <input type="email" class="form-control" id="InputEmail1" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>

        <div class="form-group">
            <label>Cargo</label>
            <select class="form-control">
              <option>Medico</option>
              <option>MP</option>
              <option>Gerencia</option>
            </select>
          </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Registrar</button>
      </div>
    </form>
  </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop