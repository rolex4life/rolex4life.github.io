	@extends('layouts.master')

@section('addUser')
<div  style="margin-top:30px;">
	
</div>
<!-- /callout -->


<!-- Bug report form -->
<form action="/add_category"  method="post" role="form">
	{{ csrf_field() }}
	<div class="panel panel-default">
		<div class="panel-heading"><h6 class="panel-title"><i class="icon-user"></i>Add Category</h6></div>
		<div class="panel-body">

			<div class="form-group">
				<div class="row">
					<div class="col-md-6">
						<label>Category Name:</label>
						<input type="text" name="name" class="form-control" placeholder="Category Name">
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
		<div class="panel-heading"><h6 class="panel-title"><i class="icon-table"></i>Manage Catrgory</h6></div>
		<div class="datatable">
			<table class="table">
				<thead>
					<tr>
						
						<th>Id</th>
						<th>Category Name</th>
						<th>Menu List</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>

					
					@foreach($categories as $category)

					
						<tr>
<form class="form-horizontal form-bordered" method="post" action="/insertMenuitems" role="form">
						{{ csrf_field()}}
							<td >
								<input type="hidden" name="categories_id" value="{{ $category->id}}">
								{{ $category->id}}

							</td>
							<td>{{ $category->name}}</td>
							<td><div class="form-group">

								<div class="col-sm-10">
										<select multiple="multiple" name="menus_id" class="multi-select" tabindex="2">
											@foreach($menus as $menu)
											<option value="{{ $menu->id}}">{{ $menu->title}}</option> 

											@endforeach
										</select>
									</div>
								</div>
							</td>
							<td>
								<input type="submit" value="Submit" class="btn btn-primary">
							</td>

					</form>
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