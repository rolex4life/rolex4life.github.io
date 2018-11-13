@extends('layouts.master')
@section('dashboardContent')


			<!-- Page header -->
			<div class="page-header">
				<div class="page-title">
					<h3>Dashboard <small>Welcome Eugene. 12 hours since last visit</small></h3>
				</div>

				<div id="reportrange" class="range">
					<div class="visible-xs header-element-toggle">
						<a class="btn btn-primary btn-icon"><i class="icon-calendar"></i></a>
					</div>
					<div class="date-range"></div>
					<span class="label label-danger">9</span>
				</div>
			</div>
			<!-- /page header -->


			<!-- Breadcrumbs line -->
			<div class="breadcrumb-line">
				<ul class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li class="active">Dashboard</li>
				</ul>

				<div class="visible-xs breadcrumb-toggle">
					<a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
				</div>

				<ul class="breadcrumb-buttons collapse">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-search3"></i> <span>Search</span> <b class="caret"></b></a>
						<div class="popup dropdown-menu dropdown-menu-right">
							<div class="popup-header">
								<a href="#" class="pull-left"><i class="icon-paragraph-justify"></i></a>
								<span>Quick search</span>
								<a href="#" class="pull-right"><i class="icon-new-tab"></i></a>
							</div>
							<form action="#" class="breadcrumb-search">
								<input type="text" placeholder="Type and hit enter..." name="search" class="form-control autocomplete">
								<div class="row">
									<div class="col-xs-6">
										<label class="radio">
											<input type="radio" name="search-option" class="styled" checked="checked">
											Everywhere
										</label>
										<label class="radio">
											<input type="radio" name="search-option" class="styled">
											Invoices
										</label>
									</div>

									<div class="col-xs-6">
										<label class="radio">
											<input type="radio" name="search-option" class="styled">
											Users
										</label>
										<label class="radio">
											<input type="radio" name="search-option" class="styled">
											Orders
										</label>
									</div>
								</div>

								<input type="submit" class="btn btn-block btn-success" value="Search">
							</form>
						</div>
					</li>

					<li class="language dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="images/flags/german.png" alt=""> <span>German</span> <b class="caret"></b></a>
						<ul class="dropdown-menu dropdown-menu-right icons-right">
							<li><a href="#"><img src="images/flags/ukrainian.png" alt=""> Ukrainian</a></li>
							<li class="active"><a href="#"><img src="images/flags/english.png" alt=""> English</a></li>
							<li><a href="#"><img src="images/flags/spanish.png" alt=""> Spanish</a></li>
							<li><a href="#"><img src="images/flags/german.png" alt=""> German</a></li>
							<li><a href="#"><img src="images/flags/hungarian.png" alt=""> Hungarian</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<!-- /breadcrumbs line -->

			<!-- Info blocks -->
			<ul class="info-blocks">
				<li class="bg-primary">
					<div class="top-info">
						<a href="#">Add new post</a>
						<small>post management</small>
					</div>
					<a href="#"><i class="icon-pencil"></i></a>
					<span class="bottom-info bg-danger">12 drafts in progress</span>
				</li>
				<li class="bg-success">
					<div class="top-info">
						<a href="#">Site parameters</a>
						<small>layout settings</small>
					</div>
					<a href="#"><i class="icon-cogs"></i></a>
					<span class="bottom-info bg-primary">No updates</span>
				</li>
				<li class="bg-danger">
					<div class="top-info">
						<a href="#">Site statistics</a>
						<small>visits, users, orders stats</small>
					</div>
					<a href="#"><i class="icon-stats2"></i></a>
					<span class="bottom-info bg-primary">3 new updates</span>
				</li>
				<li class="bg-info">
					<div class="top-info">
						<a href="#">My messages</a>
						<small>messages history</small>
					</div>
					<a href="#"><i class="icon-bubbles3"></i></a>
					<span class="bottom-info bg-primary">24 new messages</span>
				</li>
				<li class="bg-warning">
					<div class="top-info">
						<a href="#">Orders history</a>
						<small>purchases statistics</small>
					</div>
					<a href="#"><i class="icon-cart2"></i></a>
					<span class="bottom-info bg-primary">17 new orders</span>
				</li>
				<li class="bg-primary">
					<div class="top-info">
						<a href="#">Invoices stats</a>
						<small>invoices archive</small>
					</div>
					<a href="#"><i class="icon-coin"></i></a>
					<span class="bottom-info bg-danger">9 new invoices</span>
				</li>
			</ul>
			<!-- /info blocks -->
			  <!-- Footer -->
	        <div class="footer clearfix">
		        <div class="pull-left">&copy; 2013. Londinium Admin Template by <a href="http://themeforest.net/user/Kopyov">Eugene Kopyov</a></div>
	        	<div class="pull-right icons-group">
	        		<a href="#"><i class="icon-screen2"></i></a>
	        		<a href="#"><i class="icon-balance"></i></a>
	        		<a href="#"><i class="icon-cog3"></i></a>
	        	</div>
	        </div>
	        <!-- /footer -->


	


	</div>
	<!-- /page container -->

</body>
</html>
	
			@endsection