@extends('layouts.master')
@section('addPost')
<div  style="margin-top:30px;">
	
</div>
                
                <div class="tab-content">

                	<!-- First tab content -->
                	<div class="tab-pane active fade in" id="inside">

				    	<!-- Default datatable inside panel -->
			            <div class="panel panel-default">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table"></i> Manage Post</h6></div>
			                <div class="datatable">
				                <table class="table">
				                    <thead>
				                        <tr>
				                            <th>Id</th>
				                            <th>User Name</th>
				                            <th>Title</th>
				                            <th>Category Name</th>
				                            <th>Featured Image</th>
				                            <th>Actions</th>
				                        </tr>
				                    </thead>
				                    <tbody>
				                    	@foreach($posts as $post)
				                        <tr>
				                            <td>#</td>
				                            <td><span class="label label-info">{{ $post->first_name}} {{$post->last_name}}</span> </td>
				                            <td>{{ $post->title}}</td>
				                            <td><span class="label label-success">{{ $post->name}}</span></td>
				                            <td><img src="/uploads/articles/{{ $post->featured_image}}" width="100px" height="70px"></td>
				                            <td>
												<button type="button" data-id="4" class="btn btn-icon btn-danger delete"><i class="icon-remove3"></i></button>

												<button type="button" class="btn btn-icon btn-success"><i class="icon-google-drive"></i></button></td>
				                        </tr>
				                        @endforeach
				                         
				                    </tbody>
				                </table>
			                </div>
				        </div>
				        <!-- /default datatable inside panel -->

            	</div>

        	</div>
        	<!-- /page tabs -->

@endsection