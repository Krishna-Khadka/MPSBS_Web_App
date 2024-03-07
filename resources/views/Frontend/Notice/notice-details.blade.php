@extends('Frontend.layout.school-master')

@section("body-content")

<section id="banner" style="background: url(assets/images/banner.jpg)">
    <div class="container">
      <div class="banner-text">
        <h1>Notice Detail</h1>
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
            src="{{ asset('storage/' . $notice->thumbnail) }}"
            class="img-fluid"
            alt="event_thumbnail"
          />
        </div>
        <div class="event-desc">
          <div class="schedule">
            <ul>
              {{-- <li>
                <i class="fa-solid fa-location-dot"></i>
                <span>{{ $notice->start_time }}</span>
              </li> --}}
              <li>
                <i class="fa-solid fa-clock"></i>
                <span>{{ \Carbon\Carbon::parse($notice->event_date )->format('F j, Y') }}</span>
              </li>
            </ul>
          </div>
          {{-- <h2>Modern Preparatory Annual Function 2080.</h2> --}}
          <h2>{{ $notice->title }}</h2>
          <p>
            {{ $notice->content }}
          </p>
        </div>
      </div>
    </div>
  </section>


@endsection