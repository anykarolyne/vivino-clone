
<!DOCTYPE HTML>
<html>
<head>
    <title>Vivino Clone</title>
    <link href="{{ URL::asset('public/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ URL::asset('public/css/price-range.css') }}" rel="stylesheet" type="text/css" media="all">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ URL::asset('public/js/jquery-1.11.0.min.js') }}"></script>
    <link href="{{ URL::asset('public/css/login.css') }}" rel="stylesheet" type="text/css" media="all">
    <script type="text/javascript" src="{{ URL::asset('public/js/bootstrap.js') }}"></script>
    <!-- Custom Theme files -->
    <link href="{{ URL::asset('public/css/style.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link rel="stylesheet" href="{{ URL::asset('public/css/flexslider.css') }}" type="text/css" media="screen" />
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
    </script>
    <meta name="keywords" content="Wines Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndroidCompatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <!--Google Fonts-->
    <link href="{{ URL::asset('public/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href='//fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    <!--JS for animate-->
    <link href="{{ URL::asset('public/css/animate.css') }}" rel="stylesheet" type="text/css" media="all">
    <script src="{{ URL::asset('public/js/wow.min.js') }}"></script>
    <script>
        new WOW().init();
    </script>
    <!--//end-animate-->
</head>
<body>
<!--banner start here-->
<div class="banner">
      <div class="container">
     <div class="header">
            
                <div class="logo wow fadeInLeft animated" data-wow-delay=".5s">
                    <h1><a href="{{ url('/') }}">Vivino</a></h1>
                </div>
                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <!--/.navbar-header-->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav animated wow fadeInUp animated animated" data-wow-duration="1200ms" data-wow-delay="500ms">
                                <li>
                                    <i class="fa fa-search">
                                    </i>
                                    <input type="text" name="pesquisar" placeholder="Pesquisar">
                                </li>

                                <li style="float: right;">
                                    <a href="{{ url('usuario/admin') }}">
                                    {{{ isset(Auth::user()->login) ? Auth::user()->login : Auth::user()->email }}}
                                    </a>
                                    <a href="{{ url('logout') }}">
                                        <i class="fa fa-sign-out">Sair</i>
                                    </a>
                                </li>
                                 <!--<div class="price-range">price-range
                                    <div class="well">
                                         <h2>Price Range</h2>
                                          <div id="slider-range"></div>
                                          <br>
                                          <b class="pull-left">$
                                              <input size="2" type="text" id="amount_start" name="start_price" 
                                                     value="15" style="border:0px; font-weight: bold; color:green" readonly="readonly" /></b>

                                          <b class="pull-right">$ 
                                              <input size="2" type="text" id="amount_end" name="end_price" value="65"
                                                     style="border:0px; font-weight: bold; color:green" readonly="readonly"/></b> 
                                    </div> 
                                  </div>-->
                            </ul>
                        </div>
                        <!--/.navbar-collapse-->

                    </nav>

                    <!-- search-scripts -->
                        <script src="{{ URL::asset('public/js/classie.js') }}"></script>
                        <script src="{{ URL::asset('public/js/uisearch.js') }}j"></script>
                        

              
      </div>
    </div>
</div>  
<!--content-->
     @yield('content')


<!--footer-->
<div class="footer">
        <div class="container">
            <div class="footer-grids">
                <div class="col-md-3 footer-grid wow fadeInLeft animated" data-wow-delay=".5s">
                    <h3>Extras</h3>
                    <p>Ut rutrum neque a mollis laoreet diam enim feuiat dui nec ulacoper quam felis id diam. Nunc ut tortor ligula eu petiu Pelleesque .</p>
                </div>
                <div class="col-md-3 footer-grid animated wow fadeInUp animated animated" data-wow-duration="1200ms" data-wow-delay="500ms">
                    <h3>Useful Info</h3>
                    <ul>
                        <li><a href="singlepage.html">Hendrerit quam</a></li>
                        <li><a href="singlepage.html">Amet consectetur </a></li>
                        <li><a href="singlepage.html">Iquam hendrerit</a></li>
                        <li><a href="singlepage.html">Hendrerit quam</a></li>
                        <li><a href="singlepage.html">Amet consectetur </a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-grid animated wow fadeInUp animated animated" data-wow-duration="1200ms" data-wow-delay="500ms">
                    <h3>Social</h3>
                    <ul class="social-icons1">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-grid wow fadeInRight animated" data-wow-delay=".5s">
                    <h3>Contact Us</h3>
                    <p>Pelleesque conquat dignissim lacus quis altrcies.</p>
                    <div class="footer-grid-address">
                        <p>Tel.800-255-9999</p>
                        <p>Fax: 1234 568</p>
                        <p>Email: <a class="email-link" href="mailto:info@example.com">Example.com</a></p>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="copy-right animated wow fadeInUp animated animated" data-wow-duration="1200ms" data-wow-delay="500ms">
                <p>© 2016 Wines. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
            </div>
        </div>
    </div>
<!--footer-->
</body>
</html>