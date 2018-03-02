@extends('voyager-frontend::layouts.default')
@section('meta_title', $post->title)
@section('meta_description', $post->meta_description)
@section('page_title', $post->title)
@section('page_subtitle', 'Posted // ' . $post->created_at->format('jS M. Y'))

@section('content')
		@include('voyager-frontend::partials.page-title')

		<div class="vspace-2"></div>

		<div class="grid-container">
				<div class="grid-x">
						<div class="cell small-12">
								{!! $post->body !!}
						</div> <!-- /.cell -->
				</div> <!-- /.grid -->
		</div> <!-- /.grid-container -->

		<div class="vspace-2"></div>
@endsection