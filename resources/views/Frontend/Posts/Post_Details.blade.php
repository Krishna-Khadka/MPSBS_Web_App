        @extends('Frontend.layout.school-master')
        @section("body-content")

        {{-- @php
            print_r($post);
            exit;
        @endphp --}}


        {{-- <div class="news-banner" style="background:url({{ asset('storage/'.$post->image_url) }})"></div> --}}
        <div class="news-banner" style="background:url({{ asset('storage/'.$post->image_url) }})"></div>
        <div class="blog">
            <h1 class="blog-title">{{ $post->title }} </h1>
            <p class="blog-date">Published on: <span>{{ \Carbon\Carbon::parse($post->published_at )->format('F j, Y') }}</span></p>
            <!-- <div class="blog-author d-flex justify-content-between align-items-center">
                <img src="assets/images/logo.png" class="img-fluid" alt="logo">
                <div class="blog-social">
                    <ul>
                        <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-tiktok"></i></a></li>
                    </ul>
                </div>
            </div> -->
        </div>
        <div class="blog-details">
            <p>{{ $post->description }}</p>
        </div>
        @endsection

