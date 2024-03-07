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
        <div class="card bg-white rounded-lg shadow" style="background: linear-gradient(to right, #eef4f4, #052341);">
            <div class="card-body">
                <div class="row">
                    <div class="col-8">
                        <h5 class="card-title text-dark text-bold">Archives</h5>
                        <p class="card-text">Our School Recent and Past Archive are Listed here.</p>
                    </div>
                    <div class="col-4 text-right">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addArchiveModal">
                        Create Archive <i class="fas fa-plus-circle"></i>
                        </button>
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
                                <th>Title</th>
                                <th>Description</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Date</th>
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


        <div class="modal fade"  id="addArchiveModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="addEventModal" aria-hidden="true">
            <div class="modal-dialog" style="max-width: 900px;">
              <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addEventModal">
                        <i class="fas fa-plus"></i> Add New Archive
                    </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('create.gallery') }}" id="add_archive_form" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="card mb-3 rounded">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title">
                            </div>
                        </div>
                    </div>

                    <!-- Second Card with Text Area and File Upload -->
                    <div class="card rounded">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control editorEvent" id="description" name="description" rows="3" placeholder="Enter Description"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="image_url">Upload Images</label>
                                <input type="file" class="form-control-file" id="image_url" multiple name="images[]">
                            </div>
                             <div class="form-group">
                                <label for="status">Status</label>
                                <select class="form-control" name="status">
                                    {{-- @foreach ($category as  $catKey => $catValue) --}}
                                    {{-- <option value="{{ $catValue->id }}">{{ $catValue->category }}</option> --}}
                                    {{-- @endforeach --}}
                                    <option value="1">Published</option>
                                    <option value="0">Un-Published</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="status">Category</label>
                                <select class="form-control" name="category">
                                    @foreach ($category as $key => $cat)
                                    <option value="{{ $key }}">{{ $cat }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="eventDate">Date</label>
                                    <input type="date" class="form-control" id="eventDate" name="date">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" id="add_archive_btn" class="btn btn-primary mt-3">
                        <i class="fas fa-calendar-plus"></i>&nbsp;Save
                    </button>
                </form>
                </div>

                </div>
              </div>
            </div>

    @push('gallery-scripts')
        @include('Dashboard.admin.Archive.archive-script')
    @endpush
@endsection
