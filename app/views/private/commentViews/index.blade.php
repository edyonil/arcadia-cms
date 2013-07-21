@section('content')
<div class="row">
	<dl class="sub-nav">
		<dt>Options:</dt>
		<dd class="active"><a href="{{ URL::action('CommentController@index') }}">All Comments</a></dd>
		<dd><a href="{{ URL::action('CommentController@create') }}">Create New Comment</a></dd>
	</dl>
	@if( $errors->has('commentActionDone') )
		<div data-alert class="alert-box success">
          {{ $errors->first('commentActionDone', ':message') }}
          <a href="" class="close">×</a>
        </div>
	@endif
	<p>List of all comments</p>
	<table class="large-12">
	  <thead>
	    <tr>
	      <th>Insert Date</th>
	      <th>Post commented</th>
	      <th>Comment author</th>
	      <th colspan="2">Options</th>
	    </tr>
	  </thead>
	  <tbody>
	    @foreach($comments as $comment)
	    <tr>
	    	<td>{{ $comment->created_at }}</td>
	    	<td>{{ $comment->comment }}</td>
	    	<td><a href="#AllCommentsOf">{{ $comment->user->username }}</a></td>
	    	<td><a href="{{ URL::action('CommentController@edit', $comment->id) }}">Edit</a></td>
	    </tr>
	    @endforeach
	  </tbody>
	</table>
</div>
@stop