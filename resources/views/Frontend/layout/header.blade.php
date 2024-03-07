<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Modern Prep. Sec School || {{ !empty($header_title) ? $header_title : '' }}</title>
        {{-- {{ asset('frontend/') }} --}}
        <link rel="shortcut icon" href="{{ asset('dashboard/dist/img/apple-touch-icon.png') }}" type="image/x-icon">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet"
            href="{{ asset('frontend/assets/owlCarousel/css/owl.carousel.min.css') }}">
        <link rel="stylesheet"
            href="{{ asset('frontend/assets/owlCarousel/css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/splide/css/splide.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/all.min.css') }}">
        <link rel="stylesheet" href="assets/lightbox/css/lightbox.css">
        <link rel="stylesheet" href="{{ asset('frontend/assets/lightbox/css/lightbox.css') }}">
    </head>

    <body>

        <!-- ###################################  navbar code starts   ##################################### -->

        <section id="top-nav" class="d-none d-lg-block">
            {{-- {{ dd($profile) }} --}}
            <div class="container">
                <div
                    class="top-nav-content d-flex justify-content-between align-items-center">
                    <div
                        class="top-left d-flex justify-content-center align-items-center">
                        <div
                            class="top-link d-flex justify-content-center align-items-center">
                            <div class="link-icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="link-det">
                                <a href="mailto:{{ $profile->email }}">{{ $profile->email }}</a>
                            </div>
                        </div>
                        <div
                            class="top-link d-flex justify-content-center align-items-center">
                            <div class="link-icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="link-det">
                                <a href="tel:9762514888">(+977) {{ $profile->contact_no }}</a>
                            </div>
                        </div>
                        <div
                            class="top-link d-flex justify-content-center align-items-center">
                            <div class="link-icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="link-det">
                                <p>{{ $profile->address }}</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="top-right d-flex justify-content-between align-items-center">
                        <div
                            class="top-link d-flex justify-content-center align-items-center">
                            <div class="link-icon">
                                <i class="fa-solid fa-clock"></i>
                            </div>
                            <div class="link-det">
                                <p>Sunday-Friday / 9AM - 5PM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <nav class="navbar navbar-dark navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    {{-- <img src="{{ asset('frontend/assets/images/logo.png') }}" class="img-fluid"
                        alt="logo"> --}}
                        {{-- <img src="{{ asset('frontend/assets/logo/mpsbsLogo.png') }}" class="img-fluid"
                        alt="logo"> --}}
                        <img src="{{ asset('frontend/assets/logo/again.png') }}" class="img-fluid"
                        alt="logo">
                </a>
                <button class="navbar-toggler" type="button"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasDarkNavbar"
                    aria-controls="offcanvasDarkNavbar">
                    <span class="navbar-toggler-icon"></span>
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1"
                    id="offcanvasDarkNavbar"
                    aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title"
                            id="offcanvasDarkNavbarLabel">
                            <img src="{{ asset('frontend/assets/images/logo.png') }}" class="img-fluid"
                                alt="logo">
                        </h5>
                        <button type="button" class="btn-close btn-close-dark"
                            data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page"
                                    href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#"
                                    role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    About
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('site.about') }}">About
                                            Us</a></li>
                                    <li><a class="dropdown-item" href="{{ route('site.message') }}">Message
                                            from Adminstration</a></li>
                                    <li><a class="dropdown-item" href="{{ route('site.mission.Vision') }}">Mission
                                            and Vision</a></li>
                                    <li><a class="dropdown-item" href="{{ route('site.teams') }}">Our
                                            Team</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('site.programs') }}">Classes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('site.admission') }}">Admission</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#"
                                    role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Resources
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                        href="{{ route('site.events') }}">Events</a></li>
                                    <li><a class="dropdown-item"
                                            href="{{ route('news-blogs') }}">News and Blogs</a></li>
                                    <li><a class="dropdown-item"
                                            href="{{ route('site.notices') }}">Notices</a></li>
                                            <li class="nav-item">
                                                <a class="dropdown-item" href="{{ route('site.archive') }}">MPSBS Archive</a>
                                              </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                {{-- <a class="nav-link" href="{{ route('site.gallery') }}">Gallery</a> --}}
                                <a class="nav-link" href="{{ route('show.gallery') }}">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('site.contact') }}">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
