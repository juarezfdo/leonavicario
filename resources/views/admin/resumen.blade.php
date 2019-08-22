@extends('layouts.plantilla')
@section('titulo','Resúmen')

@section('contenido')
	<div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
            	@foreach($ingresos as $ingreso)
            		 {{$ingreso->cantidad}}
            	@endforeach
              <h3></h3>

              <p>Ingresos Totales</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">Ver más <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
@endsection