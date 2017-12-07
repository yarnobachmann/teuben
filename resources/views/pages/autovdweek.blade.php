<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Teubenautos | Admin</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/stylesautovdweek.css" rel="stylesheet">
    <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
		<link href="css/scrolling-nav.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <style type="text/css">
      .container form{
        margin-top: 250px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 250px;
      }
    </style>
	</head>
	<body>
		@if (Auth::check())
		@include('partials._navbarAuth')
		@else
		@include('partials._navbar')
		@endif
<div class="header">

</div>

<div class="textbalk">

  <h2>autovdweek</h2>
</div>

<div class="container">

      <form class="" action="/autosupload" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        <input type="file" name="auto"></input>

        <button type="submit">Nieuwe AutovdWeek</button>
      </form>
</div>



		  @include('partials._footer')

	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
    <script src="js/js.js"></script>
		<script src="js/scrolling-nav.js"></script>
		<script src="js/imgsize.js"></script>
	</body>
</html>
