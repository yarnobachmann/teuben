<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Teubenautos | Contact</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/stylescontact.css" rel="stylesheet">
    <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
		<link href="css/scrolling-nav.css" rel="stylesheet">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	</head>
	<body>

		 @include('partials._navbar')

<div class="header">

</div>

<div class="textbalk">

  <p>text text</p>
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
    </div>
    <div class="col-sm-5 text-left">
      <h1>Mail Ons</h1>
        <hr>
        <h3>Teuben Auto's</h3><p>
        Willem Barentszstraat 12, 7825 VZ  Emmen <br>
        Tel: 0591-635439  fax: 0591-634993 - Mobiel: 06-54767362 <br>
        e-mail: info@teubenautos.nl <br>
        <br>
        Hebt u een vraag of wilt u dat wij contact met u opnemen, vult u dan onderstaand formulier in.</p>
        <hr>
        <form action="{{ url('contact') }}" method="POST">
           {{ csrf_field() }}
            <div class="form-group">
                <label name="email">Email:</label>
                <input id="email" name="email" class="form-control">
            </div>

            <div class="form-group">
                <label name="subject">Onderwerp:</label>
                <input id="subject" name="subject" class="form-control">
            </div>

            <div class="form-group">
                <label name="message">Berricht:</label>
                <textarea id="message" name="message" class="form-control" placeholder="Typ hier je berricht..."></textarea>
            </div>

            <input type="submit" value="Stuur E-mail" class="btn btn-danger">
        </form>

    </div>

      <div class="col-md-4 col-md-offset-1 contact sidenav">
        <div class="well">

            <div class="werk-uren">
                <h2>Openings tijden</h2>
								<hr>
                <ul class="list-unstyled opening-tijd">
                    <li>Zondag: <span class="pull-right">Gesloten</span></li>
                    <li>Maandag: <span class="pull-right">08:00-17:00</span></li>
                    <li>Dinsdag: <span class="pull-right">08:00-17:00</span></li>
                    <li>Woensdag: <span class="pull-right">08:00-17:00</span></li>
                    <li>Donderdag: <span class="pull-right">08:00-17:00</span></li>
                    <li>Vrijdag: <span class="pull-right">08:00-17:00</span></li>
                    <li>Zaterdag: <span class="pull-right">09:00-17:00</span></li>
                </ul>
            </div>
            <hr>
            <div>
                <h4>Contact buiten de openingstijden</h4>
                <ul class="list-unstyled">
                    <li>Hendrik Teuben:<span class="pull-right">0031-654767362</span></li>
                    <li>Harrie Teuben:<span class="pull-right">0031-625082189</span></li>
                    <li>Herman Teuben:<span class="pull-right">0031-646405237</span></li>
                </ul>
            </div>
            <hr>
            <div>
                <h4>Auto's en Bedrijfsauto's</h4>
                <ul class="list-unstyled">
                    <li>Hendrik Teuben:<span class="pull-right">0031-654767362</span></li>
                    <li>Harrie Teuben:<span class="pull-right">0031-625082189</span></li>
                    <li>Herman Teuben:<span class="pull-right">0031-646405237</span></li>
                </ul>
            </div>
            <hr>
            <div>
                <h4>Werkplaats</h4>
                <ul class="list-unstyled">
                    <li>Jan Potze:<span class="pull-right">0591-635439</span></li>
                </ul>
            </div>
            <hr>
            <div>
                <h4>Pony's, Paarden en Tractoren</h4>
                <ul class="list-unstyled">
                    <li>Harrie Teuben:<span class="pull-right">0031-625082189</span></li>
                </ul>
            </div>
            <hr>
            <div>
                <h4>Metaal en Oud IJzer</h4>
                <ul class="list-unstyled">
                    <li>Bennie Teuben:<span class="pull-right">0031-648971201</span></li>
                    <li>Harrie Teuben:<span class="pull-right">0031-625082189</span></li>
                </ul>
            </div>

        </div>

    </div>

  </div>
</div>

<div class="roete">
	<iframe class="locatie" frameborder="0" src="http://maps.google.nl/maps?f=q&amp;source=s_q&amp;hl=nl&amp;geocode=&amp;q=Willem+Barentszstraat,+7825VZ+Emmen,+Drenthe&amp;sll=52.469397,5.509644&amp;sspn=3.868894,10.964355&amp;ie=UTF8&amp;hq=&amp;hnear=Willem+Barentszstraat,+7825VZ+Emmen,+Drenthe&amp;ll=52.749386,6.938639&amp;spn=0.018184,0.087891&amp;z=14&amp;iwloc=A&amp;output=embed" ></iframe>
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
