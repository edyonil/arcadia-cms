@section('content')
<div class="small-12 large-12 row">
	<h1>Login inside to Manage your account</h1>
	@if($errors->has('loginError'))
	<div data-alert="" class="alert-box alert">
		{{ $errors->first('loginError', ':message') }}
		<a href="" class="close">×</a>
	</div>
	@endif	
	<form action="{{ URL::route('home.doLogin') }}" class="custom" method="post" enctype="application/x-www-form-urlencoded">
		{{ Form::token() }}
    	<div class="row collapse">
        	<div class="large-12 columns">
            	<label for="email">Email</label>
            	<input type="email" x-webkit-speech name="email" required placeholder="example@foo.bar">
            </div>
        </div>
        <div class="row collapse">
            <div class="large-12 columns">
                <label for="pass">Password</label>
                <input type="password" name="pass" required placeholder="Password">
            </div>
        </div>
        <button type="submit" class="radius button right">Login</button>
	</form>
</div>
@stop