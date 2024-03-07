@extends('Frontend.layout.school-master')
@section('body-content')
    <!--********************** event-detail section starts **********************-->

    <section id="event-detail">
        <div class="container">
            <div class="archieve-wrapper">
                <div class="event-desc">
                    <h2>{{ $archive->title }}</h2>
                    {!! $archive->description !!} Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ab reiciendis, facilis doloribus iste officia rerum iusto, error ipsam tempore sed natus obcaecati.
                </div>
                <div class="row g-4">
                    @foreach ($archive->images as $image)
                    <div class="col-lg-4 col-sm-12">
                        <div class="archieve-box">
                            <img src="{{ asset($image->images) }}" class="img-fluid" alt="">
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="col-lg-4 col-sm-12">
                        <div class="archieve-box">
                            <img src="{{ asset('frontend/assets/images/fac4.jpg') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="archieve-box">
                            <img src="{{ asset('frontend/assets/images/fac2.jpg') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="archieve-box">
                            <img src="{{ asset('frontend/assets/images/fac1.jpg') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="archieve-box">
                            <img src="{{ asset('frontend/assets/images/fac5.jpg') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="archieve-box">
                            <img src="{{ asset('frontend/assets/images/fac3.jpg') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="archieve-box">
                            <img src="{{ asset('frontend/assets/images/fac1.jpg') }}" class="img-fluid" alt="">
                        </div>
                    </div> --}}
                </div>
            </div>

        </div>
    </section>
@endsection
