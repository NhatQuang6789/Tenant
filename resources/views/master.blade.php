<!DOCTYPE html>
<html>
<head>
	<title>Main Page</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="{{ url('css/master.css') }}">
</head>
<body>
	<div class="default_container">
		<div class="core_container">
			<h4>Main Area</h4>
			<div class="main_menu">
				<ul>
					<li><a href="{{ url('all') }}">Trang chủ</a></li>
					<li><a href="{{ url('/') }}">Cá nhân</a></li>
					<li>
						<form method="post" name="logout" id="logout" action="{{ url('logout') }}">
							{{ csrf_field() }}
							<input id="logout" type="submit" name="logout" value="Đăng xuất">
						</form>
					</li>
				</ul>
			</div>
			<div class="core_content">
				@yield("content")
			</div>
		</div>
	</div>
</body>
</html>
















