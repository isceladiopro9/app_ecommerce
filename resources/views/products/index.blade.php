@extends('layouts.app')

@section('content')
	<div class="big-padding text-center blue-grey white-text">
		<h1>Productos</h1>
	</div>

	<div class="container">
		<table class="table table-bordered">
			<thead>
				<tr>
					<td>ID</td>
					<td>Titulo</td>
					<td>Descripción</td>
					<td>Precio</td>
					<td>Acciones</td>
				</tr>
			</thead>
			<tbody>
				@foreach($products as $product)
					<tr>
						<td>{{$product->id}}</td>
						<td>{{$product->title}}</td>
						<td>{{$product->description}}</td>
						<td>{{$product->pricing}}</td>
						<td><a class="btn btn-primary" href="{{url('/products/'.$product->id.'/edit')}}">Edit</a>

						@include('products.delete',['product'=>$product])

						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>

	<div class="floating">
		<a href="{{url('/products/create')}}" class="btn btn-primary btn-float">
  			<i>+</i>
		</a>
	</div>
@endsection