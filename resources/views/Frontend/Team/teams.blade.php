@extends('Frontend.layout.school-master')

@section("body-content")
<section id="banner" style="background: url(assets/images/banner.jpg);">
    <div class="container">
        <div class="banner-text">
            <h1>our team</h1>
        </div>
    </div>
</section>

<!-- ################################### banner section ends ###################################-->

<!-- ################################### team section starts ################################### -->

<section id="team">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-heading">
                    <h1 class="title">our team</h1>
                </div>
            </div>
        </div>
        {{-- {{ dd($teams) }} --}}
        <div class="row mt-5">
            <div class="col-lg-3">
                <!-- Vertical Navigation -->
                <div class="nav flex-sm-column flex-md-row nav-pills"
                    id="v-pills-tab" role="tablist"
                    aria-orientation="vertical">
                    <a class="nav-link nav-team active"
                        id="v-pills-tab1"
                        data-bs-toggle="pill"
                        href="#administration" role="tab" aria-controls="administration"
                        aria-selected="true">
                        <div class="team-wrapper">
                            <div class="team-content">
                                <h1>Administration</h1>
                            </div>
                        </div>
                    </a>
                    <a class="nav-link nav-team" id="v-pills-management"
                        data-bs-toggle="pill"
                        href="#management" role="tab" aria-controls="management"
                        aria-selected="false">
                        <div class="team-wrapper">
                            <div class="team-content">
                                <h1>Management</h1>
                            </div>
                        </div>
                    </a>
                    <a class="nav-link nav-team" id="v-pills-tab2"
                        data-bs-toggle="pill"
                        href="#coordinator" role="tab" aria-controls="coordinator"
                        aria-selected="false">
                        <div class="team-wrapper">
                            <div class="team-content">
                                <h1>Co-ordinators</h1>
                            </div>
                        </div>
                    </a>
                    <a class="nav-link nav-team" id="v-pills-teaching"
                        data-bs-toggle="pill"
                        href="#teaching" role="tab" aria-controls="teaching"
                        aria-selected="false">
                        <div class="team-wrapper">
                            <div class="team-content">
                                <h1>Teaching</h1>
                            </div>
                        </div>
                    </a>
                    <a class="nav-link nav-team" id="v-pills-accounts"
                        data-bs-toggle="pill"
                        href="#accounts" role="tab" aria-controls="accounts"
                        aria-selected="false">
                        <div class="team-wrapper">
                            <div class="team-content">
                                <h1>Account and Finance</h1>
                            </div>
                        </div>
                    </a>
                    <a class="nav-link nav-team" id="v-pills-support_team"
                        data-bs-toggle="pill"
                        href="#support_team" role="tab" aria-controls="support_team"
                        aria-selected="false">
                        <div class="team-wrapper">
                            <div class="team-content">
                                <h1>Support Team</h1>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-8">
                <!-- Tab Content -->
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="administration"
                        role="tabpanel"
                        aria-labelledby="v-pills-administration">
                        <div class="tab-items">
                            <div class="row">
                                @foreach ($teams as $team)
                                @if($team->position == 'administration')
                                <div
                                    class="col-lg-4 col-md-6 col-sm-12 my-team">
                                    <div class="team-image">
                                        <img src="{{ asset('storage/' .$team->photo) }}"
                                            class="img-fluid" alt>
                                    </div>
                                    <div class="team-detail">
                                        <h5>{{ $team->name }}</h5>
                                        <h6>{{ $team->role }}</h6>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                                {{-- <div
                                    class="col-lg-4 col-md-6 col-sm-12 my-team">
                                    <div class="team-image">
                                        <img src="assets/images/sir.jpg"
                                            class="img-fluid" alt>
                                    </div>
                                    <div class="team-detail">
                                        <h5>Krishna Khdaka</h5>
                                        <h6>Founder Principal</h6>
                                    </div>
                                </div>
                                <div
                                    class="col-lg-4 col-md-6 col-sm-12 my-team">
                                    <div class="team-image">
                                        <img src="assets/images/sir.jpg"
                                            class="img-fluid" alt>
                                    </div>
                                    <div class="team-detail">
                                        <h5>Krishna Khdaka</h5>
                                        <h6>Founder Principal</h6>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="coordinator"
                        role="tabpanel"
                        aria-labelledby="v-pills-coordinator">
                        <div class="tab-items">
                            <div class="row">
                                @foreach ($teams as $team)
                                @if($team->position == 'coordinator')
                                <div
                                    class="col-lg-4 col-md-6 col-sm-12 my-team">
                                    <div class="team-image">
                                        <img src="{{ asset('storage/' .$team->photo) }}"
                                            class="img-fluid" alt>
                                    </div>
                                    <div class="team-detail">
                                        <h5>{{ $team->name }}</h5>
                                        <h6>{{ $team->role }}</h6>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                                {{-- <div
                                    class="col-lg-4 col-md-6 col-sm-12 my-team">
                                    <div class="team-image">
                                        <img src="assets/images/sir.jpg"
                                            class="img-fluid" alt>
                                    </div>
                                    <div class="team-detail">
                                        <h5>Krishna Khdaka</h5>
                                        <h6>Founder Principal</h6>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="teaching"
                        role="tabpanel"
                        aria-labelledby="v-pills-teaching">
                        <div class="tab-items">
                            <div class="row">
                                @foreach ($teams as $team)
                                @if($team->position == 'teaching staff')
                                <div
                                    class="col-lg-4 col-md-6 col-sm-12 my-team">
                                    <div class="team-image">
                                        <img src="{{ asset('storage/' .$team->photo) }}"
                                            class="img-fluid" alt>
                                    </div>
                                    <div class="team-detail">
                                        <h5>{{ $team->name }}</h5>
                                        <h6>{{ $team->role }}</h6>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                                {{-- <div
                                    class="col-lg-4 col-md-6 col-sm-12 my-team">
                                    <div class="team-image">
                                        <img src="assets/images/sir.jpg"
                                            class="img-fluid" alt>
                                    </div>
                                    <div class="team-detail">
                                        <h5>Krishna Khdaka</h5>
                                        <h6>Founder Principal</h6>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="accounts"
                        role="tabpanel"
                        aria-labelledby="v-pills-accounts">
                        <div class="tab-items">
                            <div class="row">
                                @foreach ($teams as $team)
                                @if($team->position == 'accountant')
                                <div
                                    class="col-lg-4 col-md-6 col-sm-12 my-team">
                                    <div class="team-image">
                                        <img src="{{ asset('storage/' .$team->photo) }}"
                                            class="img-fluid" alt>
                                    </div>
                                    <div class="team-detail">
                                        <h5>{{ $team->name }}</h5>
                                        <h6>{{ $team->role }}</h6>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                                {{-- <div
                                    class="col-lg-4 col-md-6 col-sm-12 my-team">
                                    <div class="team-image">
                                        <img src="assets/images/sir.jpg"
                                            class="img-fluid" alt>
                                    </div>
                                    <div class="team-detail">
                                        <h5>Krishna Khdaka</h5>
                                        <h6>Founder Principal</h6>
                                    </div>
                                </div>
                                <div
                                    class="col-lg-4 col-md-6 col-sm-12 my-team">
                                    <div class="team-image">
                                        <img src="assets/images/sir.jpg"
                                            class="img-fluid" alt>
                                    </div>
                                    <div class="team-detail">
                                        <h5>Krishna Khdaka</h5>
                                        <h6>Founder Principal</h6>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="support_team"
                        role="tabpanel"
                        aria-labelledby="v-pills-support_team">
                        <div class="tab-items">
                            <div class="row">
                                @foreach ($teams as $team)
                                @if($team->position == 'support team')
                                <div
                                    class="col-lg-4 col-md-6 col-sm-12 my-team">
                                    <div class="team-image">
                                        <img src="{{ asset('storage/' .$team->photo) }}"
                                            class="img-fluid" alt>
                                    </div>
                                    <div class="team-detail">
                                        <h5>{{ $team->name }}</h5>
                                        <h6>{{ $team->role }}</h6>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                                {{-- <div
                                    class="col-lg-4 col-md-6 col-sm-12 my-team">
                                    <div class="team-image">
                                        <img src="assets/images/sir.jpg"
                                            class="img-fluid" alt>
                                    </div>
                                    <div class="team-detail">
                                        <h5>Krishna Khdaka</h5>
                                        <h6>Founder Principal</h6>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="management"
                        role="tabpanel"
                        aria-labelledby="v-pills-management">
                        <div class="tab-items">
                            <div class="row">
                                @foreach ($teams as $team)
                                @if($team->position == 'management')
                                <div
                                    class="col-lg-4 col-md-6 col-sm-12 my-team">
                                    <div class="team-image">
                                        <img src="{{ asset('storage/' .$team->photo) }}"
                                            class="img-fluid" alt>
                                    </div>
                                    <div class="team-detail">
                                        <h5>{{ $team->name }}</h5>
                                        <h6>{{ $team->role }}</h6>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                                {{-- <div
                                    class="col-lg-4 col-md-6 col-sm-12 my-team">
                                    <div class="team-image">
                                        <img src="assets/images/sir.jpg"
                                            class="img-fluid" alt>
                                    </div>
                                    <div class="team-detail">
                                        <h5>Krishna Parajuli</h5>
                                        <h6>Founder Principal</h6>
                                    </div>
                                </div>
                                <div
                                    class="col-lg-4 col-md-6 col-sm-12 my-team">
                                    <div class="team-image">
                                        <img src="assets/images/sir.jpg"
                                            class="img-fluid" alt>
                                    </div>
                                    <div class="team-detail">
                                        <h5>Krishna Khdaka</h5>
                                        <h6>Founder Principal</h6>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>\

@endsection