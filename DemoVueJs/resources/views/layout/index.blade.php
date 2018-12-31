<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="assets/user/css/reset.css">
	<link rel="stylesheet" href="assets/user/css/style.css">
	<link rel="stylesheet" href="assets/user/css/all.css"> 
	<script src='https://code.jquery.com/jquery-3.3.1.min.js'></script>
	<div id="fb-root"></div>
	<style>
	
	</style>
</head>

<body onload="timeclock()">  
	<div class="container"> 
    @include('layout/header')
		<main class="main">
		@include('layout/left_header')

        @yield('content')

        @include('layout/right_header')
		</main> <!-- END MAIN -->
		<div class="clickTop"><i class="fas fa-arrow-up"></i></div>
	</div>
	@include('layout/footer')
</body>

</html>
<script src='assets/user/js/style.js'></script> 