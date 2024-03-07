@extends('Dashboard.layout.admin-master')
@section('main-content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">School Profile</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        {{--<div class="card-body">
                <div class="row">
                    <div class="col-8">
                        <h5 class="card-title text-dark text-bold">Our School





      <div class="col-4 text-right">
                        <img src="" alt="Event Image" class="img-fluid rounded-circle" style="max-width: 100px;">
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="card bg-white rounded-lg shadow" style="background: linear-gradient(to right, #eef4f4, #052341);">
            <div class="card-body">






  <div class="row">
                    <div class="col-8">
                        <h5 class="card-title text-dark text-bold">School Profile and Contact Information</h5>
                        <p class="card-text">Manage all School Information and Contact information from here here.</p>
                    </div>
                    <div class="col-4 text-right">
                        {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addEventModal">
                            Add Event <i class="fas fa-plus-circle"></i>
                        </button> --}}
                    </div>
                </div>
            </div>
        </div>


        {{-- {{ $school_profiles }} --}}
        <!-- school information -->
          <div class="card card-info" style="height: inherit; width: inherit; transition: all 0.15s ease 0s;">
            <div class="card-header">
              <h3 class="card-title">School Information</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="maximize">
                  <i class="fas fa-expand"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                    <form id="schoolInformationForm" action="{{ route('school-info.update') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $sp->id }}">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="aboutUs">About Us</label>
                                <textarea class="form-control" id="aboutUs" name="about_us" rows="4">{{ $sp->about_us }}</textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="missionVision">Mission & Vision</label>
                                <textarea class="form-control" id="missionVision" name="mission_vision" rows="4">{{ $sp->mission_vision }}</textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="whyChooseUs">Why Choose Us</label>
                                <textarea class="form-control" id="whyChooseUs" name="why_choose_us" rows="4">{{ $sp->why_choose_us }}</textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="history">History</label>
                                <textarea class="form-control" id="history" name="history" rows="4">{{ $sp->history }}</textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="history">Message</label>
                                <textarea class="form-control" id="history" name="message" rows="4">{{ $sp->message }}</textarea>
                            </div>
                        </div>

                        <button class="btn btn-dark" type="submit"><i class="fas fa-edit text-white"></i>&nbsp;School Information</button>
                    </form>

                  </div>

            </div>
            {{-- end of school information --}}

            <!-- contact information card -->
            <div class="card card-danger" style="height: inherit; width: inherit; transition: all 0.15s ease 0s;">
                <div class="card-header">
                  <h3 class="card-title">Contact Information</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="maximize">
                      <i class="fas fa-expand"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form id="contactInfoForm" action="{{ route('contact-info.update') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $sp->id }}">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ $sp->email }}" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="secondaryEmail">Secondary Email</label>
                                <input type="email" class="form-control" id="secondaryEmail" name="secondary_email" value="{{ $sp->secondary_email }}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="telephone">Telephone</label>
                                <input type="tel" class="form-control" id="telephone" name="telephone" value="{{ $sp->telephone }}" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="contactNo">Contact No</label>
                                <input type="tel" class="form-control" id="contactNo" name="contact_no" value="{{ $sp->contact_no }}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="secondaryContactNo">Secondary Contact No</label>
                                <input type="tel" class="form-control" id="secondaryContactNo" name="secondary_contact_no" value="{{ $sp->secondary_contact_no }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="websiteUrl">Website URL</label>
                                <input type="url" class="form-control" id="websiteUrl" name="website_url" value="{{ $sp->website_url }}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="address">Address</label>
                                <textarea class="form-control" id="address" name="address" rows="4" required>{{ $sp->address }}</textarea>
                            </div>
                        </div>

                        <button class="btn btn-dark" id="contactInfoBtn" type="submit"><i class="fas fa-edit text-white"></i>&nbsp;Contact Information</button>
                    </form>


                      </div>

                </div>
            <!-- contact information card ends -->
      </div><!--/. container-fluid -->
    </section>
    {{-- main content end here --}}
    <!-- /.content -->
    </div>

    @push('school-profile-scripts')
        @include('Dashboard.admin.School-Profile.school-profile-script')
    @endpush
@endsection
