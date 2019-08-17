@extends('layout.user')
@section('title', 'Dashboard')
@section('content')
<div id="colorlib-main">
	<section class="ftco-section bg-light ftco-bread">
		<div class="container">
			<div class="row no-gutters slider-text align-items-center">
				<div class="col-md-9 ftco-animate">
					<p class="breadcrumbs"><span class="mr-2"><a href="{{url('home')}}">Home</a></span>
						<span class="mr-2"><a href="{{url('home')}}l">Blog</a></span>
					<h1 class="mb-3 bread">Upload Photos</h1>
					<p>Upload Max File Size = 15MB</p>
				</div>
			</div>
		</div>
	</section>
	<section class="ftco-section">
		<form action="{{url('import-image')}}" enctype="multipart/form-data" method="post" class="dropzone">
			@csrf
		<!-- <input multiple="multiple" name="photos[]" type="file">
			<button class="btn btn-primary" type="submit">submit</button> -->
			
			<a href="{{url('home')}}" class="btn btn-primary">Upload</a>
		</form>
	</section>
</div>

<script type="text/javascript">
	Dropzone.options.dropzone =
	{
		maxFilesize: 12,
		renameFile: function(file) {
			var dt = new Date();
			var time = dt.getTime();
			return time+file.name;
		},
		acceptedFiles: ".jpeg,.jpg,.png,.gif",
		addRemoveLinks: true,
		timeout: 5000,
		success: function(file, response)
		{
			console.log(response);
		},
		error: function(file, response)
		{
			return false;
		}
	};
</script>
@endsection