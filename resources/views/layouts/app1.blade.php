<!DOCTYPE html>
<html lang="en">
<head>
        <style type="text/css">
        .rating {
   direction: rtl;
}
.rating a {
   color: #aaa;
   text-decoration: none;
   font-size: 3em;
   transition: color .4s;
}
.rating a:hover,
.rating a:focus,
.rating a:hover ~ a,
.rating a:focus ~ a {
   color: orange;
   cursor: pointer;
}

.vertical-line{
        border-left: 2px solid #000;
        display: inline-block;
        height: 100px;
        margin: 30px 10px;
      }

    .padding
{
width:750px;
height:400px;
padding: 50px 50px 50px 150px;
}

    .padding1
{
width:500px;
height:400px;
padding: 30px 50px 50px 0px;
}

    .pass
{
  margin-left:150px;
}

        </style>

        
    <title>Sama School</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="front/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="front/css/animate.css">

    <link rel="stylesheet" href="front/css/owl.carousel.min.css">
    <link rel="stylesheet" href="front/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="front/css/magnific-popup.css">

    <link rel="stylesheet" href="front/css/aos.css">

    <link rel="stylesheet" href="front/css/ionicons.min.css">

    <link rel="stylesheet" href="front/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="front/css/jquery.timepicker.css">


    <link rel="stylesheet" href="front/css/flaticon.css">
    <link rel="stylesheet" href="front/css/icomoon.css">
    <link rel="stylesheet" href="front/css/style.css">
       <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">  
</head>
<body class="goto-here">
<div class="py-1 bg-warning">
    <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
            <div class="col-lg-12 d-block">
                <div class="row d-flex">
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                        <span class="text"> Appeller Le 25 2200 2200</span>
                    </div>
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                        <span class="text">ISIGO@hotmail.com</span>
                    </div>
                    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
                        <span class="text">A quel endroit Yango pourrait vous aider à vous rendre aujourd'hui ?</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="#">ISI GO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="/inscription" class="nav-link">A Propos</a></li>
                <span class="vertical-line"></span>
                <li class="nav-item active"><a href="#" class="nav-link">Passagers</a>
                <p>Comment ça marche?</p>
                <p>Nos prix & engagements</p>
                </li>
                <span class="vertical-line"></span>
                <li class="nav-item active"><a href="#" class="nav-link">Chauffeur</a>
                <p>Comment ça marche</p>
                </li>
                <span class="vertical-line"></span>
                <li class="nav-item active"><a href="#" class="nav-link">Bussiness</a>
                <p>Comment ça marche</p>
                <p>Nos forfaits</p>
                </li>
                <span class="vertical-line"></span>
                <li class="nav-item active"><a href="{{URL::to('/inscrire')}}" class="nav-link">Inscription</a>
                <p> Compte Passager</p>
                <p>Compte Chauffeur</p>
                <p>Compte Bussiness</p>
                </li>
                <span class="vertical-line"></span>
                <li class="nav-item active"><a href="{{URL::to('/connecter')}}" class="nav-link">Se connecter</a></li>
              <!--  <li class="nav-item active"><a href="{{URL::to('/inscrire')}}" class="nav-link">S'inscrire</a></li> ----->
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

{{-- Start content--}}


    @yield('contenu')

{{-- End content--}}




<footer class="ftco-footer ftco-section" style="background-color:yellow">
    <div class="container">
        <div class="row">
            <div class="mouse">
                <a href="#" class="mouse-icon">
                    <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
                </a>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">FASTER</h2>
                    <p>Téléchargez l’application Faster </p>
                    <>disponible sur </p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                        <li class="ftco-animate"><a href="#"><span class="fab fa-google-play"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-5">
                    <h2 class="ftco-heading-2">Navigation</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-2 d-block">ACCUEIL</a></li>
                        <li><a href="#" class="py-2 d-block">Passagers</a></li>
                        <li><a href="#" class="py-2 d-block">Chauffeurs</a></li>
                        <li><a href="#" class="py-2 d-block">Business</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Faster</h2>
                    <div class="d-flex">
                        <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
                            <li><a href="#" class="py-2 d-block">Mon Compte</a></li>
                            <li><a href="#" class="py-2 d-block">Mes &amp; Courses</a></li>
                            <li><a href="#" class="py-2 d-block">CGV</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Contact</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><a href="#"><span class="icon icon-envelope"></span><span class="text">contactFaster.com</span></a></li>
                            <li><a href="#"><span class="icon icon-facebook"></span>    <span class="text">&emsp;&emsp;&emsp;facebook</span></a></li>
                            <br>
                            <li><a href="#"><span class="icon icon-instagram"></span> <span class="text">&emsp;&emsp;&emsp;instagram</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i>Faster
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="front/js/jquery.min.js"></script>
<script src="front/js/jquery-migrate-3.0.1.min.js"></script>
<script src="front/js/popper.min.js"></script>
<script src="front/js/bootstrap.min.js"></script>
<script src="front/js/jquery.easing.1.3.js"></script>
<script src="front/js/jquery.waypoints.min.js"></script>
<script src="front/js/jquery.stellar.min.js"></script>
<script src="front/js/owl.carousel.min.js"></script>
<script src="front/js/jquery.magnific-popup.min.js"></script>
<script src="front/js/aos.js"></script>
<script src="front/js/jquery.animateNumber.min.js"></script>
<script src="front/js/bootstrap-datepicker.js"></script>
<script src="front/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="front/js/google-map.js"></script>
<script src="front/js/main.js"></script>
@yield('script')

</body>
</html>

