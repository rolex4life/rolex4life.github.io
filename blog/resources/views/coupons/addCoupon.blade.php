@extends('layouts.master')

@section('addUser')
<div  style="margin-top:30px;">

</div>
<!-- /callout -->


<!-- Bug report form -->
<form class=" form-bordered" enctype="multipart/form-data" method="post" action="/save_coupon" role="form">
	{{ csrf_field() }}
	<div class="panel panel-default">
		<div class="panel-heading"><h6 class="panel-title"><i class="icon-tags"></i> Coupon Generate</h6>
			<div class="form-actions text-right">
            	
            	<input type="submit" value="Submit" class="btn btn-success">
            </div></div>
		<div class="panel-body">

			<div class="form-group">
				<div class="row">
					<div class="col-md-6">
						<label>Title:</label>
						<input type="text" name="title" class="form-control" placeholder="Title">
					</div>
					<div class="col-md-6">
						<label>Expiry Date:</label>
						<input type="date" name="expiry" class="form-control" placeholder="Expiry">
					</div>
					
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-md-6">
						<label>Price:</label>
						<input type="text" name="price" class="form-control" placeholder="Price">
					</div>

					<div class="col-md-6">
						<label>Coupon Code Genrator:</label>
						<input id="refresh" type="button" class="btn btn-primary " value="Generate Codes">
						
					</div>

						
				</div>
			</div>
			
			<div class="form-group">
				<div class="row">

					<div class=" col-md-6">
						<div id="main">
							
						</div>
					</div>
				</div>
			</div>

            <div class="form-actions text-center">
            	<input type="reset" value="Cancel" class="btn btn-danger">
            	<input type="submit" value="Submit" class="btn btn-success">
            </div>			

		</div>
	</div>
</form>

@endsection

@section('couponscript')

<script type="text/javascript">
	function GetPromo() {
		var a = "QCABNI12";
		var p = "ABDRY09";
  var b = "0" + Math.random().toString().substr(3, 5); //(2,6);
  var c = Math.random().toString().substr(7, 1);
  //prompt("Your Coupon Code: ",a+b+p+c);
  return a + b + p + c;
}

function RefreshList() {
	for (var i = 0; i < 10; i++) {
		$("#main").append('<input  type="text"  class="form-control" name="number[]" value="'+ GetPromo() +'">' + "<br />");
	}
}

$("#refresh").click(function() {
	alert('here');
	$("#main").empty();
	RefreshList();
});

</script>
@endsection


