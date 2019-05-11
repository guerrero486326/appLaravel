@extends('layouts.app')

@section('content')
	<div class="col-md-8 offset-2">
		<h1>{{ $category->name }}. <small>Categoria creada el día {{ $category->created_at->format('d-m-Y') }}</small></h1>

		@if($category->image)
			<a href="{{ asset($category->image) }}" target="_blank">
				<img src="{{ asset($category->image) }}" alt="">
			</a>
		@endif
	</div>
@endsection