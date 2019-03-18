@extends('layouts.app')

@section('content')

<div class="row justify-content-center card py-5" style="width:85%; margin:0 auto;">
	<div class="col-md-12">
		<div class="jumbotron-grey row">
			@if (Auth::user()->isLandlord())
			<div class="col-md-4">
				@else
				<div class="col-md-12">
					@endif
					<h2>
						Your Account
					</h2>
				

			</div>
				@if (Auth::user()->isLandlord())
					<div class="col-md-8 flex-box-around">
					<a href="dorms/show" class="btn btn-primary">My Dorms</a>
					<a href="dorms/add" class="btn btn-primary">Add a Dorm</a>
					@endif
						@if (Auth::user()->isLandlord())
					</div>
					@endif
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="jumbotron">
						<h2>
							Hey, {{Auth::user()->username}}!
						</h2>
						<p>
							This is for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.
						</p>
						<p>
							<a class="btn btn-primary btn-large" href="#">Learn more</a>
						</p>
					</div>
				</div>
				<div class="col-md-6">
					<h3 class="mb-4">
						Edit account details
					</h3>
					<hr>
					@include('forms.register')
				</div>
			</div>
		</div>
	</div>
	<div class="row justify-content-center mx-3 my-5" style="margin: 0 auto;">
		<div class="col-md-4 sm-box px-5 pink">
			<h2>
				Dorms
			</h2>
			<p>
				Check out dorms.
			</p>
			<p>
				<a class="btn" href="#">View details »</a>
			</p>
		</div>
		<div class="col-md-4 sm-box grey">
			<h2>
				Roommates
			</h2>
			<p>
				Search for radical roommates.
			</p>
			<p>
				<a class="btn" href="#">View details »</a>
			</p>
		</div>
		<div class="col-md-4 justify-content-center sm-box green">
			<h2>
				Messages
			</h2>
			<p>
				View your messages.
			</p>
			<p>
				<a class="btn" href="#">View details »</a>
			</p>
		</div>
	</div>

	@stop