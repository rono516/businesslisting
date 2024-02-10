<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Colorlib">
    <meta name="description" content="#">
    <meta name="keywords" content="#">
    <!-- Favicons -->
    <link rel="shortcut icon" href="#">
    <!-- Page Title -->
    <title>Listing &amp; Directory Website Template</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">
    <!-- Simple line Icon -->
    <link rel="stylesheet" href="{{ asset('assets/css/simple-line-icons.css') }}">
    <!-- Themify Icon -->
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <!-- Hover Effects -->
    <link rel="stylesheet" href="{{ asset('assets/css/set1.css') }}">
    <!-- Swipper Slider -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <!--============================= HEADER =============================-->
    <div class="dark-bg sticky-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="{{ url('/') }}">Business Listing</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="icon-menu"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" id="navbarDropdownMenuLink"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Explore
                                        <span class="icon-arrow-down"></span>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        @php
                                            $businessCategories = App\Models\Category::all();
                                        @endphp

                                        @foreach ($businessCategories as $bs)
                                            <a class="dropdown-item"
                                                href="{{ route('businesses', $bs->id) }}">{{ $bs->name }}</a>
                                        @endforeach
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" id="navbarDropdownMenuLink1"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Listing
                                        <span class="icon-arrow-down"></span>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="#">Add new Listing</a>
                                        <a class="dropdown-item" href="#">My businesses</a>
                                    </div>
                                </li>

                                <li class="nav-item active">
                                    <a class="nav-link" href="#">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Blog</a>
                                </li>
                                @auth
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">{{ Auth::user()->name }}</a>
                                    </li>
                                @endauth
                                <li><a href="#" class="btn btn-outline-light top-btn"><span
                                            class="ti-plus"></span> Add Listing</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <section class="light-bg booking-details_wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12 responsive-wrap">
                    <div class="booking-checkbox_wrap ">


                        <form action="{{ route('business.store') }}" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="business_name">Business Name</label>
                                    <input type="text" name="business_name" class="form-control" id="business_name"
                                        placeholder="ABC Technologies">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="business_location">Business Location</label>
                                    <input type="text" class="form-control" id="business_location"
                                        name="business_location" placeholder="Pangani, Nairobi">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="business_phone_number">Business Phone Number</label>
                                <input type="text" class="form-control" name="business_phone_number"
                                    id="business_phone_number" placeholder="+254792009556">
                            </div>
                            <input type="hidden" value="{{ auth()->user()->id }}" name="user_id">
                            <div class="form-group">
                                <label for="website_link">Address 2</label>
                                <input type="text" class="form-control" id="website_link" name="website_link"
                                    placeholder="https://example.com/">
                            </div>
                            <div class="form-group">
                                <label for="category_id">Category</label>
                                <select id="category_id" class="form-control" name="category_id">
                                    @foreach ($businessCategories as $bs)
                                        <option value="{{ $bs->id }}" selected>{{ $bs->name }}</option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="justify-content-center">
                                <button type="submit" class="btn btn-primary">Create Business Listing</button>

                            </div>
                        </form>

                        {{-- End business Form --}}
                    </div>
                </div>

            </div>
        </div>
    </section>
    <footer class="main-block dark-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright &copy; 2018 Listing. All rights reserved by <a href="#"
                                target="_blank">US</a></p>
                        <ul>
                            <li><a href="#"><span class="ti-facebook"></span></a></li>
                            <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
                            <li><a href="#"><span class="ti-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>




    <!-- jQuery, Bootstrap JS. -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Magnific popup JS -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script>
    <!-- Swipper Slider JS -->
    <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 3,
            slidesPerGroup: 3,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
    <script>
        if ($('.image-link').length) {
            $('.image-link').magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        }
        if ($('.image-link2').length) {
            $('.image-link2').magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        }
    </script>
</body>

</html>
