@section('content')
<div class="row">
	<dl class="sub-nav">
		<dt>Options:</dt>
		<dd class="active"><a href="{{ URL::action('PostController@index') }}">All Posts</a></dd>
		<dd><a href="{{ URL::action('PostController@create') }}">Create New Post</a></dd>
	</dl>
	@if( $errors->has('postActionDone') )
		<div data-alert class="alert-box success">
          {{ $errors->first('postActionDone', ':message') }}
          <a href="" class="close">×</a>
        </div>
	@endif
	<p>You can find all your posts here {{ Auth::user()->username }}</p>
	<table class="large-12">
	  <thead>
	    <tr>
	      <th>Insert Date</th>
	      <th>Post Title</th>
	      <th colspan="2">Options</th>
	    </tr>
	  </thead>
	  <tbody>
	    @foreach($posts as $post)
	    <tr>
	    	<td>{{ $post->created_at }}</td>
	    	<td>{{ $post->title }}</td>
	    	<td><a href="{{ URL::action('PostController@edit', $post->id) }}">Edit</a></td>
	    </tr>
	    @endforeach
	  </tbody>
	</table>
</div>
@stop