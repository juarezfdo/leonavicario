@extends('layouts.plantilla')

@section('titulo','Ingresos')
@section('descripcion','Relación de Ingresos')

@section('contenido')
<div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Registro de Ingresos</h3>

        <div class="box-tools">
          <!--<div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

            <div class="input-group-btn">
              <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </div>
          </div>-->
          <a href="/ingresos/create" class="btn btn-success"><i class="fa fa-plus"></i> Agregar</a>
        </div>
        
      </div>
       
      <!-- /.box-header -->
      <div class="box-body">
        <table id="puestos" class="table table-bordered table-striped">
          <thead>
            <th>ID</th>
            <th>Entidad</th>
            <th>Descripción</th>
            <th>Fecha</th>
            <th>Cantidad</th>
            <th>Editar</th>
            <th>Eliminar</th>
          </thead>

          @foreach($ingresos as $ingreso)
            <tbody>
              <td>{{$ingreso->id}}</td>
              <td>
                @foreach($entidades as $entidad)
                 @if($entidad->id == $ingreso->id_entidad){
                    {{$entidad->nombre}}
                  }
                  @endif
                  
                @endforeach
              </td>
              
              <td>{{$ingreso->descripcion}}</td>
              <td>{{$ingreso->fecha}}</td>
              <td>{{$ingreso->cantidad}}</td>
              <td>
              	<a href="/ingresos/{{$ingreso->id}}/edit"><button class="btn btn-warning fa fa-edit"></button></a>
              </td>
              <td>
                <form method="POST" action="/obligaciones/{{$ingreso->id}}">
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