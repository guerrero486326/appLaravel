@extends('layouts.app')

@section('content')
	<div class="col-md-6 offset-3">
		<table>
			<thead>
				<tr>
					<td>ID</td>
					<td>Nombre</td>
					<td>Acciones</td>
				</tr>
			</thead>
			<tbody>
				@foreach($categories as $category)
					<tr>
						<td>{{ $category->id }}</td>
						<td>{{ $category->name }}</td>
						<td>
							<a href="{{ route('categories.show',['category' => $category->id ]) }}"> Ver mas</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection