@extends('layouts.master')

@section('addUser')
<div  style="margin-top:30px;">
	
</div>
<!-- /callout -->


<!-- Bug report form -->
<form action="/bankdetail"  method="post" role="form">
	{{ csrf_field() }}
	<div class="panel panel-default">
		<div class="panel-heading"><h6 class="panel-title"><i class="icon-menu"></i>Settings</h6></div>
		<div class="panel-body">

			<div class="form-group">
				<div class="row">
					<div class="col-md-12">
						<label>New Post:</label>
						<input type="hidden" name="users_id" class="form-control" value=" {{Auth::id()}}">
					</div>
					<div class="col-md-12">
						<label>Account Title:</label>
						<input type="text" name="account_title" class="form-control" placeholder="Account Title:">
					</div>
					<div class="col-md-12">
						<label>Account Number:</label>
						<input type="text" name="account_number" class="form-control" placeholder="Account Number:">
					</div>
					<div class="col-md-12">
						<label>Bank Name:</label>
						<input type="text" name="bank_name" class="form-control" placeholder="Bank Name:">
					</div>
					
				</div>
			</div>


		</div>



		<div class="form-actions text-right">
			<input type="reset" value="Cancel" class="btn btn-danger">
			<input type="submit" value="Submit" class="btn btn-primary">
		</div>

	</div>
</form>

	@endsection