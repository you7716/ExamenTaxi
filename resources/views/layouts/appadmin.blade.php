@if (Session::has('admin'))
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicon -->
        <link href="{{ asset('img/favicon.ico') }}" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
            rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{ asset('back/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('back/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('back/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('back/css/style.css') }}" rel="stylesheet">
    </head>

    <body style="" >
        <div class="container-fluid position-relative d-flex p-0">
            <!-- Spinner Start -->
            <div id="spinner"
                class="show bg-light position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
                <div class="spinner-border text-light" style="width: 3rem; height: 3rem;" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
            <!-- Spinner End -->


            <!-- Sidebar Start -->
            <div class="sidebar pe-4 pb-3">
                <nav class="navbar bg-secondary navbar-dark">
                    <a href="#" class="navbar-brand mx-4 mb-3">
                        <h3 class="text-primary"><i class="fa fa-taxi me-2"></i>ISIGO</h3>
                    </a>
                    <div class="d-flex align-items-center ms-4 mb-4">
                        <div class="position-relative">
                            <img class="rounded-circle" src="{{asset('back/img/user.jpg')}}" alt=""
                                style="width: 40px; height: 40px;">
                            <div
                                class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                            </div>
                        </div>
                        <div class="ms-3">
                            <h6 class="mb-0"></h6>
                            <span>Admin</span>
                        </div>
                    </div>
                    <div class="navbar-nav w-100">
                        <a href="{{URL::to('admin')}}" class="nav-item nav-link active"><i
                                class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                    class="fa fa-keyboard me-2"></i>Formulaires</a>
                            <div class="dropdown-menu bg-transparent border-0">
                                <a href="{{URL::to('ajoutertype')}}" class="dropdown-item">Ajouter Marque</a>
                                <a href="{{URL::to('ajoutreferentiel')}}" class="dropdown-item">Ajouter Reference Voiture</a>
                                <a href="{{URL::to('ajouterformation')}}" class="dropdown-item">Ajouter Informations Driver</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                    class="fa fa-id-card me-2"></i>Affichages</a>
                            <div class="dropdown-menu bg-transparent border-0">
                                <a href="{{URL::to('types')}}" class="dropdown-item">Marques</a>
                                <a href="{{URL::to('referentiels')}}" class="dropdown-item">Reference Voiture</a>
                                <a href="{{URL::to('formations')}}" class="dropdown-item">Informations Drivers</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- Sidebar End -->


            <!-- Content Start -->
            <div class="content bg-white" >
                <nav class="navbar navbar-expand bg-info navbar-dark sticky-top px-4 py-0">
                    <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                        <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                    </a>
                    <a href="#" class="sidebar-toggler flex-shrink-0">
                        <i class="fa fa-bars"></i>
                    </a>
                    <div class="navbar-nav align-items-center ms-auto">
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                <img class="rounded-circle me-lg-2" src="{{asset('back/img/user.jpg')}}" alt=""
                                    style="width: 40px; height: 40px;">
                                <span class="d-none d-lg-inline-flex"></span>
                            </a>
                            <div
                                class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                                <a href="{{ URL::to('/logout') }}" class="dropdown-item">Se déconnecter</a>
                            </div>
                        </div>
                    </div>
                </nav>
                @yield('contenu')

                <!-- Sales Chart End -->
                <!-- Footer Start -->
                <div class="container-fluid pt-4 px-4">
                    <div class="bg-secondary rounded-top p-4">
                        <div class="row">
                            <div class="col-12 col-sm-6 text-center text-sm-start">
                                &copy; <a href="#">ISIGO</a>, All Right Reserved.
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Footer End -->
            </div>

        </div>   

        <!-- JavaScript Libraries -->
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('back/lib/chart/chart.min.js') }}"></script>
        <script src="{{ asset('back/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('back/lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('back/lib/owlcarousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('back/lib/tempusdominus/js/moment.min.js') }}"></script>
        <script src="{{ asset('back/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
        <script src="{{ asset('back/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('back/js/main.js') }}"></script>
        <script src="{{ asset('back/js/bootbox.min.js') }}"></script>
        <script src="{{ asset('back/js/data-table.js') }}"></script>

        <script>
            $(document).on("click", "#delete", function(e) {
                e.preventDefault();
                var link = $(this).attr("href");
                bootbox.confirm("Voulez-vous vraiment supprimer cet element ?", function(confirmed) {
                    if (confirmed) {
                        window.location.href = link;
                    };
                });
            });
        </script>
    </body>
@yield('scripts')
    </html>
@endif

