<!DOCTYPE html>
<html lang="en">
  <head>
    <title>E-Liber</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic:400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('Front/fonts/icomoon/style.css')}}">
   
    <link rel="stylesheet" href="{{asset('Front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('Front/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('Front/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('Front/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('Front/css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{asset('Front/css/bootstrap-datepicker.css')}}">

    <link rel="stylesheet" href="{{asset('Front/fonts/flaticon/font/flaticon.css')}}">

    <link rel="stylesheet" href="{{asset('Front/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('Front/css/rangeslider.css')}}">

    <link rel="stylesheet" href="{{asset('Front/css/style.css')}}">
    
  </head>
  <body>
  <div class="site-wrap">

<div class="site-mobile-menu">
  <div class="site-mobile-menu-header">
    <div class="site-mobile-menu-close mt-3">
      <span class="icon-close2 js-menu-toggle"></span>
    </div>
  </div>
  <div class="site-mobile-menu-body"></div>
</div>

<header class="site-navbar container py-0 " role="banner">

  <!-- <div class="container"> -->
    <div class="row align-items-center">
      
      <div class="col-6 col-xl-2">
        <h1 class="mb-0 site-logo"><a href="#" class="text-white mb-0">E-Liber</a></h1>
      </div>
    <!--  <img src="{{asset('Front/images/logo2.png')}}" width="100%" height="150%"></img>!-->
      <div class="col-12 col-md-10 d-none d-xl-block">
        <nav class="site-navigation position-relative text-right" role="navigation">

          <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
            <li><a href="#about">A propos</a></li>
            <li class="has-children">
              <a href="#">Accès rapide</a>
              <ul class="dropdown">
              <li><a href="{{route('login')}}">L'administration</a></li>
               
                
              </ul>
            </li>
             <li class="ml-xl-3 login"><a href="#contact"><span class="border-left pl-xl-4"></span>Contactez-nous</a></li>

           
          </ul>
        </nav>
      </div>


      <div class="d-inline-block d-xl-none ml-auto py-3 col-6 text-right" style="position: relative; top: 3px;">
        <a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a>
      </div>

    </div>
  <!-- </div> -->
  
</header>

  @yield('content')

 


  
  <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-6">
                <h2 class="footer-heading mb-4">CONTACT</h2>
                <a href="#">Contactez-nous</a>
              </div>
              
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">LIENS UTILES</h2>
                <ul class="list-unstyled">
                  <li><a href="#">Les filières</a></li>
                  <li><a href="#">L'administration</a></li>
                  <li><a href="#">Espace étudiant</a></li>
                  
                </ul>
              </div>
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">MENTIONS LEGALES</h2>
                <!--<a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                -->
                <ul class="list-unstyled">
                  <li><a href="#">Nos mentions légales</a></li>
                  <li><a href="#">La politique de confidentialité</a></li>
                </ul>

              </div>
            </div>
          </div>
          
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> E-Liber | Par Jean-Baptiste KOUGBENOU 
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="{{asset('Front/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('Front/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('Front/js/jquery-ui.js')}}"></script>
  <script src="{{asset('Front/js/popper.min.js')}}"></script>
  <script src="{{asset('Front/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('Front/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('Front/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('Front/js/jquery.countdown.min.js')}}"></script>
  <script src="{{asset('Front/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('Front/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('Front/js/aos.js')}}"></script>
  <script src="{{asset('Front/js/rangeslider.min.js')}}"></script>

  <script src="{{asset('Front/js/main.js')}}"></script>
    
  </body>
</html>