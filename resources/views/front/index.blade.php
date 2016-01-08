@extends('front.template.main')

@section('content')

	<h3 class="title-front left">{{ trans('app.title_last_articles') }}</h3>
	<div class="row">
		<div class="col-md-9">
			<div class="row">

				@foreach($articles as $article)

				<div class="col-md-6">
					<div class="panel panel-defaul">
						<div class="panel-body">
							<a href="{{ route('front.view.article', $article->slug) }}" class="thumbnail">
							@foreach($article->images as $image)
								<img class="img-responsive img-article" src="{{ asset('images/articles/' . $image->name) }}" alt="...">
							@endforeach
							</a>
							<h4 class="text-center">
								<a href="{{ route('front.view.article', $article->slug) }}">
									{{ $article->title }}
								</a>
							</h4>
							<hr>
							<i class="fa fa-folder-open-o"></i> <a href="{{ route('front.search.category', $article->category->name) }}">{{ $article->category->name }}</a>
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

		<div class="col-md-3 aside">
			@include('front.partials.aside')
		</div>
	</div>

@endsection