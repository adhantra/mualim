<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mualim</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/largesize.css') }}">
    <link rel="stylesheet" media="screen and (max-width: 1200px) and (min-width: 660px)" href="{{ asset('/css/mediumsize.css') }}">
    <link rel="stylesheet" media="screen and (max-width: 660px)" href="{{ asset('/css/smallsize.css') }}">
</head>
<body>
	<!-- Header -->
	@include('layout/top_menu')
	<!-- End of Header -->

	<!-- Body -->
	<section id="body">
        <div class="col-lg-12 col-md-12 col-sm-12 body">
        	<!-- Left Menu -->
			@include('layout/side_menu')
			<!-- End of Left Menu -->

			<!-- Content -->
			<div class="col-lg-10 col-md-8 col-sm-8 col-xs-12 right">
				@yield('content')
            </div>
			<!-- End of Content -->
		</div>
	</section>
</body>
</html>