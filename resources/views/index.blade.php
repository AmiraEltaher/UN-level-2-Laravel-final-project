<!doctype html>
<html lang="en">

<head>
    <title>CarRental &mdash; Free Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="{{asset('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/aos.css') }}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css') }}">

</head>

<body>


    <div class="site-wrap" id="home-section">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>



        <!-- navBar start -->
        @include('includes.navBar')
        <!-- navBar end -->

        <div class="hero" style="background-image: url('assets/images/hero_1_a.jpg');">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-10">

                        <div class="row mb-5">
                            <div class="col-lg-7 intro">
                                <h1><strong>Rent a car</strong> is within your finger tips.</h1>
                            </div>
                        </div>

                        <form class="trip-form">

                            <div class="row align-items-center">

                                <div class="mb-3 mb-md-0 col-md-3">
                                    <select name="" id="" class="custom-select form-control">
                                        <option value="">Select Type</option>
                                        <option value="">Ferrari</option>
                                        <option value="">Toyota</option>
                                        <option value="">Ford</option>
                                        <option value="">Lamborghini</option>
                                    </select>
                                </div>
                                <div class="mb-3 mb-md-0 col-md-3">
                                    <div class="form-control-wrap">
                                        <input type="text" id="cf-3" placeholder="Pick up" class="form-control datepicker px-3">
                                        <span class="icon icon-date_range"></span>

                                    </div>
                                </div>
                                <div class="mb-3 mb-md-0 col-md-3">
                                    <div class="form-control-wrap">
                                        <input type="text" id="cf-4" placeholder="Drop off" class="form-control datepicker px-3">
                                        <span class="icon icon-date_range"></span>
                                    </div>
                                </div>
                                <div class="mb-3 mb-md-0 col-md-3">
                                    <input type="submit" value="Search Now" class="btn btn-primary btn-block py-3">
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>



        <div class="site-section">
            <div class="container">
                <h2 class="section-heading"><strong>How it works?</strong></h2>
                <p class="mb-5">Easy steps to get you started</p>

                <div class="row mb-5">
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="step">
                            <span>1</span>
                            <div class="step-inner">
                                <span class="number text-primary">01.</span>
                                <h3>Select a car</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, laboriosam!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="step">
                            <span>2</span>
                            <div class="step-inner">
                                <span class="number text-primary">02.</span>
                                <h3>Fill up form</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, laboriosam!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="step">
                            <span>3</span>
                            <div class="step-inner">
                                <span class="number text-primary">03.</span>
                                <h3>Payment</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, laboriosam!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 mx-auto">
                        <a href="#" class="d-flex align-items-center play-now mx-auto">
                            <span class="icon">
                                <span class="icon-play"></span>
                            </span>
                            <span class="caption">Video how it works</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 text-center order-lg-2">
                        <div class="img-wrap-1 mb-5">
                            <img src="{{asset('assets/images/feature_01.png') }}" alt="Image" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-4 ml-auto order-lg-1">
                        <h3 class="mb-4 section-heading"><strong>You can easily avail our promo for renting a car.</strong></h3>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, explicabo iste a labore id est quas, doloremque veritatis! Provident odit pariatur dolorem quisquam, voluptatibus voluptates optio accusamus, vel quasi quidem!</p>

                        <p><a href="#" class="btn btn-primary">Meet them now</a></p>
                    </div>
                </div>
            </div>
        </div>



        <div class="site-section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <h2 class="section-heading"><strong>Car Listings</strong></h2>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>


                <div class="row">
                    @foreach($cars->where('active', 1)->reverse()->take(6) as $car)
                    <div class="col-md-6 col-lg-4 mb-4">

                        <div class="listing d-block  align-items-stretch">
                            <div class="listing-img h-100 mr-4">

                                <img src="{{asset('assets/admin/images/'.$car->image) }}" alt="Image" class="img-fluid">
                            </div>
                            <div class="listing-contents h-100">
                                <h3>{{$car->carTitle}}</h3>
                                <div class="rent-price">
                                    <strong>${{$car->price}}</strong><span class="mx-1">/</span>day
                                </div>
                                <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                                    <div class="listing-feature pr-4">
                                        <span class="caption">Luggage:</span>
                                        <span class="number">{{$car->luggage}}</span>
                                    </div>
                                    <div class="listing-feature pr-4">
                                        <span class="caption">Doors:</span>
                                        <span class="number">{{$car->doors}}</span>
                                    </div>
                                    <div class="listing-feature pr-4">
                                        <span class="caption">Passenger:</span>
                                        <span class="number">{{$car->passengers}}</span>
                                    </div>
                                </div>
                                <div>
                                    <p>{{$car->content}}</p>
                                    <p><a href="{{route('single')}}" class="btn btn-primary btn-sm">Rent Now</a></p>
                                </div>
                            </div>

                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <h2 class="section-heading"><strong>Features</strong></h2>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 mb-5">
                        <div class="service-1 dark">
                            <span class="service-1-icon">
                                <span class="icon-home"></span>
                            </span>
                            <div class="service-1-contents">
                                <h3>Lorem ipsum dolor</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
                                <p class="mb-0"><a href="#">Learn more</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="service-1 dark">
                            <span class="service-1-icon">
                                <span class="icon-gear"></span>
                            </span>
                            <div class="service-1-contents">
                                <h3>Lorem ipsum dolor</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
                                <p class="mb-0"><a href="#">Learn more</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="service-1 dark">
                            <span class="service-1-icon">
                                <span class="icon-watch_later"></span>
                            </span>
                            <div class="service-1-contents">
                                <h3>Lorem ipsum dolor</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
                                <p class="mb-0"><a href="#">Learn more</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-5">
                        <div class="service-1 dark">
                            <span class="service-1-icon">
                                <span class="icon-verified_user"></span>
                            </span>
                            <div class="service-1-contents">
                                <h3>Lorem ipsum dolor</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
                                <p class="mb-0"><a href="#">Learn more</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="service-1 dark">
                            <span class="service-1-icon">
                                <span class="icon-video_library"></span>
                            </span>
                            <div class="service-1-contents">
                                <h3>Lorem ipsum dolor</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
                                <p class="mb-0"><a href="#">Learn more</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="service-1 dark">
                            <span class="service-1-icon">
                                <span class="icon-vpn_key"></span>
                            </span>
                            <div class="service-1-contents">
                                <h3>Lorem ipsum dolor</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
                                <p class="mb-0"><a href="#">Learn more</a></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="site-section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <h2 class="section-heading"><strong>Testimonials</strong></h2>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="row">
                    @foreach($testimonials->where('published', 1)->reverse()->take(3) as $testimonial)

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="testimonial-2">
                            <blockquote class="mb-4">
                                <p>{{ $testimonial->content}}</p>
                            </blockquote>
                            <div class="d-flex v-card align-items-center">

                                <img src="{{asset('assets/admin/images/'.$testimonial->image) }}" alt="Image" class="img-fluid mr-3">
                                <div class="author-name">
                                    <span class="d-block">{{$testimonial->name}}</span>
                                    <span>{{ $testimonial->position}}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
        </div>

        <div class="site-section bg-primary py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 mb-4 mb-md-0">
                        <h2 class="mb-0 text-white">What are you waiting for?</h2>
                        <p class="mb-0 opa-7">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
                    </div>
                    <div class="col-lg-5 text-md-right">
                        <a href="#" class="btn btn-primary btn-white">Rent a car now</a>
                    </div>
                </div>
            </div>
        </div>


        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <h2 class="footer-heading mb-4">About Us</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                        <ul class="list-unstyled social">
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-8 ml-auto">
                        <div class="row">
                            <div class="col-lg-3">
                                <h2 class="footer-heading mb-4">Quick Links</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3">
                                <h2 class="footer-heading mb-4">Resources</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3">
                                <h2 class="footer-heading mb-4">Support</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3">
                                <h2 class="footer-heading mb-4">Company</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-5 mt-5 text-center">
                    <div class="col-md-12">
                        <div class="border-top pt-5">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </footer>

    </div>

    <script src="{{asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{asset('assets/js/popper.min.js') }}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{asset('assets/js/jquery.sticky.js') }}"></script>
    <script src="{{asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{asset('assets/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{asset('assets/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{asset('assets/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{asset('assets/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{asset('assets/js/aos.js') }}"></script>

    <script src="{{asset('assets/js/main.js') }}"></script>

</body>

</html>