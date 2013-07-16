@section('content')
<div class="row">
	<dl class="sub-nav">
		<dt>Options:</dt>
		<dd><a href="{{ URL::action('PostController@index') }}">All Posts</a></dd>
		<dd class="active"><a href="{{ URL::action('PostController@create') }}">Create New Post</a></dd>
	</dl>
	<h1>Coming soon...</h1>
</div>
@stop