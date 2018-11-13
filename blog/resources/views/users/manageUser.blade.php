@extends('layouts.master')

@section('manageUser')
	        <!-- Page tabs -->
                
                <div class="tab-content" >

                	<!-- First tab content -->
                	<div class="tab-pane active fade in" id="inside">

				    	<!-- Default datatable inside panel -->
			            <div class="panel panel-default">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table"></i> Default datatable inside panel</h6></div>
			                <div class="datatable">
				                <table class="table">
				                    <thead>
				                        <tr>
				                            <th>Id</th>
				                            <th>Name</th>
				                            <th>Email</th>
				                            <th>UserName</th>
				                            <th>Phone</th>
				                            <th>Address</th>
				                            <th>Quatification</th>
				                            <th>Status</th>
				                            <th>Action</th>
				                        </tr>
				                    </thead>
				                    <tbody>
				                    	@foreach($users as $user)
				                        <tr>    
				                           <td>{{ $user->id}}</td>
				                            <td>{{ $user->first_name.' '.$user->last_name}}</td>
				                           <td>{{ $user->email}}</td>
				                           <td>{{ $user->username}}</td>
				                            <td>{{ $user->phone}}</td>
				                            <td>{{ $user->address}}</td>
				                            <td>{{ $user->qualification}}</td>
				                            <td>{{ $user->status}}</td>
				                           
				                          
				                            <td>
												<button type="button" data-id="{{$user->id}}" class="btn btn-icon btn-danger delete"><i class="icon-google-drive"></i></button>

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
<script>
	
	$(document).ready(function(){
		$('.delete').click(function(){
		var current = $(this);
		var id = current.attr("data-id");
		if (confirm('Are you sure you want to trash this?')) {
            $.ajax({
            datatype:'json',
            url:'/delete/user',
            data:{'id': id , '_token': $('meta[name="csrf-token"]').attr('content')},
            type:'post',
            success:function(e){
            current.parent().parent().remove();

			}
		});
		}
	});
	});
</script>
@endsection
