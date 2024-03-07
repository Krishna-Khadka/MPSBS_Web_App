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

    <!-- ********************** news-box section starts ***************************** -->

    <section id="news-box">
        <div class="container">
            <div class="row gy-5">
                @foreach ($posts as $post)
                    <div class="col-lg-4 col-sm-12">
                        <div class=" mt-4 news-wrapper">
                            <a href="{{ route('post_detail', $post->slug) }}">
                                <div class="news-images">
                                    <img src="{{ asset('storage/' . $post->image_url) }}" class="img-fluid" alt="newsImages">
                                </div>
                                <div class="news-content">
                                    <h6 class="news-categ">{{ $post->category->title }}</h6>
                                    <h6 class="news-head">{{ $post->title }}</h6>
                                    <p class="news-body">{{ $post->description }}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
