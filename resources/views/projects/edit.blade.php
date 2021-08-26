@extends('layout')

@section('title', 'Editar proyectos')

@section('content')
	<h1>Editar proyecto</h1>
	
	<form method="POST" action="{{ route('projects.update', $project) }}">
		@csrf @method('PATCH')

		@if ($errors->any())
        	<ul>
            	@foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            	@endforeach
        	</ul>
		@endif

		<label>
			titulo del proyecto<br>
			<input type="text" name="title" value="{{ old('title', $project->title)}}"><br>
		</label>
		<label>
			Url del proyecto<br>
			<input type="text" name="url" value="{{ old('url', $project->url)}}"><br>
		</label>
		<label>
			Descripcion del proyecto<br>
			<textarea name="description">{{ old('description', $project->description)}}</textarea><br>
		</label>

		<button>Actualizar</button>
	</form>

@endsection