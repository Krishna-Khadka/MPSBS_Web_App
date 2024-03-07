@extends('Frontend.layout.school-master')

@section("body-content")

<section id="banner" style="background: url(assets/images/banner.jpg)">
  <div class="container">
    <div class="banner-text">
      <h1>Event Detail</h1>
    </div>
  </div>
</section>

  <!-- ################################### banner section ends ###################################-->

  <!--********************** event-detail section starts **********************-->

  <section id="event-detail">
    <div class="container">
      <div class="event-info">
        <div class="thumbnail">
          <img
            src="{{ asset("storage/" . $event->image_url) }}"
            class="img-fluid"
            alt="event_thumbnail"
          />
        </div>
        <div class="event-desc">
          <div class="schedule">
            <ul>
              <li>
                <i class="fa-solid fa-location-dot"></i>
                <span>Itahari, Sunsari</span>
              </li>
              <li>
                <i class="fa-solid fa-clock"></i>
                <span>10:30 AM</span>
              </li>
            </ul>
          </div>
          <h2 style="color:#CF262B">{{ $event->title }}</h2>
          {{-- <p> --}}
            {!! $event->description !!}
          {{-- </p> --}}

        </div>
      </div>
    </div>
  </section>

@endsection
