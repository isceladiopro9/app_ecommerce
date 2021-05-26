@extends('layouts.app')

@section('content')
	<div class="container white p-2">
		<h1>Nuevo producto</h1>
		{!! Form::open(['url'=>'/products','method'=>'POST']) !!}

			<div class="form-group">
				{{Form::text('title','',['class'=>'form-control','placeholder'=>'Titulo...'])}}
			</div>

			<div class="form-group">
				{{Form::text('description','',['class'=>'form-control','placeholder'=>'Descripcion...'])}}
			</div>

			<div class="form-group">
				{{Form::text('pricing','',['class'=>'form-control','placeholder'=>'Precio...'])}}
			</div>

			<div class="form-group text-right">
				<a href="{{url('/products')}}">Volver</a>
				<input type="submit" value="Enviar" class="btn btn-warning">
			</div>

		{!! Form::close() !!}
	</div>
@endsection