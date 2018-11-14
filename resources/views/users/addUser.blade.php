@extends('layouts.master')

@section('addUser')
			<div  style="margin-top:30px;">
				
			</div>
            <!-- /callout -->


			<!-- Bug report form -->
			<form action="#" role="form">
	            <div class="panel panel-default">
	                <div class="panel-heading"><h6 class="panel-title"><i class="icon-user"></i> User Info</h6></div>
	                <div class="panel-body">

	                	<div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<label>First Name:</label>
	                                <input type="text" name="first_name" class="form-control" placeholder="First Name">
								</div>

								<div class="col-md-6">
									<label>Last Name:</label>
	                                <input type="text" name="last_name" class="form-control" placeholder="Last Name">
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<label>Username:</label>
	                                <input type="text" name="username" class="form-control" placeholder="User Name">
								</div>

								<div class="col-md-6">
									<label>Email:</label>
	                                <input type="text" name="email" class="form-control" placeholder="Email">
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<label>Phone:</label>
	                                <input type="text" name="phone" class="form-control" placeholder="Phone">
								</div>

								<div class="col-md-6">
									<label>Qualification:</label>
	                                <input type="text" name="qualification" class="form-control" placeholder="Qualification">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<label>Referral:</label>
	                                <input type="text" name="referral" class="form-control" placeholder="Referral">
								</div>

								<div class="col-md-6">
									<label>Address:</label>
	                                <input type="text" name="address" class="form-control" placeholder="Address">
								</div>
							</div>
						</div>


						<div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<label>Role:</label>
                                    <select data-placeholder="Choose your system..." class="select-full" tabindex="2">
                                        <option value="">Select Role</option> 
                                        <option value="win7">Windows 7</option> 
                                        <option value="win8">Windows 8</option> 
                                        <option value="macos">Mac OS</option> 
                                        <option value="chromeos">Chrome OS</option> 
                                    </select>
								</div>

								<div class="col-md-6">
									<label>Status:</label>
	                                <input type="text" name="status" class="form-control" placeholder="your@email.com">
								</div>
							</div>
						</div>



                        <div class="form-actions text-right">
                        	<input type="reset" value="Cancel" class="btn btn-danger">
                        	<input type="submit" value="Submit report" class="btn btn-primary">
                        </div>

					</div>
				</div>
			</form>
			<!-- /bug report form -->

			@endsection