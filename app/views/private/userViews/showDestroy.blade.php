@section('content')
<div class="row">
	<dl class="sub-nav">
		<dt>Options:</dt>
		<dd><a href="{{ URL::action('UserController@index') }}">All Users</a></dd>
		<dd><a href="{{ URL::action('UserController@create') }}">Create New User</a></dd>
		<dd class="active"><a href="{{ URL::action('UserController@showDestroy', $user->id) }}">Deleting User: {{ $user->username }}</a></dd>
	</dl>
	<h1>Attention! <small>Are you sure to do this?</small></h1>
	<form action="{{ URL::action('UserController@destroy', $user->id) }}" method="post">
		{{ Form::token() }}
		<input type="hidden" name="_method" value="delete">
		<input type="submit" class="button alert large-12" value="Yes Delete It!">
	</form>
</div>
@stop