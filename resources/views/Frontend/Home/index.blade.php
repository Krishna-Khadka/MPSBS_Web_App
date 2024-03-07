@extends('Frontend.layout.school-master')

@section('body-content')
    <section id="hero">
        <div class="owl-carousel owl-theme">

            <div class="item">
                <div class="image-container">
                    <img src="{{ asset('frontend/site-images/drgtour.jpg') }}" alt="Slide 2">
                </div>
                <div class="slide-content">
                    <h1>More Than Just Studying drg tour</h1>
                    <p>Besides providing you with new knowledge and training in chosen disciplines, our university also
                        gives you an opportunity to benefit from spending your free time by playing</p>
                    <div class="slide-button d-flex justify-content-center">
                        <a href="#" class="btn-slider btn-slider1">know about us</a>
                        <a href="#" class="btn-slider btn-slider2">contact us</a>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="image-container">
                    <img src="{{ asset('frontend/site-images/students.jpg') }}" alt="Slide 1">
                </div>
                <div class="slide-content">
                    <h1>Creating Your Future</h1>
                    <p>Besides providing you with new knowledge and training in chosen disciplines, our university also
                        gives you an opportunity to benefit from spending your free time by playing</p>
                    <div class="slide-button d-flex justify-content-center">
                        <a href="#" class="btn-slider btn-slider1">know about us</a>
                        <a href="#" class="btn-slider btn-slider2">contact us</a>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="image-container">
                    <img src="{{ asset('frontend/site-images/missionvisionbanner.jpg') }}" alt="Slide 2">
                </div>
                <div class="slide-content">
                    <h1>More Than Just Studying</h1>
                    <p>Besides providing you with new knowledge and training in chosen disciplines, our university also
                        gives you an opportunity to benefit from spending your free time by playing</p>
                    <div class="slide-button d-flex justify-content-center">
                        <a href="#" class="btn-slider btn-slider1">know about us</a>
                        <a href="#" class="btn-slider btn-slider2">contact us</a>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="image-container">
                    <img src="{{ asset('frontend/site-images/aboutusindex.jpeg') }}" alt="Slide 3">
                </div>
                <div class="slide-content">
                    <h1>Providing Higher Education 2</h1>
                    <p>Besides providing you with new knowledge and training in chosen disciplines, our university also
                        gives you an opportunity to benefit from spending your free time by playing</p>
                    <div class="slide-button d-flex justify-content-center">
                        <a href="#" class="btn-slider btn-slider1">know about us</a>
                        <a href="#" class="btn-slider btn-slider2">contact us</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="image-container">
                    <img src="{{ asset('frontend/site-images/about2.jpeg') }}" alt="Slide 3">
                </div>
                <div class="slide-content">
                    <h1>Providing Higher Education</h1>
                    <p>Besides providing you with new knowledge and training in chosen disciplines, our university also
                        gives you an opportunity to benefit from spending your free time by playing</p>
                    <div class="slide-button d-flex justify-content-center">
                        <a href="#" class="btn-slider btn-slider1">know about us</a>
                        <a href="#" class="btn-slider btn-slider2">contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ################################### hero-section ends ################################### -->

    <!-- ************************************************************************************************************************ -->



    <!-- ################################### home-about section ends ################################### -->

    <!-- ************************************************************************************************************************ -->
    {{-- home-event section starts  --}}
    <section id="heading-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="sec-subTitle">
                        <h6>upcoming events and notices</h6>
                    </div>
                    <div class="sec-title">
                        <h2>Discover Our Upcoming Events and Notices</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="news-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="latest-news-wrapper">
                        <div class="sec-subTitle">
                            <h6>keep updated</h6>
                        </div>
                        <div class="sec-title">
                            <h2>upcoming events</h2>
                        </div>
                        <div class="row gy-5">

                            @if ($count > 0)
                                @foreach ($events as $event)
                                    <div class="col-lg-4 col-sm-12">
                                        <div class="news-wrapper">
                                            <a href="{{ route('site.event.details', $event->slug) }}">
                                                <div class="news-images">
                                                    {{-- <img
                                            src="{{ asset('frontend/assets/images/news1.png') }}"
                                            class="img-fluid"
                                            alt="newsImages"> --}}
                                                    <img src="{{ asset('storage/' . $event->image_url) }}" class="img-fluid"
                                                        alt="newsImages">
                                                </div>
                                                <div class="news-content">
                                                    <div
                                                        class="news-content-top d-flex justify-content-between align-items-center">
                                                        <h6 class="news-categ">{{ $event->EventCategory->title }}</h6>
                                                        <span><i
                                                                class="fa-solid fa-calendar-days"></i>{{ \Carbon\Carbon::parse($event->event_date)->format('F j, Y') }}</span>
                                                        {{-- {{ \Carbon\Carbon::parse($event['event_date'])->format('F j, Y') }} --}}
                                                    </div>
                                                    <h6 class="news-head">{{ $event->title }}</h6>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="col-12">
                                    <div class="alert alert-info" role="alert">
                                        No upcoming events recently.
                                    </div>
                                    {{-- View All Events Button --}}
                                    <div class="text-center mt-3">
                                        <a href="#" class="btn btn-outline-primary">View All Events</a>
                                    </div>
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="notice-wrapper">
                        <div class="sec-subTitle">
                            <h6>keep updated</h6>
                        </div>
                        <div class="sec-title">
                            <h2>MPSBS notices</h2>
                        </div>
                        <div class="sec-content">
                            <p>Welcome to Modern Preparatory Secondary Boarding School! Below, You'll find our latest notices and updates:</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="notice-box">
                                    <ul>
                                        @foreach ($notices as $notice)
                                            <li class="notice-list d-flex align-items-center">
                                                <div class="notice-date">
                                                    <span
                                                        class="notice-month">{{ \Carbon\Carbon::parse($notice->published_date)->format('M') }}</span>
                                                    <span
                                                        class="notice-day">{{ \Carbon\Carbon::parse($notice->published_date)->format('d') }}</span>
                                                </div>
                                                <div class="notice-info">
                                                    <div class="notice-title">
                                                        <h6><a
                                                                href="{{ route('site.notice.details', $notice->slug) }}">{{ $notice->title }}</a>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <p class="more-link">
                                        <a href="{{ route('site.notices') }}"
                                            class="btn btn-outline-primary text-capitalize">all
                                            notices <i class="fas fa-arrow-right ml-2"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- home-event section ends --}}


    <!-- ################################### home-about section starts ################################### -->

    <section id="home-about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="sec-subTitle">
                        <h6>you are welcome</h6>
                    </div>
                    <div class="sec-title">
                        <h2>Discover our Top School Child Benefits</h2>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="about-box">
                                <i class="fa-solid fa-building-columns"></i>
                                <h5>school life</h5>
                                <p>overall in here</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="about-box">
                                <i class="fa-solid fa-calendar-days"></i>
                                <h5>events</h5>
                                <p>school events</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="about-box">
                                <i class="fa-solid fa-volleyball"></i>
                                <h5>sports club</h5>
                                <p>all about sports</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="about-box">
                                <i class="fa-solid fa-people-arrows"></i>
                                <h5>social clubs</h5>
                                <p>social responsibilities</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ################################### home-message section starts ################################### -->

    <section id="home-message" style="background: url({{ asset('frontend/assets/images/home-aboutBG.jpg') }})">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6">
                    <div class="sec-title">
                        <h2>About <span class="text-danger">Modern Prep..</span></h2>
                    </div>
                    <div class="sec-content">
                        <p>
                            {{ Str::limit($profile->about_us, 450, '...') }}
                        </p>
                    </div>
                    <div class="message">
                        <span><i class="fa-solid fa-quote-left"></i></span>
                        <p>{{ Str::limit($profile->message, 100, '...') }}</p>
                    </div>
                    <div class="author">
                        <h5>Mani Kumar Poudel</h5>
                        <h6>Principal MPSBS</h6>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="images">
                        <img src="{{ asset('frontend/site-images/aboutimage.jpeg') }}" class="img-fluid" alt>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ################################### home-message section ends ################################### -->

    <!-- ************************************************************************************************************************ -->

    <!-- ################################### home-news section starts ################################### -->

    <section id="heading-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="sec-subTitle">
                        <h6>latest news</h6>
                    </div>
                    <div class="sec-title">
                        <h2>Discover Our Recent News and Blogs</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="home-news-content">
        <div class="container">
            <div class="row news-counter">
                <div class="col-lg-8 col-sm-12">
                    <div class="row gy-5">
                        @foreach ($posts as $post)
                            <div class="col-lg-12">
                                <div class="home-news-grid d-flex flex-column flex-sm-row">
                                    <div class="news-image">
                                        <img src="{{ asset('storage/' . $post->image_url) }}" class="img-fluid" alt>
                                    </div>

                                    <div class="news-content">
                                        <div class="news-top">
                                            <span class="badge text-bg-success">{{ $post->category->title }}</span>
                                            {{-- <span><i class="fa-solid fa-user"></i>
                                        {{ $post->category->title }}</span> --}}
                                        </div>
                                        <div class="news-bottom">
                                            <a href="{{ route('post_detail', $post->slug) }}">
                                                <h5 class="news-title">{{ $post['title'] }}</h5>
                                            </a>
                                            <p class="news-data">{{ Str::limit($post->description, 80, '......') }}</p>
                                        </div>
                                        <hr>
                                        <div class="news-post">
                                            <p>posted in:
                                                <span>{{ \Carbon\Carbon::parse($post->published_at)->format('F j, Y') }}</span>
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 home-counter">
                    <div class="sec-subTitle">
                        <h6>modern preparatory fact</h6>
                    </div>
                    <hr>
                    <div class="row gy-4">
                        <div class="col-lg-12">
                            <div class="counter-div">
                                <div class="counter-title">
                                    <span class="num" id="studentsCounter">0</span>
                                    <span class="plus">+</span>
                                </div>
                                <div class="counter-body">
                                    <h5>students</h5>
                                    <p>Have joined our school community, bringing vibrant energy and diverse talents to our school!.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="counter-div">
                                <div class="counter-title">
                                    <span class="num" id="teachersCounter">0</span>
                                    <span class="plus">+</span>
                                </div>
                                <div class="counter-body">
                                    <h5>teachers</h5>
                                    <p>Dedicated educators committed to
                                        excellence.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="counter-div">
                                <div class="counter-title">
                                    <span class="num" id="clubsCounter">0</span>
                                    <span class="plus">+</span>
                                </div>
                                <div class="counter-body">
                                    <h5>social clubs</h5>
                                    <p>making students socially responsible.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="counter-div">
                                <div class="counter-title">
                                    <span class="num" id="yearsCounter">0</span>
                                    <span class="plus">+</span>
                                </div>
                                <div class="counter-body">
                                    <h5>years</h5>
                                    <p>Providing quality education for over
                                        two
                                        decades.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ################################### home-news section ends ################################### -->

    <!-- ************************************************************************************************************************ -->

    <!-- ################################### faculty section starts ################################### -->

    <section id="faculty" style="background: url({{ asset('frontend/assets/images/banner1.jpg') }})">
        <div class="container">
            <div class="row gy-3">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="faculty-box fac1">
                        <i class="fa-solid fa-child"></i>
                        <h3 class="fac-head">Pre-Primary Level</h3>
                        @php
                            $prePrimaryLevel = "At Modern Preparatory secondary Boarding School, we believe that every child's journey begins with a strong foundation. Discover a nurturing environment where curiosity flourishes and young minds grow. With engaging activities and personalized attention, we lay the foundation for lifelong learning. Join us for a journey filled with joy, creativity, and endless possibilities!";

                            $primaryLevel = "Welcome to Modern Preparatory Boarding School's Primary Level!
                            At Modern Preparatory, we foster a dynamic learning environment where every child's potential is nurtured and celebrated. Our Primary Level curriculum is designed to inspire curiosity, critical thinking, and a love for learning.
                            With dedicated educators and innovative teaching methods, we empower students to explore diverse subjects, develop essential skills, and build confidence in their  abilities. From mathematics and language arts to science, social studies, and beyond, our comprehensive curriculum ensures a ell-rounded education that prepares students for success in higher grades and in life.";

                            $secondaryLevel = "Our Secondary Level program is designed to provide students with a comprehensive and rigorous education that prepares them for the challenges and opportunities of the future. At Modern Preparatory, we strive to empower students to excel academically, cultivate critical thinking skills, and become well-rounded individuals ready to make a positive impact in the world.Through a diverse range of academic subjects, including mathematics, sciences, humanities, languages, and the arts, students are challenged to explore new ideas, think independently, and engage deeply with their learning. Our experienced and dedicated faculty members are committed to providing a supportive and enriching learning environment where students can thrive and reach their full potential.";
                        @endphp
                        <p class="fac-body">{{ Str::limit($prePrimaryLevel, 270, '...') }}</p>
                        <a href="#" class="btn1">learn more</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="faculty-box fac1">
                        <i class="fa-solid fa-child"></i>
                        <h3 class="fac-head">Primary Level</h3>
                        <p class="fac-body">{{ Str::limit($primaryLevel, 350, '...') }}</p>
                        <a href="#" class="btn1">learn more</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="faculty-box fac1">
                        <i class="fa-solid fa-pencil"></i>
                        <h3 class="fac-head">Secondary Level</h3>
                        <p class="fac-body">{{ Str::limit($secondaryLevel, 280, '...') }}</p>
                        <a href="#" class="btn1">learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ################################### faculty section ends ################################### -->

    <!-- ************************************************************************************************************************ -->

    <!-- ################################### club section starts ################################### -->

    <section id="club">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="sec-subTitle">
                        <h6>Our Clubs</h6>
                    </div>
                    <div class="sec-title">
                        <h2>Why Modern Preparatory is best Solution for
                            Education</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sec-content">
                        <p>Discover the Vibrant Club Culture at Modern Preparatory!
                            At Modern Preparatory, we believe that education extends far beyond the classroom walls. That's why we offer a diverse range of clubs and extracurricular activities designed to engage students in meaningful experiences outside of their academic studies.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="splide horizontal-splide club-splide" role="group"
                        aria-label="Splide Basic HTML Example">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <div class="club-box">
                                        <div class="club-box-icon">
                                            <img src="{{ asset('frontend/assets/icons/Social.png') }}" class="img-fluid"
                                                alt>
                                        </div>
                                        <div class="club-box-content">
                                            <h5 class="club-title">Social
                                                Services</h5>
                                            <p class="club-desc">Students in
                                                social activities</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="club-box">
                                        <div class="club-box-icon">
                                            <img src="{{ asset('frontend/assets/icons/environment.png') }}"
                                                class="img-fluid" alt>
                                        </div>
                                        <div class="club-box-content">
                                            <h5 class="club-title">Environment
                                                Sanitation</h5>
                                            <p class="club-desc">Students in
                                                social activities</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="club-box">
                                        <div class="club-box-icon">
                                            <img src="{{ asset('frontend/assets/icons/travel.png') }}" class="img-fluid"
                                                alt>
                                        </div>
                                        <div class="club-box-content">
                                            <h5 class="club-title">Travel &
                                                Tourism</h5>
                                            <p class="club-desc">Students in
                                                social activities</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="club-box">
                                        <div class="club-box-icon">
                                            <img src="{{ asset('frontend/assets/icons/fitness.png') }}" class="img-fluid"
                                                alt>
                                        </div>
                                        <div class="club-box-content">
                                            <h5 class="club-title">Sports &
                                                Fitness</h5>
                                            <p class="club-desc">Students in
                                                social activities</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="club-box">
                                        <div class="club-box-icon">
                                            <img src="{{ asset('frontend/assets/icons/Social.png') }}" class="img-fluid"
                                                alt>
                                        </div>
                                        <div class="club-box-content">
                                            <h5 class="club-title">Social
                                                Service</h5>
                                            <p class="club-desc">Students in
                                                social activities</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="club-box">
                                        <div class="club-box-icon">
                                            <img src="{{ asset('frontend/assets/icons/Social.png') }}" class="img-fluid"
                                                alt>
                                        </div>
                                        <div class="club-box-content">
                                            <h5 class="club-title">Social
                                                Service</h5>
                                            <p class="club-desc">Students in
                                                social activities</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ################################### club section ends ################################### -->

    <!-- ************************************************************************************************************************ -->

    <!-- ################################### service section starts ################################### -->

    <section id="service">
        <div class="container">
            <div class="row gy-5">
                <div class="sec-subTitle">
                    <h6>what we offer</h6>
                </div>
                <div class="sec-title">
                    <h2>our <span class="text-danger">services</span></h2>
                </div>
                <div class="col-lg-4">
                    <div class="service-box">
                        <div class="service-head d-flex align-items-center">
                            <div class="service-icon">
                                <img width="60" height="60"
                                    src="{{ asset('frontend/assets/icons/teacher.png') }}" class="img-fluid"
                                    alt="service-image-1">
                            </div>
                            <div class="service-title">
                                <h5>experienced teachers</h5>
                            </div>
                        </div>
                        <div class="service-body">
                            <p>At Modern Preparatory School, our experienced teachers bring passion and expertise to every lesson. With personalized support and a commitment to excellence, they inspire students to excel academically and grow personally.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-box">
                        <div class="service-head d-flex align-items-center">
                            <div class="service-icon">
                                <img width="60" height="60" src="{{ asset('frontend/assets/icons/bus.png') }}"
                                    class="img-fluid" alt="service-image-1">
                            </div>
                            <div class="service-title">
                                <h5>transportation</h5>
                            </div>
                        </div>
                        <div class="service-body">
                            <p>Our modern buses, driven by experienced staff, ensure safe and efficient travel for students. With convenient routes and flexible arrangements, getting to school is stress-free.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-box">
                        <div class="service-head d-flex align-items-center">
                            <div class="service-icon">
                                <img width="60" height="60" src="{{ asset('frontend/assets/icons/event.png') }}"
                                    class="img-fluid" alt="service-image-1">
                            </div>
                            <div class="service-title">
                                <h5>events</h5>
                            </div>
                        </div>
                        <div class="service-body">
                            <p>From thrilling sports showdowns to vibrant cultural festivals and inspiring academic showcases, there's something for everyone at our school.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-box">
                        <div class="service-head d-flex align-items-center">
                            <div class="service-icon">
                                <img width="60" height="60"
                                    src="{{ asset('frontend/assets/icons/activity.png') }}" class="img-fluid"
                                    alt="service-image-1">
                            </div>
                            <div class="service-title">
                                <h5>physical activity</h5>
                            </div>
                        </div>
                        <div class="service-body">
                            <p>At Modern Preparatory, we prioritize the health and well-being of our students through engaging physical activities. From energetic sports sessions to fun-filled outdoor games and refreshing yoga sessions, we encourage everyone to stay active and enjoy the benefits of a healthy lifestyle.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-box">
                        <div class="service-head d-flex align-items-center">
                            <div class="service-icon">
                                <img width="60" height="60" src="{{ asset('frontend/assets/icons/heart.png') }}"
                                    class="img-fluid" alt="service-image-1">
                            </div>
                            <div class="service-title">
                                <h5>love & care</h5>
                            </div>
                        </div>
                        <div class="service-body">
                            <p>Our school is more than just academics—it's a place where every student and staff member is embraced with love and care. From supportive teachers to a nurturing community, we prioritize your well-being and happiness.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-box">
                        <div class="service-head d-flex align-items-center">
                            <div class="service-icon">
                                <img width="60" height="60"
                                    src="{{ asset('frontend/assets/icons/fitness.png') }}" class="img-fluid"
                                    alt="service-image-1">
                            </div>
                            <div class="service-title">
                                <h5>annual sports</h5>
                            </div>
                        </div>
                        <div class="service-body">
                            <p>Get ready to unleash your competitive spirit and showcase your athletic prowess at our annual sports events. From exhilarating soccer matches to fast-paced football games and everything in between, our diverse range of sports activities offers something for everyone.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ################################### service section starts ################################### -->

    <!-- ************************************************************************************************************************ -->

    <!-- ################################### news-box section starts ################################### -->




    <!-- ################################### testimonial section starts ################################### -->

    <section id="heading-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="sec-subTitle">
                        <h6>testimonials</h6>
                    </div>
                    <div class="sec-title">
                        <h2>Discover Our Latest Testimonials</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="splide testimonial-splide" role="group" aria-label="Splide Basic HTML Example">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <div class="review-box">
                                        <div class="review-top">
                                            <div class="review-star">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                            </div>
                                            <p>
                                                Duis aute irure dolor in reprehenderit in voluptate
                                                velit esse cillum dolore pariatur. Excepteur
                                                cupidatatproident, culpa qui officia deserunt mollit
                                            </p>
                                        </div>
                                        <div class="review-bottom d-flex align-items-center gap-4">
                                            <div class="review-img">
                                                <img src="assets/images/sir.jpg" class="img-fluid" alt="" />
                                            </div>
                                            <div class="review-info">
                                                <h5>Ram Rai</h5>
                                                <p>MPSBS Student</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="review-box">
                                        <div class="review-top">
                                            <div class="review-star">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                            </div>
                                            <p>
                                                Duis aute irure dolor in reprehenderit in voluptate
                                                velit esse cillum dolore pariatur. Excepteur
                                                cupidatatproident, culpa qui officia deserunt mollit
                                            </p>
                                        </div>
                                        <div class="review-bottom d-flex align-items-center gap-4">
                                            <div class="review-img">
                                                <img src="assets/images/sir.jpg" class="img-fluid" alt="" />
                                            </div>
                                            <div class="review-info">
                                                <h5>Ram Rai</h5>
                                                <p>Student</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="review-box">
                                        <div class="review-top">
                                            <div class="review-star">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                            </div>
                                            <p>
                                                Duis aute irure dolor in reprehenderit in voluptate
                                                velit esse cillum dolore pariatur. Excepteur
                                                cupidatatproident, culpa qui officia deserunt mollit
                                            </p>
                                        </div>
                                        <div class="review-bottom d-flex align-items-center gap-4">
                                            <div class="review-img">
                                                <img src="assets/images/sir.jpg" class="img-fluid" alt="" />
                                            </div>
                                            <div class="review-info">
                                                <h5>Ram Rai</h5>
                                                <p>Student</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="review-box">
                                        <div class="review-top">
                                            <div class="review-star">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                            </div>
                                            <p>
                                                Duis aute irure dolor in reprehenderit in voluptate
                                                velit esse cillum dolore pariatur. Excepteur
                                                cupidatatproident, culpa qui officia deserunt mollit
                                            </p>
                                        </div>
                                        <div class="review-bottom d-flex align-items-center gap-4">
                                            <div class="review-img">
                                                <img src="assets/images/sir.jpg" class="img-fluid" alt="" />
                                            </div>
                                            <div class="review-info">
                                                <h5>Ram Rai</h5>
                                                <p>Student</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ################################### testimonial section ends ################################### -->
@endsection
