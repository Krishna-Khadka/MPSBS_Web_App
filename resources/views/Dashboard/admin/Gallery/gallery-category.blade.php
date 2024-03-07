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
                        <h5 class="card-title text-dark text-bold">Gallery and Gallery Categories</h5>
                        <p class="card-text">Our School Gallery and Cateogrires are Listed here.</p>
                    </div>
                    <div class="col-4 text-right">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addGalleryCategoryModal">
                            Gallery Category <i class="fas fa-plus-circle"></i>
                        </button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createGalleryModal">
                        Create Gallery <i class="fas fa-plus-circle"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Info boxes -->
        <div class="card col-12">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class=" thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Gallery Category</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="allData">

                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
      </div><!--/. container-fluid -->
    </section>
    {{-- main content end here --}}
    <!-- /.content -->
    </div>


    {{-- gallery category modal --}}
    <div class="modal fade"  id="addGalleryCategoryModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="addEventModal" aria-hidden="true">
        <div class="modal-dialog" style="max-width: 900px;">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addEventModal">
                    <i class="fas fa-plus"></i> Create New Category
                </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('add.gallery.category') }}" id="add_gallery_category_form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card mb-3 rounded">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text"  class="form-control" name="category" placeholder="Enter Gallery Category">
                            </div>
                        </div>
                    </div>
                    <button type="submit" id="addGalleryCategoryBtn" class="btn btn-primary mt-3">
                        <i class="fas fa-calendar-plus"></i> Add Category
                    </button>
                </form>


                <div class="col-md-12 mt-4">
                    <!-- Table to display Event Categories -->
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Title</th>
                          {{-- <th>Description</th> --}}
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody id="allGalleryCategoryData">
                        <!-- Your table rows will go here -->
                        <tr>
                          <td>Event 1</td>
                          {{-- <td>Description 1</td> --}}
                          <td>
                            <!-- Add action buttons or links as needed -->
                            <button class="btn btn-sm btn-danger">Delete</button>
                            <button class="btn btn-sm btn-info">Edit</button>
                          </td>
                        </tr>
                        <!-- Add more rows as needed -->
                      </tbody>
                    </table>
                  </div>
            </div>
            </div>
          </div>
        </div>


        <div class="modal fade"  id="createGalleryModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="addEventModal" aria-hidden="true">
            <div class="modal-dialog" style="max-width: 900px;">
              <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addEventModal">
                        <i class="fas fa-plus"></i> Create New Gallery
                    </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('create.gallery') }}" id="add_gallery_form" method="POST" enctype="multipart/form-data">
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
                            {{-- <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control editorEvent" id="description" name="description" rows="3" placeholder="Enter Description"></textarea>
                            </div> --}}
                            <div class="form-group">
                                <label for="status">Category</label>
                                <select class="form-control" name="category">
                                    @foreach ($category as  $catKey => $catValue)
                                    <option value="{{ $catValue->id }}">{{ $catValue->category }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="image_url">Upload Images</label>
                                <input type="file" class="form-control-file" id="image_url" multiple name="images[]">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="eventDate">Date</label>
                                    <input type="date" class="form-control" id="eventDate" name="date">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" id="add_gallery_btn" class="btn btn-primary mt-3">
                        <i class="fas fa-calendar-plus"></i>&nbsp;Save
                    </button>
                </form>
                </div>

                </div>
              </div>
            </div>

    @push('gallery-scripts')
        @include('Dashboard.admin.Gallery.gallery-script')
    @endpush
@endsection
