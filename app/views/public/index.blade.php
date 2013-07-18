@section('content')
<!-- Feeds -->
@foreach($posts as $post)
<div class="row panel">
	<div class="small-12 large-12 columns">
		<h3 class="left">{{ $post->title }}</h3>
		<span class="right radius secondary label">{{ $post->user->username }} <small>{{ $post->created_at }}</small></span>
		<p class="clear">
			{{ nl2br($post->post) }}
		</p>
		<ul class="inline-list"></ul>
	</div>
</div>
@endforeach
<!-- End Feeds Section -->
@stop