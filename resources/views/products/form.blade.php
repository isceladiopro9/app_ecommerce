{!! Form::open(['url'=>$url,'method'=>$method]) !!}

	<div class="form-group">
		{{Form::text('title',$product->title,['class'=>'form-control','placeholder'=>'Titulo...'])}}
	</div>

	<div class="form-group">
		{{Form::text('description',$product->description,['class'=>'form-control','placeholder'=>'Descripcion...'])}}
	</div>

	<div class="form-group">
		{{Form::text('pricing',$product->pricing,['class'=>'form-control','placeholder'=>'Precio...'])}}
	</div>

	<div class="form-group text-right">
		<a href="{{url('/products')}}">Volver</a>
		<input type="submit" value="Enviar" class="btn btn-warning">
	</div>

{!! Form::close() !!}