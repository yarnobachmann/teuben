<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Teubenautos | Home</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

    <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
		<link href="css/scrolling-nav.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

		@if (Auth::check())
		@include('partials._navbarAuth')
		@else
		@include('partials._navbar')
		@endif
<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active">
      <img src="img/place2.jpg" style="width:100%" class="img-responsive">
      <div class="container">
        <div class="carousel-caption">

          <p></p>

        </p>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="img/place.jpg" style="width:100%" class="img-responsive">
      <div class="container">
        <div class="carousel-caption">

        </div>
      </div>
    </div>
    <div class="item">
      <img src="img/place1.jpg" style="width:100%" class="img-responsive">
      <div class="container">
        <div class="carousel-caption">

        </div>
      </div>
    </div>
  </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="icon-prev"></span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="icon-next"></span>
  </a>
</div>
<!-- /.carousel -->
<div class="textbalk">

  <h2>Welkom op de website van Teubenauto's</h2>
</div>

<div class="container-fluid text-center">
  <div class="row content">
    <div class="col-sm-2 sidenav hidden-xs">
      <p id="linkslogo"><a href="https://twitter.com/TeubenAutos" target="_blank"><img src="img/links/twitter.gif" alt=""></a></p>
      <p id="linkslogo"><a href="https://www.facebook.com/TeubenAutos" target="_blank"><img src="img/links/facebook.gif" alt=""></a></p>
      <p id="linkslogo"><a href="http://www.belastingdienst.nl/reken/motorrijtuigenbelasting/" target="_blank"><img src="img/links/logobelastingdienst.jpg" alt=""></a></p>
			<p id="linkslogo"><a href="http://www.autopas.nl/" target="_blank"><img src="img/links/naplogo.gif" alt=""></a></p>
			<p id="linkslogo"><a href="https://ovi.rdw.nl/" target="_blank"><img src="img/links/RDW-check.png" alt=""></a></p>
			<p id="linkslogo"><a href="http://www.cargo-export.eu" target="_blank"><img src="img/links/Cargo-Export.png" alt=""></a></p>
			<p id="linkslogo"><a href="http://www.automotivefinancielediensten.nl/" target="_blank"><img src="img/links/afd-lease.jpg" alt=""></a></p>
			<p id="linkslogo"><div id="_yelder_" class="lenen" data-btn="1"></div></p>
    </div>
    <div class="col-sm-8 text-left padding-text">
      <h1>Teubenauto's</h1>
      <p>Wij zijn een familie bedrijf. Sinds 2009 zijn wij gevestigd in ons nieuwe pand aan de Willem Barentszstraat in Emmen met een eigen werkplaats,
				reparatie, onderhoud en uitlees-mogelijkheden. Autobedrijf Henk Teuben en Zonen heeft inmiddels een gevestigde naam in de regio opgebouwd.
				De naam staat synoniem voor een goede en betaalbare auto of bedrijfsauto. Wilt u uw auto of bedrijfsauto verkopen dan kunt u altijd vrijblijvend contact met ons opnemen.</p>
			<hr>
	  </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>auto van de week</p>
				<img src="/autos/autos/autovdweek.jpeg" class="img-responsive" alt="">
      </div>
    </div>
  </div>
</div>
<div class="roete">
	<iframe class="locatie" frameborder="0" src="https://maps.google.nl/maps?f=q&amp;source=s_q&amp;hl=nl&amp;geocode=&amp;q=Willem+Barentszstraat,+7825VZ+Emmen,+Drenthe&amp;sll=52.469397,5.509644&amp;sspn=3.868894,10.964355&amp;ie=UTF8&amp;hq=&amp;hnear=Willem+Barentszstraat,+7825VZ+Emmen,+Drenthe&amp;ll=52.749386,6.938639&amp;spn=0.018184,0.087891&amp;z=14&amp;iwloc=A&amp;output=embed" ></iframe>
</div>

		  @include('partials._footer')

	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scrolling-nav.js"></script>
		<script src="js/imgsize.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('.carousel').carousel({
					interval: 15000
				})
			});
		</script>
		<script type="text/javascript">

    (function () {
      var _yelder = {};
      var _yelderCompany = "TeubenAutos";
      var _yelderCompanyId = "0000000000241927";

      var yelderJS = document.createElement("script");
      yelderJS.type = "text/javascript";
      yelderJS.async = true;
      yelderJS.src = "https://www.yelder.nl/api/calculator-widget/widget.js?c=" + _yelderCompany + "&cid=" + _yelderCompanyId;
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(yelderJS, s);
      })();
   </script>
	</body>
</html>
