@extends('layouts.plantilla')

@section('titulo','Generar Ingreso')

@section('contenido')
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Ingrese los datos para generar un nuevo ingreso</h3>
  </div>

  <form method="POST" action="/ingresos">
    @csrf
    
    <div class="box-body">

      <div class="form-group">
        <label>Entidad</label>
        <select name="entidad" class="form-control">
          @foreach($entidades as $entidad)
            <option value="{{$entidad->id}}">{{$entidad->nombre}}</option>
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Cantidad:</label>
        <input type="number" min="0.00" max="1000000.00" step="0.01" class="form-control" name="cantidad" placeholder="Ingrese la cantidad" required>
      </div>
      
      <div class="form-group">
        <label for="exampleInputPassword1">Descripción</label>
        <input type="text" class="form-control" name="descripcion" placeholder="Ingrese la descripción" required>
      </div>
      
      <div class="form-group">
        <label for="exampleInputFile">Fecha:</label>
        <input type="date" class="form-control" name="fecha" placeholder="Ingrese la fecha"></input>
      </div>
      
    </div>
    <div class="box-footer">
      <a href="/ingresos" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Regesar</a>
      <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Guardar</button>
    </div>
  </form>
</div>
@endsection