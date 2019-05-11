@extends('layouts.app')

@section('content')
	<div class="col-md-6 offset-3">
		<div class="card card-block">
			<div class="card-body">
				<h1>Nueva Categoria</h1>
				<form action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} ">
						<label for="name">Nombre de la categoria: </label>
						<input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control">

						@if($errors->has('name'))
							<small class="form-text text-danger">
								<strong>{{$errors->first('name')}}</strong>
							</small>
						@endif
					</div>
					<div class="form-group">
						<label for="image">Imagen de la categoria</label>
						<input type="file" name="image">
						@if($errors->has('image'))
							<small class="form-text text-danger">
								<strong>{{$errors->first('image')}}</strong>
							</small>
						@endif
					</div>
					<button type="submit" class="btn btn-success">Enviar</button>
				</form>
			</div>
		</div>
	</div>
@endsection