<!DOCTYPE html>
<html>
<head>
	<title>Todo List</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
	@include('inc.navbar')
	<div class="container">
		@include('inc.messages')
		@yield('content')
	</div>

	<footer id="footer" class="text-center">
		<p>Copyright &copy; 2018 Vedansh Dwivedi</p>
	</footer>
</body>
</html>