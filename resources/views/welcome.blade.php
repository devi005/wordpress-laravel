@extends('app')

@section('content')
		
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">

				<div class="panel-heading">Welcome!</div>

				<div class="panel-body">
					<h1><?php bloginfo( 'name' ); ?></h1>
					<h3>{{ get_bloginfo( 'description', 'display' ) }}</h3>
					<div class="title">Laravel 5</div>
					<div class="quote"><h4>{{ Inspiring::quote() }}</h4></div>
					
				</div>
			</div>
		</div>
	</div>
</div>

@endsection		