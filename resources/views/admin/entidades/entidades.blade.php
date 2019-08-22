@extends('layouts.plantilla')

@section('titulo','Entidades')
@section('descripcion','Relación de Entidades Registradas en la Institución')

@section('contenido')
<div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Registro de Entidades</h3>

        <div class="box-tools">
          <!--<div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

            <div class="input-group-btn">
              <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </div>
          </div>-->
          <a href="/entidades/create" class="btn btn-success"><i class="fa fa-plus"></i> Agregar</a>
        </div>
        
      </div>
       
      <!-- /.box-header -->
      <div class="box-body">
        <table id="puestos" class="table table-bordered table-striped">
          <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Teléfono</th>
            <th>Editar</th>
            <th>Eliminar</th>
          </thead>

          @foreach($entidades as $entidad)
            <tbody>
              <td>{{$entidad->id}}</td>
              <td>{{$entidad->nombre}}.</td>
              <td>{{$entidad->descripcion}}</td>
              <td>{{$entidad->telefono}}</td>
              <td>
              	<a href="/entidades/{{$entidad->id}}/edit"><button class="btn btn-warning fa fa-edit"></button></a>
              </td>
              <td>
                <form method="POST" action="/obligaciones/{{$entidad->id}}">
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
            <th>Teléfono</th>
            <th>Editar</th>
            <th>Eliminar</th>
          </tfoot>
        </table>
      </div>
   </div>
  </div>
@endsection