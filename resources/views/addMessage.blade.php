<!doctype html>
<html lang="en">

<head>
    <title>CarRental &mdash; Free Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no') }}">

    <link href="{{ asset('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body>


    <!-- navBar start -->
    @include('includes.indexNavBar')
    <!-- navBar end -->


    <div class="hero inner-page" style="background-image: url('assets/images/hero_1_a.jpg');">

        <div class="container">
            <div class="row align-items-end ">
                <div class="col-lg-5">

                    <div class="intro">
                        <h1><strong>Contact</strong></h1>
                        <div class="custom-breadcrumbs"><a href="{{route('index')}}">Home</a> <span class="mx-2">/</span> <strong>Contact</strong></div>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <div class="site-section bg-light" id="contact-section">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-7 text-center mb-5">
                    <h2>Contact Us Or Use This Form To Rent A Car</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo assumenda, dolorum necessitatibus eius earum voluptates sed!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mb-5">
                    <form action="{{ route('storeMessage') }}" method="post">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-6 mb-4 mb-lg-0">
                                <input type="text" class="form-control" placeholder="First name" name="firstName" value="{{old('firstName')}}">
                                @error ('firstName')
                                {{$message}}
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Last name" name="lastName" value="{{old('lastName')}}">
                                @error ('lastName')
                                {{$message}}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Email address" name="email" value="{{old('email')}}">
                                @error ('email')
                                {{$message}}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <textarea id="" class="form-control" placeholder="Write your message." cols="30" rows="10" name="message">{{old('message')}}</textarea>
                                @error ('message')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 mr-auto">
                                <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Send Message">
                            </div>
                        </div>

                    </form>
                </div>
                <div class="col-lg-4 ml-auto">
                    <div class="bg-white p-3 p-md-5">
                        <h3 class="text-black mb-4">Contact Info</h3>
                        <ul class="list-unstyled footer-link">
                            <li class="d-block mb-3">
                                <span class="d-block text-black">Address:</span>
                                <span>34 Street Name, City Name Here, United States</span>
                            </li>
                            <li class="d-block mb-3"><span class="d-block text-black">Phone:</span><span>+1 242 4942 290</span></li>
                            <li class="d-block mb-3"><span class="d-block text-black">Email:</span><span>info@yourdomain.com</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



    @include('includes.indexFooter')

</body>

</html>