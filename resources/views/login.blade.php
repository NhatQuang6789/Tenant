<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="{{ url('css/login.css') }}">
</head>
<body>
	<div class="container_default">
		<div class="core_form">
			<h4>Login Area</h4>
			<form method="post" name="form_login" id="form_login" action="{{ url('post_login') }}">
				{{ csrf_field() }}
				<div class="row_ipt">
					<span class="default_name">Username:</span>
					<input type="text" name="username" placeholder="Username">
				</div>
				<div class="row_ipt">
					<span class="default_name">Password:</span>
					<input type="password" name="password" placeholder="Password">
				</div>
				<div class="row_ipt" style="border-bottom:none;">
					<input type="submit" name="submit" value="Đăng Nhập">
					<div class="clear"></div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>















