@extends('Frontend.layout.school-master')
@section("body-content")

<section id="banner" style="background: url({{ asset('frontend/site-images/adminssion.jpeg') }});">
    <div class="container">
        <div class="banner-text">
            <h1>admission</h1>
        </div>
    </div>
</section>

<!-- ################################### banner section ends ###################################-->

<!-- ################################### admission section starts ################################### -->

<section id="admission">
    <div class="container">
        <div class="sec-subTitle">
            <h6>admission</h6>
        </div>
        <div class="sec-title">
            <h2>how to apply</h2>
        </div>
        <div class="sec-content">
            <p>
                Check Admission Ad in the school website/facebook and
                collect admission form @ Rs. 200/- from the Account
                Section (Nursery-VII). For Grade-VIII and IX, admission
                form can be taken after the HOS/Principal’s consent. The
                student has to sit for English, Nepali and Mathematics
                paper. Each paper is of 25 marks and the pass mark is
                15. The time allotted is 30 minutes for each paper. Oral
                test will be taken for 10 minutes. The student should
                bring pencil/pen, eraser, ruler and the entrance letter
                with him/her while appearing the examination. NOTE: Once
                the entrance test result is out, admission can be done
                immediately.
            </p>
        </div>
        <div class="document">
            <h5>document required</h5>
            <div class="doc-list">
                <ul>
                    <li><i class="fa-solid fa-arrow-right"></i><span>Birth
                            Certificate</span></li>
                    <li><i class="fa-solid fa-arrow-right"></i><span>Transfer
                            Certificate (Original)</span></li>
                    <li><i class="fa-solid fa-arrow-right"></i><span>Former
                            School’s Passed Result (Original)</span></li>
                    <li><i class="fa-solid fa-arrow-right"></i><span>Passport
                            size photo</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

@endsection
