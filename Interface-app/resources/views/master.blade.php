<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link href="assests/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="assests/css/tiny-slider.css" rel="stylesheet">
		<link href="assests/css/style.css" rel="stylesheet">
		<title>Woodland</title>
	</head>

	<body>

		<!-- Start Header/Navigation -->

        @include('layout.navbar')
		
		@yield('content')
		
        @include('layout.footer')
		
		<!-- End Footer Section -->	


		<script src="assests/js/bootstrap.bundle.min.js"></script>
		<script src="assests/js/tiny-slider.js"></script>
		<script src="assests/js/custom.js"></script>
	</body>

</html>
