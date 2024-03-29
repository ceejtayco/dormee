@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="jumbotron">
			<h2>
				Welcome, {{ Auth::user()->getUsername() }}
			</h2>
			<p>
				You are
			</p>
			<p>
				<a class="btn btn-primary btn-large" href="#">Learn more</a>
			</p>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="jumbotron">
					<h2>
						Hello, world!
					</h2>
					<p>
						This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.
					</p>
					<p>
						<a class="btn btn-primary btn-large" href="#">Learn more</a>
					</p>
				</div>
			</div>
			<div class="col-md-6">
				<h3>
					h3. Lorem ipsum dolor sit amet.
				</h3>
				<form role="form">
					<div class="form-group">
						
						<label for="exampleInputEmail1">
							Email address
						</label>
						<input type="email" class="form-control" id="exampleInputEmail1" />
					</div>
					<div class="form-group">
						
						<label for="exampleInputPassword1">
							Password
						</label>
						<input type="password" class="form-control" id="exampleInputPassword1" />
					</div>
					<div class="form-group">
						
						<label for="exampleInputFile">
							File input
						</label>
						<input type="file" class="form-control-file" id="exampleInputFile" />
						<p class="help-block">
							Example block-level help text here.
						</p>
					</div>
					<div class="checkbox">
						
						<label>
							<input type="checkbox" /> Check me out
						</label>
					</div> 
					<button type="submit" class="btn btn-primary">
						Submit
					</button>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<h3 class="text-center">
					h3. Lorem ipsum dolor sit amet.
				</h3>
				<table class="table table-hover table-sm table-striped">
					<thead>
						<tr>
							<th>
								#
							</th>
							<th>
								Product
							</th>
							<th>
								Payment Taken
							</th>
							<th>
								Status
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								1
							</td>
							<td>
								TB - Monthly
							</td>
							<td>
								01/04/2012
							</td>
							<td>
								Default
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-md-4">
				<h3 class="text-center">
					h3. Lorem ipsum dolor sit amet.
				</h3>
				<table class="table table-sm table-hover table-striped">
					<thead>
						<tr>
							<th>
								#
							</th>
							<th>
								Product
							</th>
							<th>
								Payment Taken
							</th>
							<th>
								Status
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								1
							</td>
							<td>
								TB - Monthly
							</td>
							<td>
								01/04/2012
							</td>
							<td>
								Default
							</td>
						</tr>
						<tr class="table-active">
							<td>
								1
							</td>
							<td>
								TB - Monthly
							</td>
							<td>
								01/04/2012
							</td>
							<td>
								Approved
							</td>
						</tr>
						<tr class="table-success">
							<td>
								2
							</td>
							<td>
								TB - Monthly
							</td>
							<td>
								02/04/2012
							</td>
							<td>
								Declined
							</td>
						</tr>
						<tr class="table-warning">
							<td>
								3
							</td>
							<td>
								TB - Monthly
							</td>
							<td>
								03/04/2012
							</td>
							<td>
								Pending
							</td>
						</tr>
						<tr class="table-danger">
							<td>
								4
							</td>
							<td>
								TB - Monthly
							</td>
							<td>
								04/04/2012
							</td>
							<td>
								Call in to confirm
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-md-4">
				<h3 class="text-center">
					h3. Lorem ipsum dolor sit amet.
				</h3>
				<form role="form">
					<div class="form-group">
						
						<label for="exampleInputEmail1">
							Email address
						</label>
						<input type="email" class="form-control" id="exampleInputEmail1" />
					</div>
					<div class="form-group">
						
						<label for="exampleInputPassword1">
							Password
						</label>
						<input type="password" class="form-control" id="exampleInputPassword1" />
					</div>
					<div class="form-group">
						
						<label for="exampleInputFile">
							File input
						</label>
						<input type="file" class="form-control-file" id="exampleInputFile" />
						<p class="help-block">
							Example block-level help text here.
						</p>
					</div>
					<div class="checkbox">
						
						<label>
							<input type="checkbox" /> Check me out
						</label>
					</div> 
					<button type="submit" class="btn btn-primary">
						Submit
					</button>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-4">
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
	<div class="col-md-4">
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
	<div class="col-md-4">
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
	</div

	@stop