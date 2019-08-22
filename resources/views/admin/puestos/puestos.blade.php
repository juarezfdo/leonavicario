@extends('layouts.plantilla')

@section('titulo','Puestos')
@section('descripcion','Descripcion de los roles de la mesa directiva')

@section('contenido')
	<div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Registro de Puestos</h3>

        <div class="box-tools">
          <!--<div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

            <div class="input-group-btn">
              <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </div>
          </div>-->
          <a href="/puestos/create" class="btn btn-success"><i class="fa fa-plus"></i> Agregar</a>
        </div>
        
      </div>
       
      <!-- /.box-header -->
      <div class="box-body">
        <table id="puestos" class="table table-bordered table-striped">
          <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Eliminar</th>
          </thead>

          @foreach($puestos as $puesto)
            <tbody>
              <td>{{$puesto->id}}</td>
              <td>{{$puesto->nombre}}</td>
              <td>{{$puesto->descripcion}}</td>
              <td>
                <form method="POST" action="/obligaciones/{{$puesto->id}}">
                    @method('DELETE')
                    @csrf
                  <button type="submit" class="btn btn-danger fa fa-trash-o"></button>
                </form>
              </td>
            </tbody>
          @endforeach

          <tfoot>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Eliminar</th>
          </tfoot>
        </table>
      </div>
   </div>
  </div>
@endsection