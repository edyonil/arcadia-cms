@section('content')
<div class="row">
	<dl class="sub-nav">
		<dt>Options:</dt>
		<dd class="active"><a href="{{ URL::action('UserController@index') }}">All Users</a></dd>
		<dd><a href="{{ URL::action('UserController@create') }}">Create New User</a></dd>
	</dl>
	@if( $errors->has('userActionDone') )
		<div data-alert class="alert-box success">
          {{ $errors->first('userActionDone', ':message') }}
          <a href="" class="close">×</a>
        </div>
	@endif
	<p>You have {{ count($users) }} users register :-) </p>
	<table class="large-12">
	  <thead>
	    <tr>
	      <th>Insert Date</th>
	      <th>Post Title</th>
	      <th colspan="2">Options</th>
	    </tr>
	  </thead>
	  <tbody>
	    @foreach($users as $user)
	    <tr>
	    	<td>{{ $user->role->name }}</td>
	    	<td>{{ $user->username }}</td>
	    	<td></td>
	    </tr>
	    @endforeach
	  </tbody>
	</table>
</div>
@stop