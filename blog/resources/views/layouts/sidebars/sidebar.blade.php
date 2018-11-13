
<!-- Sidebar -->
<div class="sidebar">
	<div class="sidebar-content">

		<!-- User dropdown -->
		<div class="user-menu dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<img src="http://placehold.it/300">
				<div class="user-info">
					Madison Gartner <span>Web Developer</span>
				</div>
			</a>
			<div class="popup dropdown-menu dropdown-menu-right">
				<div class="thumbnail">
					<div class="thumb">
						<img src="http://placehold.it/300">
						<div class="thumb-options">
							<span>
								<a href="#" class="btn btn-icon btn-success"><i class="icon-pencil"></i></a>
								<a href="#" class="btn btn-icon btn-success"><i class="icon-remove"></i></a>
							</span>
						</div>
					</div>

					<div class="caption text-center">
						<h6>Madison Gartner <small>Front end developer</small></h6>
					</div>
				</div>

				<ul class="list-group">
					<li class="list-group-item"><i class="icon-pencil3 text-muted"></i> My posts <span class="label label-success">289</span></li>
					<li class="list-group-item"><i class="icon-people text-muted"></i> Users online <span class="label label-danger">892</span></li>
					<li class="list-group-item"><i class="icon-stats2 text-muted"></i> Reports <span class="label label-primary">92</span></li>
					<li class="list-group-item"><i class="icon-stack text-muted"></i> Balance <h5 class="pull-right text-danger">$45.389</h5></li>
				</ul>
			</div>
		</div>
		<!-- /user dropdown -->


		<!-- Main navigation -->
		<ul class="navigation">
			<li class="active"><a href="{{ route('dashboard')}}"><span>Dashboard</span> <i class="icon-screen2"></i></a></li>
			@php
			$check_user =Auth::user()->role;
			@endphp
			@if($check_user == 1)
			<li>
				<a href="#"><span>Users</span> <i class="icon-paragraph-justify2"></i></a>
				<ul>
					<li><a href="manageUser">Manage User</a></li>	
				</ul>
			</li>
			
			<li>
				<a href="#"><span>Coupons</span> <i class="icon-copy"></i></a>
				<ul>
					<li><a href="addCoupon">Add Coupon</a></li>
					<li><a href="manageCoupon">Manage Coupon</a></li>
				</ul>
			</li>
			<li>
				<a href="#"><span>Category</span> <i class="icon-numbered-list"></i></a>
				<ul>
					<li><a href="addCategories">Add Catergory</a></li>
					<!-- <li><a href="">Manage Category</a></li> -->
				</ul>
			</li>
			<li>
				<a href="#"><span>Menu</span> <i class="icon-numbered-list"></i></a>
				<ul>
					<li><a href="addMenu">Add Menu</a></li>
					<li><a href="menuItems">Manage Menu</a></li>
				</ul>
			</li>
			<li>
				<a href="#"><span>Comments</span> <i class="icon-numbered-list"></i></a>
				<ul>
					<li><a href="addMenu">Add Menu</a></li>
					<li><a href="menuItems">Manage Menu</a></li>
				</ul>
			</li>
			<li>
				<a href="#"><span>Settings</span> <i class="icon-numbered-list"></i></a>
				<ul>
					<li><a href="/settings">Manage Setting</a></li>
				</ul>
			</li>
			@endif
			<li>
				<a href="#"><span>Posts</span> <i class="icon-grid"></i></a>
				<ul>
					<li><a href="addPost">Add Post</a></li>
					<li><a href="">Manage Post</a></li>
				</ul>
			</li>
			
			<!-- /main navigation -->

		</div>
	</div>
	<!-- /sidebar -->
</div>