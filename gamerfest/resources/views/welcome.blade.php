@extends('layouts.app')
@section('title', __('Gamerfest'))
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<div class="container-fluid">
<div class="row justify-content-center">
     <!-- Favicon -->
     <link href="img/favicon.ico" rel="icon">

<!-- Google Web Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

<!-- Flaticon Font -->
<link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

<!-- Customized Bootstrap Stylesheet -->
<link href="css/style.css" rel="stylesheet">
            @guest

    <!-- Carousel Start -->

    <div class="container">
        <div class="row justify-content-center">

            <div class="col-4">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img  src="https://thumbs2.imgbox.com/ba/19/9WH24Euk_t.jpg" alt="LogFest">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">

                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="https://thumbs2.imgbox.com/84/06/veWsvY6i_t.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-primary rounded" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-primary rounded" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
        </div>
        </div>
    </div>

    <!-- Carousel End -->




    <!-- About Start -->
    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Mapa</h5>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.212023845016!2d-78.5882917497373!3d-0.99887029926778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d4639e3fb9755f%3A0x22fe7f63301b5fee!2sESPE%20-%20Campus%20Belisario%20Quevedo!5e0!3m2!1ses!2sec!4v1671157534952!5m2!1ses!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
    <!-- About End -->
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Get In Touch</h5>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>ESPE - Campus Belisario Quevedo, Latacunga, Ecuador</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+593 999 99999</p>
                        <p><i class="fa fa-envelope mr-2"></i>info@example.com</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-dark text-white">
    <br>

    <div class="container text-center">
  <div class="row">

    <div class="col">


    </div>
    <div class="col order-3">
    </div>
    <div class="col order-4">

    </div>
    <div class="col order-5">

    </div>
    <div class="col order-6">
    </div>
    <div class="col order-7">
    </div>
    <div class="col order-8">
    <a  href="https://instagram.com/gamerfest.ec?igshid=YmMyMTA2M2Y=" target="_blank"><img src="imagenes/instagram.png" alt="" width="45" height="45"></a>
    <p>instagram</p>
    </div>
    <div class="col order-9">
    <a  href="https://ne-np.facebook.com/gamerfest.ec/" target="_blank"><img src="imagenes/facebook.png" alt="" width="45" height="45"></a>
    <p>facebook</p>
    </div>
    <div class="container-fluid text-white py-4 px-sm-3 px-md-5" style="background: #111111;">
        <div class="row">
            <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">
                    &copy; <a class="text-white font-weight-bold" href="#">GAMER FEST</a>.Derechos reservados
                    <a class="text-white font-weight-bold" href="https://htmlcodex.com">Universidad de las Fuerzas Armadas Espe </a>
                </p>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <ul class="nav d-inline-flex">
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Reglas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Términos</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Footer End -->
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
			@else
					Hi {{ Auth::user()->name }}, Welcome back to {{ config('app.name', 'GAMER FEST') }}.
            @endif
</div>
</div>
@endsection
