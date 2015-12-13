@extends('front.template.main')

@section('content')

	<h3 class="title-front left">Últimos artículos</h3>
	<div class="row">
		<div class="col-md-8">
			<div class="row">

				@foreach($articles as $article)

				<div class="col-md-6">
					<div class="panel panel-defaul">
						<div class="panel-body">
							<a href="#" class="thumbnail">
							@foreach($article->images as $image)
								<img class="img-responsive img-article" src="{{ asset('images/articles/' . $image->name) }}" alt="...">
							@endforeach
							</a>
							<h3 class="text-center">{{ $article->title }}</h3>
							<hr>
							<i class="fa fa-folder-open-o"></i> <a href="">{{ $article->category->name }}</a>
							<div class="pull-right">
								<i class="fa fa-clock-o"></i> {{ $article->created_at->diffForHumans() }}
							</div>
						</div>
					</div>
				</div>

				@endforeach

			</div>
			<div class="text-center">
				{!! $articles->render() !!}
			</div>
		</div>

		<div class="col-md-4 aside">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Categorías</h3>
				</div>
				<div class="panel-body">
					<ul class="list-group">
						@foreach($categories as $category)

						<li class="list-group-item">
							<span class="badge">{{ $category->articles->count() }}</span>
							{{ $category->name }}
						</li>

						@endforeach
					</ul>
				</div>
			</div>
		</div>

		<div class="col-md-4 aside">
			<div class="panel panel-danger">
				<div class="panel-heading">
					<h3 class="panel-title">Tags</h3>
				</div>
				<div class="panel-body">
					@foreach($tags as $tag)

					<span class="label label-default">{{ $tag->name }}</span>

					@endforeach
				</div>
			</div>
		</div>
	</div>

@endsection