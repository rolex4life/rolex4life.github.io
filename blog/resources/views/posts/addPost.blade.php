@extends('layouts.master')

@section('addPost')
<style type="text/css">
ul.wysihtml5-toolbar{
	width: 105% !important;
}

#img_contain{
	border: 1px solid #dddddd;
	margin-top: 10px;
	width: 100%;

}

#imgInp{
	border: 1px solid #dddddd;
	margin-top: 10px;
	width: 100%;

}
#blah{
	height:320px;
	width:auto;
	display:block;
	margin-left: auto;
	margin-right: auto;
	padding:5px;
}
</style>
<div style="margin-top: 30px;">

</div>
<!-- /callout -->


<!-- Bug report form -->

<!-- Form bordered -->
<form class="form-horizontal form-bordered" enctype="multipart/form-data" method="post" action="/save_post" role="form">
	{{ csrf_field()}}
	<div class="panel panel-default">
		<div class="panel-heading">
			<h6 class="panel-title"><i class="icon-menu"></i> Add Post</h6>
		</div>
		<div class="panel-body">

			<div class="form-group">
				<label class="col-sm-1 control-label">Title:</label>
				<div class="col-sm-11">
					<input type="text" class="form-control" name="title" placeholder="Title">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-1 control-label">Users Id:</label>
				<div class="col-sm-11">
					<input type="text" class="form-control" name="user_id"  value="{{ Auth::id()}}" placeholder="Title">
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-1 control-label">Post Category: </label>
				<div class="col-sm-10">
					<div class="block-inner">
						@foreach($categories as $category)
						<label class="checkbox-inline checkbox-danger">
							<div class="checker"><span><input type="checkbox" name="categories_id[]" class="styled" value="{{ $category->id}}"></span>
							</div>
							{{ 		$category->name}}
						</label>
						@endforeach
					</div>	
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-1 control-label">Description:</label>
				<div class="col-sm-11">
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default">
								<div class="panel-heading"><h6 class="panel-title"><i class="icon-pencil"></i> Editor inside panel</h6></div>
								<div class="panel-body">
									<form action="#" role="form">
										<div class="block-inner">
											<textarea name="content" class="form-control my-editor">{!! old('content') !!}</textarea>
										</div>

									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-1 control-label">Featured Image:</label>
				<div class="col-sm-11">
					<div class="row">
						<div class="col-sm-12">	
							<input type='file' id="imgInp" name="featured_image" class="form-control" />
							<div id='img_contain'><img id="blah" align='middle' src="http://www.clker.com/cliparts/c/W/h/n/P/W/generic-image-file-icon-hi.png" alt="your image" title=''/></div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>


<div class="form-actions text-right">
	<input type="reset" value="Cancel" class="btn btn-danger">
	<input type="submit" value="Submit " class="btn btn-primary">
</div>


</form>
<!-- /bug report form -->

@endsection