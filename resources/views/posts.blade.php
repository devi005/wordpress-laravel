@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Posts</div>

				<div class="panel-body">
					<h3>List of wpPosts</h3>
					@foreach($wpPosts as $post)
						<p><a href="{{ $post->guid }}" >{{ $post->post_title }}</a></p>
					@endforeach

					<div class="category">
						<h3>List of categories</h3>
						@foreach($categories as $news)
							<p>{{ $news->name }}</p>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection