@extends('admin.template.main')

@section('title', 'Editar artículo - ' . $article->title)

@section('content')
	{!! Form::open(['route' => ['admin.articles.update', $article], 'method' => 'PUT']) !!}

		<div class="form-group">
			{!! Form::label('title', 'Título') !!}
			{!! Form::text('title', $article->title, ['class' => 'form-control', 'placeholder' => 'Título del artículo', 'required']) !!}
		</div>

		<div class="form-group">
		{!! Form::label('category_id', 'Categoría') !!}
			{!! Form::select('category_id', $categories, $article->category->id, ['class' => 'form-control select-category', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('content', 'Contenido') !!}
			{!! Form::textarea('content', $article->content, ['class' => 'form-control textarea-content']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('tags', 'Tags') !!}
			{!! Form::select('tags[]', $tags, $my_tags, ['class' => 'form-control select-tag', 'multiple', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Editar artículo', ['class' => 'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}
@endsection

@section('js')

	<script>
		$('.select-tag').chosen({
			placeholder_text_multiple: 'Seleccione un máximo de 3 tags',
			max_selected_options: 3,
			no_results_text: 'No se encontraron estos tags'
		});

		$('.select-category').chosen({
			placeholder_text_simple: 'Seleccione una categoría'
		});

		$('.textarea-content').trumbowyg();
	</script>

@endsection