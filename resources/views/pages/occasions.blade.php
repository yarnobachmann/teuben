<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Teubenautos | Occasions</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/stylesoccasions.css" rel="stylesheet">
    <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
		<link href="css/scrolling-nav.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


		<script type="text/javascript">
		function setIframeHeight(id) {
    var ifrm = document.getElementById(id);
    var doc = ifrm.contentDocument? ifrm.contentDocument:
        ifrm.contentWindow.document;
    ifrm.style.visibility = 'hidden';
    ifrm.style.height = "10px"; // reset to minimal height ...
    // IE opt. for bing/msn needs a bit added or scrollbar appears
    ifrm.style.height = getDocHeight( doc ) + 4 + "px";
    ifrm.style.visibility = 'visible';
}
		</script>

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

		   <h2><i class="fa fa-car" aria-hidden="true"></i>Occasions</h2>
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
				 		<div class="col-sm-8 text-left">
						<iframe src="https://voorraad.autodatawheelerdelta.nl/cgi/voertuigen.cgi?site=voorraadlijst&v=10014" border="0" frameborder="0" marginheight="20" marginwidth="30" name="I1" onload="window.parent.parent.scrollTo(0,275)"  width="100%" ></iframe>


						</div>
				 		<div class="col-sm-2 sidenav">
				 			<div class="well">
				 				<p>auto van de week</p>
				 				<img src="/autos/autos/autovdweek.jpeg" class="img-responsive" alt="">
				 			</div>
				 		</div>
		   </div>
		 </div>

		  @include('partials._footer')

	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
    <script src="js/js.js"></script>
		<script src="js/scrolling-nav.js"></script>
		<script src="js/imgsize.js"></script>
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
