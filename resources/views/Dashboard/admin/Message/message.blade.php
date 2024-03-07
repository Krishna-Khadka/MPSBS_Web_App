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
              <li class="breadcrumb-item active">Message</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card bg-white rounded-lg shadow" style="background: linear-gradient(to right, #eef4f4, #052341);">
            <div class="card-body">
                <div class="row">
                    <div class="col-8">
                        <h5 class="card-title text-dark text-bold">Message & Queries</h5>
                        <p class="card-text">Our School Messages and Queries are Listed here.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Info boxes -->
        <div class="card col-12">
            <div class="card-body">
                {{-- <h5 class="card-title">Employee Information</h5> --}}
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class=" thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Send At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="allData">



                        </tbody>
                    </table>
                </div>
            </div>
        </div>
      </div><!--/. container-fluid -->
    </section>
    </div>

    @push('message-scripts')
        @include('Dashboard.admin.Message.message-script')
    @endpush
@endsection
