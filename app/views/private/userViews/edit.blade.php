@section('content')
<div class="row">
	<dl class="sub-nav">
		<dt>Options:</dt>
		<dd><a href="{{ URL::action('UserController@index') }}">All Users</a></dd>
		<dd><a href="{{ URL::action('UserController@create') }}">Create New User</a></dd>
		<dd class="active"><a href="{{ URL::action('UserController@edit', $user->id) }}">Editing User: {{ $user->username }}</a></dd>
	</dl>
	<form action="{{ URL::action('UserController@update', $user->id) }}" method="post">
		<input type="hidden" name="_method" value="put">
		<fieldset>
            <legend>Editing this awesome User</legend>
			<div class="row">
				<div class="large-12 columns">
					
				</div>
			</div>
			<div class="row">
				<div class="large-12 columns">
					@if( $errors->has('uName') )
						<label for="uName" class="error">Name</label>
						<input type="text" name="uName" class="error" x-webkit-speech required placeholder="{{ Input::old('uName') }}" autocomplete="off">
						<small class="error">{{ $errors->first('uName', ':message') }}</small>
					@else
						<label for="uName">Name</label>
						<input type="text" name="uName" x-webkit-speech required placeholder="Write the name" value="{{ $user->name }}">
					@endif
				</div>
			</div>
			<div class="row">
				<div class="large-12 columns">
					@if( $errors->has('uSurname') )
						<label for="uSurname" class="error">Surname</label>
						<input type="text" name="uSurname" class="error" x-webkit-speech required placeholder="{{ Input::old('uSurname') }}" autocomplete="off">
						<small class="error">{{ $errors->first('uSurname', ':message') }}</small>
					@else
						<label for="uSurname">Surname</label>
						<input type="text" name="uSurname" x-webkit-speech required placeholder="Write the surname" value="{{ $user->surname }}">
					@endif
				</div>
			</div>
			<div class="row">
				<div class="large-12 columns">
					@if( $errors->has('uEmail') )
						<label for="uEmail" class="error">Email</label>
						<input type="email" name="uEmail" class="error" x-webkit-speech required placeholder="{{ Input::old('uEmail') }}" autocomplete="off">
						<small class="error">{{ $errors->first('uEmail', ':message') }}</small>
					@else
						<label for="uEmail">Email</label>
						<input type="email" name="uEmail" x-webkit-speech required placeholder="example@newuser.it, must be unique" value="{{ $user->email }}">
					@endif
				</div>
			</div>
			<div class="row">
				<div class="large-12 columns">
					@if( $errors->has('uNick') )
						<label for="uNick" class="error">Username</label>
						<input type="text" name="uNick" class="error" x-webkit-speech required placeholder="{{ Input::old('uNick') }}" autocomplete="off">
						<small class="error">{{ $errors->first('uNick', ':message') }}</small>
					@else
						<label for="uNick">Username</label>
						<input type="text" name="uNick" x-webkit-speech required placeholder="Write the username" value="{{ $user->username }}">
					@endif
				</div>
			</div>
			<div class="row">
				<div class="large-12 columns">
					@if( $errors->has('uPass') )
						<label for="uPass" class="error">Password</label>
						<input type="password" name="uPass" class="error" x-webkit-speech placeholder="Rewrite the password please or leave this field EMPTY" autocomplete="off">
						<small class="error">{{ $errors->first('uPass', ':message') }}</small>
					@else
						<label for="uPass">Password</label>
						<input type="password" name="uPass" x-webkit-speech placeholder="LEAVE EMPTY if you don't want to change it">
					@endif
				</div>
			</div>
			<button type="submit" class="button success">Update this User</button>
			<a href="{{ URL::route('admin.user.destroy', $user->id) }}" class="button alert">Delete User</a>
          </fieldset>
	</form>
</div>
@stop