<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>WikBook</title>

    <!-- Favicons -->
    <link href="{{asset('assets/img/book.png')}}" rel="icon" style="width: 30%; height: 30%;">
    {{-- <link href="{{asset('assets/img/admin.jpg')}}" rel="apple-touch-icon"> --}}

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/user/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('assets/user/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/user/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/user/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/user/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/user/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('assets/user/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/user/css/style.css')}}" rel="stylesheet">

    <link href="{{asset('assets/css/user.css')}}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo">
                <a href="index.html">
                    <img class="img-profile rounded-circle" src="{{asset('assets/img/book.png')}}" style="width: 20%;">
                    WikBook
                </a>
            </h1>

            <nav id="navbar" class="navbar" style="margin-right: 1%">
                <ul>
                    <ul>
                        <li><a class="getstarted scrollto">{{ Auth::user()->nama }}</a></li>
                        <li><a href="/logout" class="getstarted scrollto">Logout</a></li>
                    </ul>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-4 text-center">
                    <h1>WIKBOOK</h1>
                </div>
            </div>
            {{-- <div class="text-center">
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
      </div> --}}
        </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        {{-- @foreach($libraries as $library) --}}
        <section id="team-pplg-x-1" class="team section-bg">
            <div class="container justify-content-center" data-aos="fade-up" style="margin-left:5%;">
                <div class="main-container" style="margin-top: 1%;">
                  {{-- <h2>WikBook</h2> --}}
                </div>
                
                <div class="row" style="align-items: center; width:205%;">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <div class="card">
                        <div class="card-body">
                            <img src="{{asset('storage/image/' . $libraries->image)}}" class="img-fluid" alt="" style="width: 20%;">
                            
                            <div class="data" style="margin-left:25%; margin-top:-25%;">
                                <h5 class="card-title">Judul: {{$libraries['title']}}</h5>
                                <p class="card-text">Penulis: {{$libraries['writer']}}</p>
                                <p class="card-text">Penerbit: {{$libraries['publisher']}}</p>
                                <p class="card-text">No ISBN: {{$libraries['isbn']}}</p>   
                                <p class="card-text"><b>Synopsis:</b> <br> {{$libraries['synopsis']}}</p>                                           
                                {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                                <div class="button" style="margin-top:2%;">
                                    <a href="{{route('wikbook.readbookprint', $libraries->id)}}" class="btn btn-warning">Download E-Book</a> <br>
                                    <a href="/wikbook/dashboardUser/user" class="btn btn-danger mt-2" style="margin-left:4%;">back</a>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>

        </section>
        {{-- @endforeach --}}

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="">
            <div class="">
                <div class="">
                </div>
            </div>
        </div>
        <div class="container d-md-flex py-4">
            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>OnePage</span></strong>. All Rights Reserved
                </div>
            </div>
            {{-- <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div> --}}
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{asset('assets/user/vendor/purecounter/purecounter_vanilla.js')}}"></script>
    <script src="{{asset('assets/user/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('assets/user/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/user/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('assets/user/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/user/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/user/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('assets/user/js/main.js')}}"></script>
    <script src="{{asset('assets/js/user.js')}}"></script>


</body>

</html>
