@extends('Frontend.layout.school-master')

@section('body-content')
    <section id="notice-banner" style="background: url({{ asset('frontend/assets/images/bannerBg.jpg') }});">
        <div class="container">
            <div class="notice-banner-content d-flex align-items-center">
                <div class="notice-banner-left">
                    <h1>Find News and Events happening in Modern Preparatory School</h1>
                    <p>Islington College thrives on providing quality
                        education to its students by just not with the
                        industry expert lecturers but also with extra
                        curricular activities. </p>
                </div>
                <div class="notice-banner-right d-none d-md-block">
                    <img src="{{ asset('frontend/assets/images/event.png') }}" class="img-fluid" alt>
                </div>
            </div>
        </div>
    </section>

    <!--********************** notice-banner section ends **********************-->

    <!-- ********************** notice section starts ***************************** -->

    <section id="notice">
        <div class="container">
            <div class="row gy-5">
                @foreach ($notices as $notice)
                    <div class="col-lg-6 col-sm-12">
                        <div class="notice-box d-flex align-items-center">
                            <div class="notice-box-left">
                                <img src="{{ $notice->thumbnail ? asset('storage/' . $notice->thumbnail) : asset('path/to/default-notice.jpg') }}"
                                    class="img-fluid" alt>
                            </div>
                            <div class="notice-box-right">
                                <a href="{{ route('site.notice.details', $notice->slug) }}">
                                    <h6 class="notice-title">{{ $notice->title }}</h6>
                                </a>
                                <p class="notice-body">{{ Str::limit($notice->content, 100, '...') }}</p>
                                <div class="notice-publish d-flex">
                                    <span><i class="fa-solid fa-calendar-days"></i></span>
                                    <p>{{ \Carbon\Carbon::parse($notice->published_date)->format('F j, Y') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="col-lg-6 col-sm-12">
                        <div class="notice-box d-flex align-items-center">
                            <div class="notice-box-left">
                                <img src="{{ asset('frontend/assets/images/notice.jpeg')  }}"
                                    class="img-fluid" alt>
                            </div>
                            <div class="notice-box-right">
                                <a href="#">
                                    <h6 class="notice-title">SEE Exam Routine
                                        Published</h6>
                                </a>
                                <p class="notice-body">Lorem ipsum dolor sit
                                    amet consectetur adipisicing elit. Tenetur,
                                    ipsam maiores? Amet doloribus maxime rem.</p>
                                <div class="notice-publish d-flex">
                                    <span><i class="fa-solid fa-calendar-days"></i></span>
                                    <p>Dec 20, 2023</p>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                {{-- <div class="col-lg-6 col-sm-12">
                        <div class="notice-box d-flex align-items-center">
                            <div class="notice-box-left">
                                <img src="{{ asset('frontend/assets/images/notice.jpeg')  }}"
                                    class="img-fluid" alt>
                            </div>
                            <div class="notice-box-right">
                                <a href="#">
                                    <h6 class="notice-title">SEE Exam Routine
                                        Published</h6>
                                </a>
                                <p class="notice-body">Lorem ipsum dolor sit
                                    amet consectetur adipisicing elit. Tenetur,
                                    ipsam maiores? Amet doloribus maxime rem.</p>
                                <div class="notice-publish d-flex">
                                    <span><i class="fa-solid fa-calendar-days"></i></span>
                                    <p>Dec 20, 2023</p>
                                </div>
                            </div>
                        </div>
                    </div> --}}
            </div>
        </div>
    </section>
@endsection
