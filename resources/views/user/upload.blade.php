@extends('layout.user')
@section('title', 'Dashboard')
@section('content')
<div id="colorlib-main">
	<form action="{{url('import-image')}}" enctype="multipart/form-data" method="post" class="dropzone">
		@csrf
		<!-- <input multiple="multiple" name="photos[]" type="file">
		<button class="btn btn-primary" type="submit">submit</button> -->
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
            acceptedFiles: ".jpeg,.jpg,.png,.gif,.mp4",
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