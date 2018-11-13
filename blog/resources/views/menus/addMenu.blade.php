@extends('layouts.master')

@section('addMenu')
<div  style="margin-top:30px;">
	
</div>
<!-- /callout -->


<!-- Bug report form -->
<form action="/add_menu"  method="post" role="form">
	{{ csrf_field() }}
	<div class="panel panel-default">
		<div class="panel-heading"><h6 class="panel-title"><i class="icon-user"></i>Add Menu</h6></div>
		<div class="panel-body">

			<div class="form-group">
				<div class="row">
					<div class="col-md-6">
						<label>Menu Title:</label>
						<input type="text" name="title" class="form-control" placeholder="MenuTitle">
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
<!-- First tab content -->
<div class="tab-pane active fade in" id="inside">

	<!-- Default datatable inside panel -->
	<div class="panel panel-default">
		<div class="panel-heading"><h6 class="panel-title"><i class="icon-table"></i>Manage Menu</h6></div>
		<div class="datatable">
			<table class="table">
				<thead>
					<tr>
						
						<th>Id</th>
						<th>Menu Title</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach($menus as $menu)
					<tr>
						<td>{{ $menu->id}}</td>
						<td>{{ $menu->title}}</td>
						<td>
							<button type="button" class="btn btn-icon btn-danger"><i class="icon-google-drive"></i></button>

							<button type="button" class="btn btn-icon btn-success"><i class="icon-google-drive"></i></button></td>
						</tr>
						@endforeach
						
						
					</tbody>
				</table>
			</div>
		</div>
		<!-- /default datatable inside panel -->

	</div>

	<!-- /bug report form -->

	@endsection