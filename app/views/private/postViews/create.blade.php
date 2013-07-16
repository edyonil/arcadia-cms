@section('content')
<div class="row">
	<dl class="sub-nav">
		<dt>Options:</dt>
		<dd><a href="{{ URL::action('PostController@index') }}">All Posts</a></dd>
		<dd class="active"><a href="{{ URL::action('PostController@create') }}">Create New Post</a></dd>
	</dl>
	<form action="{{ URL::action('PostController@store') }}" method="post">
		<fieldset>
            <legend>Creating a brand new Post</legend>
			<div class="row">
				<div class="large-12 columns">
					@if( $errors->has('pTitle') )
						<label for="pTitle" class="error">Title</label>
						<input type="text" name="pTitle" class="error" x-webkit-speech required placeholder="{{ Input::old('pTitle') }}" autocomplete="off">
						<small class="error">{{ $errors->first('pTitle', ':message') }}</small>
					@else
						<label for="pTitle">Title</label>
						<input type="text" name="pTitle" x-webkit-speech required placeholder="Post Title here">
					@endif
				</div>
			</div>
			<div class="row">
				<div class="large-12 columns">
					@if( $errors->has('pText') )
						<label for="pText" class="error">Title</label>
						<textarea name="pText" required placeholder="Put your Text here" class="error" style="margin: 0px 0px 14px;width: 958px;height: 448px;">
							{{ Input::old('pText') }}
						</textarea>
						<small class="error">{{ $errors->first('pText', ':message') }}</small>
					@else
						<label for="pText">Text</label>
						<textarea name="pText" required placeholder="Put your Text here" style="margin: 0px 0px 14px;width: 958px;height: 448px;"></textarea>
					@endif
				</div>
			</div>
			<button type="submit" class="button success">Save Post</button>
          </fieldset>
	</form>
</div>
@stop