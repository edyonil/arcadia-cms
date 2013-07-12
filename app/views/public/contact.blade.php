@section('content')
<div class="row">
	<!-- Contact Details -->
	<div class="large-9 columns">
		@if($errors->has('contactUsDone'))
		<div data-alert="" class="alert-box success">
          {{ $errors->first('contactUsDone', ':message') }}
          <a href="" class="close">×</a>
        </div>
		@endif
		<h3>May you would contact us</h3>
		<p>This page will be editable as soon as possible from backend. At the moment you can change the source code <em>everytime</em>.</p>
		<div class="section-container auto" data-section="">
			<section class="section active" style="padding-top: 52px;">
          		<h5 class="title" style="left: 0px;"><a href="#panel1">Contact Us</a></h5>
          		<div class="content" data-slug="panel1" style="">
        			<form method="post" action="{{ URL::route('home.postContact') }}">
						<div class="row collapse">
							<div class="large-2 columns">
								<label class="inline">Name</label>
							</div>
							<div class="large-10 columns">
								<input type="text" name="contactName" required placeholder="Claudio Ludovico">
							</div>
						</div>
						<div class="row collapse">
							<div class="large-2 columns">
								<label class="inline">Email</label>
							</div>
							<div class="large-10 columns">
								<input type="text" name="contactEmail" required placeholder="example@foo.bar">
							</div>
						</div>
						<label>Message</label>
						<textarea rows="4" placeholder="What's up?"></textarea>
						<button type="submit" class="radius button">Send Request</button>
					</form>
				</div>
        	</section>
      	</div>
    </div>
</div>
@stop