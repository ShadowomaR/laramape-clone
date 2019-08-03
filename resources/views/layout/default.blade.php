<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="{{ asset('css/bootstrap-4.0.0-dist/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{ asset('css/font-awesome-4.7.0/css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{ asset('css/app.css')}}">
        <script src="{{ asset('css/bootstrap-4.0.0-dist/ajax/jquery.min.js') }}"></script>
        <!-- <script src="{{ asset('css/bootstrap-4.0.0-dist/ajax/popper.min.js')}}"></script> -->
        <script src="{{ asset('css/bootstrap-4.0.0-dist/js/bootstrap.min.js')}}"></script>
	<title>{{ isset($title) ? $title.' | ' : ''}}Laracarte Liste of artisan</title>
	</head>
	<body>
		@include('layout/partiels._navbar')

		@yield('content')

		@include('layout/partiels._footer')
	</body>
</html>
