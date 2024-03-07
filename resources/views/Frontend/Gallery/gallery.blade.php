@extends('Frontend.layout.school-master')

@section("body-content")

<section id="banner" style="background: url({{ asset('frontend/assets/images/banner.jpg') }})">
    <div class="container">
      <div class="banner-text">
        <h1>Image Gallery</h1>
      </div>
    </div>
  </section>

  <!-- ################################### banner section ends ###################################-->

  <!-- ################################### gallery section starts ################################### -->

  <section id="gallery" style="padding: 80px 0">
    <div class="container mt-5">
      <div class="row gy-5">

        @foreach ($categories as $category)
        {{-- {{ $category->id }} --}}
        @php
            $galleryID = Crypt::encrypt($category->id);
            $imageThumbnail = $category->images[0]->image
        @endphp
        {{-- {{ $category->images[0]->image }} --}}
        {{-- {{ $imageThumbnail }} --}}

        {{-- @foreach ($category->images as $img)

        @endforeach --}}

        <div class="col-md-4">
          <a href="{{ route('show.image.gallery',$galleryID) }}">
            <div class="gallery-item">
              <img src="{{ asset($imageThumbnail) }}" alt="Image 1" />
              <div class="overlay">
                <h2>{{ $category->title }}</h2>
              </div>
            </div>
          </a>
        </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection
