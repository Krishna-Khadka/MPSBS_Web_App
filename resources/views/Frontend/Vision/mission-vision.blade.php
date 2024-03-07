    @extends('Frontend.layout.school-master')
    @section("body-content")
        <!-- ################################### banner section starts ################################### -->

        <section id="banner" style="background: url({{ asset('frontend/site-images/missionvisionbanner.jpg') }});">
            <div class="container">
                <div class="banner-text">
                    <h1>mission,vision & values</h1>
                </div>
            </div>
        </section>

        <!-- ################################### banner section ends ###################################-->

        <!--********************** about section starts **********************-->

        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="sec-title">
                            <h2>mission & vision</h2>
                        </div>
                        <div class="sec-content">
                            <p>{!! $profile->mission_vision !!}</p>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="images">
                            <img src="{{ asset('frontend/site-images/missionvission.jpeg') }}" class="img-fluid"
                                alt="aboutus_image1">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--********************** about section ends **********************-->

        <!-- ################################### vision section starts ################################### -->

        <section id="vision">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="vision-left">
                            <div class="sec-title">
                                <h2>our commitment</h2>
                            </div>
                            <div class="commit">
                                <p>As a College, we are committed to building a
                                    caring community which:</p>
                                <ul>
                                    <li>Ensures that a Catholic and Salesian
                                        ethos underpins all aspects of College
                                        life within an atmosphere of respect for
                                        all</li>
                                    <li>Promotes initiative, a spirit of enquiry
                                        and a desire to strive for academic
                                        excellence through innovative and
                                        supportive teaching</li>
                                    <li>Provides students and staff with every
                                        opportunity to develop all aspects of
                                        each individual</li>
                                    <li>Practises wise governance, strategic
                                        leadership and fair processes; and</li>
                                    <li>Works in partnership with parents,
                                        families, past pupils, parishes,
                                        educational and ecclesiastical
                                        institutions and other civic agencies.</li>
                                </ul>
                                <div class="accordion accordion-flush"
                                    id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button
                                                class="accordion-button collapsed"
                                                type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapseOne"
                                                aria-expanded="false"
                                                aria-controls="flush-collapseOne">
                                                Vision
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne"
                                            class="accordion-collapse collapse"
                                            data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">A
                                                dynamic, joy-filled Catholic
                                                learning community, Salesian
                                                College inspires all boys to
                                                strive for excellence in the
                                                spirit of Don Bosco.</div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button
                                                class="accordion-button collapsed"
                                                type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapseTwo"
                                                aria-expanded="false"
                                                aria-controls="flush-collapseTwo">
                                                Mission
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTwo"
                                            class="accordion-collapse collapse"
                                            data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">Salesian
                                                College Chadstone is a Catholic
                                                School for boys in the Salesian
                                                tradition. We welcome all boys
                                                and their families, celebrate
                                                diversity and promote
                                                relationships built on mutual
                                                respect. All in the community
                                                are treated as valued partners
                                                in laying the foundation for
                                                lifelong learning. We celebrate
                                                the achievements of all within
                                                an environment of joy and
                                                optimism.</div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button
                                                class="accordion-button collapsed"
                                                type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapseThree"
                                                aria-expanded="false"
                                                aria-controls="flush-collapseThree">
                                                Values
                                            </button>
                                        </h2>
                                        <div id="flush-collapseThree"
                                            class="accordion-collapse collapse"
                                            data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <ul>
                                                    <li>Integrity</li>
                                                    <li>Respect</li>
                                                    <li>Belonging</li>
                                                    <li>Joy</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="images">
                            <img src="{{ asset('frontend/assets/images/vision1.jpg') }}"
                                class="img-fluid" alt>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ################################### vision section ends ################################### -->
        @endsection
