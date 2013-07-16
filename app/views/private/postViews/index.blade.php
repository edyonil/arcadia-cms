@section('content')
<div class="row">
	<dl class="sub-nav">
		<dt>Options:</dt>
		<dd class="active"><a href="{{ URL::action('PostController@index') }}">All Posts</a></dd>
		<dd><a href="{{ URL::action('PostController@create') }}">Create New Post</a></dd>
	</dl>
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
	    	<td><a href="{{ URL::action('PostController@show', $post->id) }}">Edit</a></td>
	    	<td><a href="{{ URL::action('PostController@destroy', $post->id) }}">Delete</a></td>
	    </tr>
	    @endforeach
	  </tbody>
	</table>
</div>
@stop