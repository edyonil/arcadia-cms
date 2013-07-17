@section('content')
<div class="row">
	<dl class="sub-nav">
		<dt>Options:</dt>
		<dd><a href="{{ URL::action('PostController@index') }}">All Posts</a></dd>
		<dd><a href="{{ URL::action('PostController@create') }}">Create New Post</a></dd>
		<dd class="active"><a href="{{ URL::action('PostController@showDestroy', $post->id) }}">Deleting Post: {{ $post->title }}</a></dd>
	</dl>
	<h1>Attention! <small>Are you sure to do this?</small></h1>
	<form action="{{ URL::action('PostController@destroy', $post->id) }}" method="post">
		{{ Form::token() }}
		<input type="hidden" name="_method" value="delete">
		<input type="submit" class="button alert large-12" value="Yes Delete It!">
	</form>
</div>
@stop