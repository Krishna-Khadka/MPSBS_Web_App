@extends('Frontend.layout.school-master')
@section("body-content")

<section id="banner" style="background: url(assets/images/banner.jpg);">
    <div class="container">
        <div class="banner-text">
            <h1>contact us</h1>
        </div>
    </div>
</section>

<!-- ################################### banner section ends ###################################-->

<!-- ################################### contact section starts ################################### -->

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="sec-subTitle">
                    <h6>get in touch</h6>
                </div>
                <div class="sec-title">
                    <h2>have any query?</h2>
                </div>
                <div class="contact-form mt-5">
                    <form action="{{ route('save.contact') }}" id="contact_form" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-sm-12 mb-3">
                                <input type="text" name="name"
                                    class="form-control"
                                    placeholder="Name"
                                    autocomplete="off">
                            </div>
                            <div class="col-lg-6 col-sm-12 mb-3">
                                <input type="email" name="email"
                                    class="form-control"
                                    placeholder="Email"
                                    autocomplete="off">
                            </div>
                            <div class="col-lg-12 col-sm-12 mb-3">
                                <input type="text" name="subject"
                                    class="form-control"
                                    placeholder="Subject"
                                    autocomplete="off">
                            </div>
                            <div class="col-lg-12 col-sm-12 mb-3">
                                <textarea name="message"
                                    class="form-control" rows="7"
                                    placeholder="Leave Message"></textarea>
                            </div>
                            <div class="col-lg-12 col-sm-12">
                                <button type="submit" class="mess-btn">submit
                                    now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-list">
                    <ul>
                        <li
                            class="contact-info d-flex align-items-center">
                            <div class="info-logo">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="info-detail">
                                <h6>visit office</h6>
                                <h5>{{ $profile->address }}</h5>
                            </div>
                        </li>
                        <li
                            class="contact-info d-flex align-items-center">
                            <div class="info-logo">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="info-detail">
                                <h6>call anytime</h6>
                                <a href="#">
                                    <h5>+977 {{ $profile->contact_no }} / {{  $profile->secondary_contact_no }}</h5>
                                </a>
                            </div>
                        </li>
                        <li
                            class="contact-info d-flex align-items-center">
                            <div class="info-logo">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="info-detail">
                                <h6>send email</h6>
                                <a href="#">
                                    <h5>{{ $profile->email }}</h5>
                                </a>
                            </div>
                        </li>
                        <li
                            class="contact-info d-flex align-items-center">
                            <div class="info-logo">
                                <i class="fa-solid fa-globe"></i>
                            </div>
                            <div class="info-detail">
                                <h6>visit us</h6>
                                <a href="#">
                                    <h5>{{ $profile->website_url }}</h5>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ################################### map section starts ################################### -->

<section id="map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3565.583053314435!2d87.26966637533155!3d26.661829076797567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef6d03cc968895%3A0xf0abb5dc149d2ba8!2sModern%20Preparatory%20Secondary%20Boarding%20School!5e0!3m2!1sen!2snp!4v1700739110918!5m2!1sen!2snp"
        width="100%" height="100%" style="border:0;" allowfullscreen
        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
@push('contact-scripts')
    @include('Frontend.Contact.contact-script')
@endpush
@endsection
