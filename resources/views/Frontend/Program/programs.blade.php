@extends('Frontend.layout.school-master')
@section("body-content")

<section id="banner" style="background: url({{ asset('frontend/site-images/programbanner.jpeg') }});">
    <div class="container">
        <div class="banner-text">
            <h1>programs</h1>
        </div>
    </div>
</section>

<!-- ################################### banner section ends ###################################-->

<!-- ################################### program section starts ################################### -->

<section id="program">
    <div class="container">
        <!-- <div class="row">
            <div class="col-lg-12">
                <div class="sec-heading">
                    <h1 class="title">our Programs</h1>
                </div>
            </div>
        </div> -->
        <div class="row mt-5">
            <div class="col-lg-3">
                <!-- Vertical Navigation -->
                <div class="nav flex-sm-column flex-md-row nav-pills"
                    id="v-pills-tab" role="tablist"
                    aria-orientation="vertical">
                    <a class="nav-link nav-program active"
                        id="v-pills-tab1"
                        data-bs-toggle="pill"
                        href="#tab1" role="tab" aria-controls="tab1"
                        aria-selected="true">
                        <div class="program-wrapper">
                            <div class="program-content">
                                <h1>Primary Level</h1>
                            </div>
                        </div>
                    </a>
                    <a class="nav-link nav-program" id="v-pills-tab2"
                        data-bs-toggle="pill"
                        href="#tab2" role="tab" aria-controls="tab2"
                        aria-selected="false">
                        <div class="program-wrapper">
                            <div class="program-content">
                                <h1>Basic Level</h1>
                            </div>
                        </div>
                    </a>
                    <a class="nav-link nav-program" id="v-pills-tab3"
                        data-bs-toggle="pill"
                        href="#tab3" role="tab" aria-controls="tab3"
                        aria-selected="false">
                        <div class="program-wrapper">
                            <div class="program-content">
                                <h1>Secondary Level</h1>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-8">
                <!-- Tab Content -->
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="tab1"
                        role="tabpanel"
                        aria-labelledby="v-pills-tab1">
                        <div class="tab-items">
                            <h5>Primary Level</h5>
                            <p>At Modern Preparatory secondary Boarding School, we believe that every child's journey begins with a strong foundation. Discover a nurturing environment where curiosity flourishes and young minds grow. With engaging activities and personalized attention, we lay the foundation for lifelong learning. Join us for a journey filled with joy, creativity, and endless possibilities!</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab2"
                        role="tabpanel"
                        aria-labelledby="v-pills-tab2">
                        <div class="tab-items">
                            <h5>Primary Level</h5>
                            <p>Welcome to Modern Preparatory Boarding School's Primary Level!
                                At Modern Preparatory, we foster a dynamic learning environment where every child's potential is nurtured and celebrated. Our Primary Level curriculum is designed to inspire curiosity, critical thinking, and a love for learning.
                                With dedicated educators and innovative teaching methods, we empower students to explore diverse subjects, develop essential skills, and build confidence in their  abilities. From mathematics and language arts to science, social studies, and beyond, our comprehensive curriculum ensures a ell-rounded education that prepares students for success in higher grades and in life.</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab3"
                        role="tabpanel"
                        aria-labelledby="v-pills-tab3">
                        <div class="tab-items">
                            <h5>Secondary Level</h5>
                            <p>Our Secondary Level program is designed to provide students with a comprehensive and rigorous education that prepares them for the challenges and opportunities of the future. At Modern Preparatory, we strive to empower students to excel academically, cultivate critical thinking skills, and become well-rounded individuals ready to make a positive impact in the world.Through a diverse range of academic subjects, including mathematics, sciences, humanities, languages, and the arts, students are challenged to explore new ideas, think independently, and engage deeply with their learning. Our experienced and dedicated faculty members are committed to providing a supportive and enriching learning environment where students can thrive and reach their full potential.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
