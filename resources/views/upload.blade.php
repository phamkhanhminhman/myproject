<form action="{{url('import-image')}}" enctype="multipart/form-data" method="post">
	@csrf
	<input multiple="multiple" name="photos[]" type="file">
	<button class="btn btn-primary" type="submit">submit</button>
</form>