@extends('layout.user')
@section('title', 'Dashboard')
@section('content')
<div id="colorlib-main">
	<section class="ftco-section-2">
		<div class="photograhy">
			<div class="row no-gutters">
				<?php foreach ($test as $p): ?>
					<div class="col-md-4 ftco-animate">
						<a href="{{$p->name}}" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url({{$p->name}});">
							<div class="overlay"></div>
							<div class="text text-center">
								<h3>Work 01</h3>
								<span class="tag">Model</span>
							</div>
						</a>
					</div>
				<?php endforeach?>
			</div>
		</div>
	</section>
	@includeIf('partials.user_footer')
</div><!-- END COLORLIB-PAGE -->

@endsection