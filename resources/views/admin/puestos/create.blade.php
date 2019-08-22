@extends('layouts.plantilla')

@section('title','Generar Puesto')
@section('titulo','Generación de nuevo puesto')
@section('contenido')
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Ingrese los datos para generar un nuevo puesto</h3>
  </div>

  <form method="POST" action="/puestos">
    @csrf
    
    <div class="box-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Nombre:</label>
        <input type="text" class="form-control" name="nombre" placeholder="Ingrese el nombre" required>
      </div>
      
      <div class="form-group">
        <label for="exampleInputPassword1">Descripción</label>
        <input type="text" class="form-control" name="descripcion" placeholder="Ingrese la descripción" required>
      </div>
      
    </div>
    <div class="box-footer">
      <a href="/puestos" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Regesar</a>
      <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Guardar</button>
    </div>
  </form>
</div>
@endsection