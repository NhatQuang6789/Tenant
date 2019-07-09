@extends("master")
@section("content")
	<div class="main_display">
		<?php
			
			foreach ($status as $key => $value) {
		?>
			<div class="row_display">
				<span class="default_name">{{ Auth::user()->name }}</span>
				<div class="content_status">			
					{{ $value->content }}
				</div>
			</div>
		<?php		
			}
		?>
	</div>
@endsection