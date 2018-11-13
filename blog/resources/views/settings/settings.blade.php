@extends('layouts.master')

@section('addUser')
<div  style="margin-top:30px;">
	
</div>
<!-- /callout -->


<!-- Bug report form -->
<form action="/settings"  method="post" role="form">
	{{ csrf_field() }}
	<div class="panel panel-default">
		<div class="panel-heading"><h6 class="panel-title"><i class="icon-menu"></i>Settings</h6></div>
		<div class="panel-body">

			<div class="form-group">
				<div class="row">
					<div class="col-md-12">
						<label>New Post:</label>
						<input type="text" name="new_post" class="form-control" placeholder="New Post:" value="{{$data['regular']['new_post']}}">
					</div>
					<div class="col-md-12">
						<label>New Comment:</label>
						<input type="text" name="new_comment" value="{{$data['regular']['new_comment']}}" class="form-control" placeholder="New Comment:">
					</div>
					<div class="col-md-12">
						<label>First Login:</label>
						<input type="text" name="first_login" value="{{$data['regular']['first_login']}}" class="form-control" placeholder="First Login:">
					</div>
					<div class="col-md-12">
						<label>Refferal:</label>
						<input type="text" name="refer" value="{{$data['regular']['refer']}}" class="form-control" placeholder="Refferal:">
					</div>
					<div class="col-md-12">
						<label>Minimum Withdrawl Amount:</label>
						<input type="text" name="minimum_withdraw" value="{{$data['regular']['minimum_withdraw']}}" class="form-control" placeholder="Minimum Withdrawl Amount:">
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