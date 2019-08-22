@extends('layouts.plantilla')

@section('titulo','Crear Entidad')

@section('contenido')
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Ingrese los datos para generar una nueva entidad</h3>
  </div>

  <form method="POST" action="/entidades">
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
      
      <div class="form-group">
        <label for="exampleInputFile">Teléfono</label>
        <input class="form-control" name="telefono" placeholder="Ingrese el teléfono"></input>
      </div>
      
    </div>
    <div class="box-footer">
      <a href="/entidades" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Regesar</a>
      <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Guardar</button>
    </div>
  </form>
</div>
@endsection