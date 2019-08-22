@extends('layouts.plantilla')

@section('titulo','Generar Gasto')

@section('contenido')
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Ingrese los datos para generar un nuevo gasto</h3>
  </div>

  <form method="POST" action="/gastos">
    @csrf
    
    <div class="box-body">

      <div class="form-group">
        <label>Persona</label>
        <select name="persona" class="form-control">
          @foreach($usuarios as $usuario)
            <option value="{{$usuario->nombre}} {{$usuario->aPaterno}} {{$usuario->aMaterno}}">{{$usuario->nombre}} {{$usuario->aPaterno}} {{$usuario->aMaterno}}</option>
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
      <a href="/gastos" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Regesar</a>
      <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Guardar</button>
    </div>
  </form>
</div>
@endsection