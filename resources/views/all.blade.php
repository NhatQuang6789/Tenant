@extends("master")
@section("content")
	<div class="main_form">
		<form method="post" name="main_form_status" id="main_form_status" action="{{ url('post_status') }}">
			{{ csrf_field() }}
			<textarea id="status" name="status" placeholder="Let me know what do you think"></textarea>
			<div class="row_ipt" style="border-bottom:none;">
				<input type="submit" name="submit" value="Post">
				<div class="clear"></div>
			</div>
		</form>
	</div>
	<div class="main_display">
		<div class="main_display">
		<?php
			
			foreach ($status as $key => $value) {
				$user = DB::table("users")->where("id", $value->id_user)->first();
		?>
			<div class="row_display">
				<span class="default_name">{{ $user->name }}</span>
				<div class="content_status">			
					{{ $value->content }}
				</div>
			</div>
		<?php		
			}
		?>
		</div>
	</div>
@endsection