@extends('layouts.master')

@section('manageComments')
<div  style="margin-top:30px;">
	
</div>
<!-- /callout -->



<div class="tab-pane active fade in" id="inside">

	<!-- Default datatable inside panel -->
	<div class="panel panel-default">
		<div class="panel-heading"><h6 class="panel-title"><i class="icon-table"></i>Manage Comments</h6></div>
		<div class="datatable">
			<table class="table">
				<thead>
					<tr>
						
						<th>Id</th>
						<th>User Name</th>
						<th>Post Title</th>
						<th>Comment</th>
						<th>Status</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>

					</tr>
					
					@foreach($comments as $comment)

					
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