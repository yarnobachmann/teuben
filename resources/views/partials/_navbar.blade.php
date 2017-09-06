<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="{{ url("/") }}"><img src="/img/logo/teuben_logo.png" alt="" class="logo_teuben min-img"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                <li class="hidden">
                    <a class="page-scroll" href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" id="activeFinanciering" href="{{ url("financiering") }}">Financiering</a>
                </li>
                <li>
                    <a class="page-scroll" id="activeOccasions" href="{{ url("occasions") }}"><i class="fa fa-car" aria-hidden="true"></i> Occasions</a>
                </li>
                <li>
                    <a class="page-scroll" id="activeBedrijfswagens" href="{{ url("bedrijfswagens") }}"><i class="fa fa-truck" aria-hidden="true"></i>Bedrijfswagens</a>
                </li>
                <li>
                    <a class="page-scroll" id="activeFotoalbum" href="{{ url("albums") }}">Fotoalbum</a>
                </li>
                <li>
                    <a class="page-scroll" id="activeContact" href="{{ url("/contact") }}">Contact</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right login">
              <a href="{{ url('login') }}" class="btn btn-danger ">Login</a>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
