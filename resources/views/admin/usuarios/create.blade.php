@extends('layouts.plantilla')

@section('title','Generar Usuario')
@section('titulo','Generación de nuevo usuario')
@section('contenido')
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Ingrese los datos para generar un nuevo usuario</h3>
  </div>

  <form method="POST" action="/usuarios">
    @csrf
    
    <div class="box-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Nombre:</label>
        <input type="text" class="form-control" name="nombre" placeholder="Ingrese el nombre" required>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Apellido Paterno:</label>
        <input type="text" class="form-control" name="aPaterno" placeholder="Ingrese el apellido paterno" required>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Apellido Materno:</label>
        <input type="text" class="form-control" name="aMaterno" placeholder="Ingrese el apellido materno" required>
      </div>
      
      <div class="form-group">
        <label for="exampleInputPassword1">Teléfono:</label>
        <input type="text" class="form-control" name="telefono" placeholder="Ingrese el telefono" required>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Correo Electrónico:</label>
        <input type="text" class="form-control" name="mail" placeholder="Ingrese el correo electrónico" required>
      </div>
      <div class="form-group">
        <label>Entidad</label>
        <select name="puesto" class="form-control">
          @foreach($puestos as $puesto)
            <option value="{{$puesto->nombre}}">{{$puesto->nombre}}</option>
          @endforeach
        </select>
      </div>
      
    </div>
    <div class="box-footer">
      <a href="/usuarios" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Regesar</a>
      <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Guardar</button>
    </div>
  </form>
</div>
@endsection