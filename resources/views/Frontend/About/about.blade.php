@extends('Frontend.layout.school-master')
@section("body-content")

        <!-- ################################### banner section starts ################################### -->

        <section id="banner" style="background: url({{ asset('frontend/site-images/schoolbanner.jpg') }} );">
            <div class="container">
                <div class="banner-text">
                    <h1>about us</h1>
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
                            <h2>About <span class="text-danger">Modern Prep..</span></h2>
                        </div>
                        <div class="sec-content">
                            <p>{{ $profile->about_us }}</p>

                        </div>
                    </div>
                    <div class="col-lg-6" style="position: relative;">
                        <div class="images" style="width: 500px;height: 370px;">
                            <img src="{{ asset('frontend/site-images/WhatsApp Image 2024-01-26 at 5.05.53 PM.jpeg') }}"
                                alt="aboutus_image1" style="width: 100%; height: 100%; object-fit: cover; border-radius:5px;">
                        </div>
                        <div class="images d-none d-md-block" style="width: 455px;height: 323px; position: absolute; bottom: 37px; left: 170px;">
                            <img src="{{ asset('frontend/site-images/about2.jpeg') }}"
                                alt="aboutus_image1" style="width: 100%; height: 100%; object-fit: cover; border-radius:8px;">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--********************** about section ends **********************-->

        <!-- ********************** choose section starts ***************************** -->

        <section id="choose">
            <div class="container">
                <div class="choose-head text-center">
                    <div class="sec-title">
                        <h2>why choose us</h2>
                    </div>
                    <div class="sec-content">
                        <p>{{ $profile->why_choose_us }}</p>
                    </div>
                </div>
                <div class="choose-div">
                    <div class="row mt-5">
                        <div class="col-lg-12">
                            <div class="row g-0 align-items-center">
                                <div class="col-lg-6">
                                    <div class="images">
                                        <img src="{{ asset('frontend/site-images/aboutsinglepage.jpeg') }}" alt>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="choose-right">
                                        <div class="sec-title">
                                        <h2>excellent teachers</h2>
                                    </div>
                                    <div class="sec-content mt-3">
                                        <p>Empowering Education with Excellent Teachers at Modern Preparatory!

                                            At Modern Preparatory, we pride ourselves on our exceptional faculty members who are experts in their respective fields. Our teachers bring passion, dedication, and years of experience to the classroom, creating an enriching learning environment where students thrive.

                                            With their deep knowledge and innovative teaching methods, our educators inspire a love for learning and challenge students to reach new heights of academic achievement. They go above and beyond to support individual learning needs, fostering a culture of inclusivity and empowerment.

                                            Beyond academics, our teachers serve as mentors, role models, and champions for our students' success. They provide guidance, encouragement, and personalized attention, helping students develop essential life skills and prepare for future endeavors.</p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 align-items-center">
                                <div class="col-lg-6">
                                    <div class="choose-left">
                                        <div class="sec-title">
                                        <h2>Academic Activities</h2>
                                    </div>
                                    <div class="sec-content mt-3">
                                        <p>Within the CDC, Nepal framework, the school organized result-oriented academic activities that enable children in understanding the courses designed for them in a subtle manner with timely exposures to practicals and other comprehearine tools supporting in the attainmeat of the content knowledge that children are expected to process. Periodic counseling, practical classes , tours and examinations, face-to-face with pragimatic personalities are some of the main academic activities that children may persue during their course of learning in the school. Similarly, the evaluation tools applied for the minute assessments of children’s periodic progress play a main role in ensuring progressive learning environment. “Know your students individually “ is the principal instruction issued to every member of the teaching staff for ensuring day-to-day progress in children’s other major activities</p>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="images">
                                        <img src="{{ asset('frontend/site-images/academicActivity.jpeg') }}" alt>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 align-items-center">
                                <div class="col-lg-6">
                                    <div class="images">
                                        <img src="{{ asset('frontend/site-images/houseActivity.jpeg') }}" alt>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="choose-right">
                                        <div class="sec-title">
                                        <h2>House Activities & Club Activities</h2>
                                    </div>
                                    <div class="sec-content mt-3">
                                        <p><b>House Activities</b> <br>
                                            The school organizes different House activities through which children may inculocate the ……. of healthy competitions among themselves. ECAs and CCAs are organized on periodic bases and children are free to choose their field of interest so that they may enhance the feelings of competitors …………. <br><br>
                                            <b>Club Activities</b> <br>
                                            The school has formed different clubs and students may persue service oriented activities with the feeling of competition. Mainly charitable activities are conducted by different clubs managed by teacher ……4 and students executives</p>
                                    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row g-0 align-items-center">
                                <div class="col-lg-6">
                                    <div class="choose-left">
                                        <div class="sec-title">
                                        <h2>Examinations/ Evaluation</h2>
                                    </div>
                                    <div class="sec-content mt-3">
                                        <p>The school follows a very effective mode of …… 6 exclusively designed for the evaluation criteria set by the CDC. Four major terminal examinations evaluate student’s terminal progress and the frequent CBT’s (Chapter Based Test, conducted after completion of each chapter) keep students alert about the academic activities they need to follow and get through. Both the CBTs  and the terminal exams are conducted in a formal way with proper documentation of each student’s progress in each terminal result.

                                            Internal evaluation is another major evaluation criteria that each subject teacher carries out on students in his/her respective subject’s. The internal classroom activities of individual students over the span of each terminal are evaluated by the teachers and IE percentile is credited to the subject wise terminal outcome. Likewise, the Daily Performance Report(DPR), through which the subject teacher submits the daily classroom and assignment activities of each student to the principal, is taken into account while preparing subject wise terminal results.
                                            The different evaluation modules combined together depicts  student’s overall terminal report on where basis the particular student is treated accordingly in terms of enhancing the overall academic performances. The school adopts Continuous Assessment System(CAS) which helps in one-to-one monitoring of the students with minute evaluation parameters.
                                            It’s main purpose is to make students realize that timely engagement in studies and  their academic activities sooner or later helps them get through even the most challenging academic hurdles.</p>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="images">
                                        <img src="{{ asset('frontend/site-images/evaluation.jpeg') }}" alt>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
