@extends('layouts.master')

@section('manageUser')
<div  style="margin-top:30px;">
	
</div>
<!-- /callout -->
	        <!-- Page tabs -->
                
                <div class="tab-content">

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
				                            <th>Title</th>
				                            <th>Price</th>
				                            <th>Expiry</th>
				                            <th>Coupon Code</th>
				                            <th>Status</th>
				                            <th>Actions</th>
				                        </tr>
				                    </thead>
				                    <tbody>
				                    	@foreach($coupons as $coupon)
				                        <tr>
				                            <td>{{ $coupon->id}}</td>
				                            <td>{{ $coupon->title}}</td>
				                            <td>{{ $coupon->price}}</td>
				                            <td><span class="label label-block label-danger ">{{ date('d-m-Y', strtotime($coupon->expiry))	}}</span></td>
				                          
				                            <td><span class="label label-block label-primary ">{{ $coupon->number}}</span></td>
				                            <td>{{ $coupon->status}}</td>
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

        	</div>
        	<!-- /page tabs -->

@endsection