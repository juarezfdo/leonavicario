@extends('layouts.plantilla')

@section('titulo','Gastos')
@section('descripcion','Relación de Gastos Registrados en la Institución')

@section('contenido')
<div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Registro de Gastos</h3>

        <div class="box-tools">
          <!--<div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

            <div class="input-group-btn">
              <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </div>
          </div>-->
          <a href="/gastos/create" class="btn btn-success"><i class="fa fa-plus"></i> Agregar</a>
        </div>
        
      </div>
       
      <!-- /.box-header -->
      <div class="box-body">
        <table id="puestos" class="table table-bordered table-striped">
          <thead>
            <th>ID</th>
            <th>Cantidad</th>
            <th>Descripción</th>
            <th>Fecha</th>
            <th>Persona</th>
            <th>Editar</th>
            <th>Eliminar</th>
          </thead>

          @foreach($gastos as $gasto)
            <tbody>
              <td>{{$gasto->id}}</td>
              <td>{{$gasto->cantidad}}</td>
              <td>{{$gasto->descripcion}}</td>
              <td>{{$gasto->fecha}}</td>
              <td>{{$gasto->persona}}</td>
              <td>
              	<a href="/gastos/{{$gasto->id}}/edit"><button class="btn btn-warning fa fa-edit"></button></a>
              </td>
              <td>
                <form method="POST" action="/obligaciones/{{$gasto->id}}">
                    @method('DELETE')
                    @csrf
                  <button type="submit" class="btn btn-danger fa fa-trash-o"></button>
                </form>
              </td>
            </tbody>
          @endforeach

          <tfoot>
            <th>ID</th>
            <th>Cantidad</th>
            <th>Descripción</th>
            <th>Fecha</th>
            <th>Persona</th>
            <th>Editar</th>
            <th>Eliminar</th>
          </tfoot>
        </table>
      </div>
   </div>
  </div>
@endsection