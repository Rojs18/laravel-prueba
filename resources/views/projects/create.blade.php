@extends('layout')

@section('title', 'Crear proyectos')

@section('content')
	<h1>Crear nuevo proyecto</h1>
	
	<form method="POST" action="{{ route('projects.store') }}">
		@csrf

		@if ($errors->any())
        	<ul>
            	@foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            	@endforeach
        	</ul>
		@endif

		<label>
			titulo del proyecto<br>
			<input type="text" name="title" value="{{ old('title')}}"><br>
		</label>
		<label>
			Url del proyecto<br>
			<input type="text" name="url" value="{{ old('url')}}"><br>
		</label>
		<label>
			Descripcion del proyecto<br>
			<textarea name="description" value="{{ old('description')}}"></textarea><br>
		</label>

		<button>Guardar</button>
	</form>

@endsection