<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
</head>
<body>
		 
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
	@include('template.header')
	@yield('konten')<br>
	@include('template.footer')
</body>
</html>