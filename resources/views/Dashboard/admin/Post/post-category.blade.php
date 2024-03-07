@extends('Dashboard.layout.admin-master')
@section('main-content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Users</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">User List</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="card bg-white rounded-lg shadow" style="background: linear-gradient(to right, #eef4f4, #052341);">
            <div class="card-body">
                <div class="row">
                    <div class="col-8">
                        <h5 class="card-title text-dark text-bold">Blogs, News and Categories</h5>
                        <p class="card-text">Our School Recent News and Blogs are Listed here.</p>
                    </div>
                    <div class="col-4 text-right">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addPostCategoryModal">
                            Add News Category <i class="fas fa-plus-circle"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All User Table</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    {{-- `id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `user_type`, --}}
                    <tr>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  {{-- <div > --}}
                    <tbody id="allDataCategory">
                      {{-- <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>11-7-2014</td>
                        <td><span class="tag tag-success">Approved</span></td>
                        <td>
                          <a href="" class="btn btn-success">Edit</a>
                          <a href="" class="btn btn-danger">Delete <i class='fa-solid fa-trash'></i></a>
                        </td>
                      </tr> --}}
                  </tbody>
                  {{-- </div> --}}

                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>



  @include('Dashboard.admin.Post Category.create-post-category')
  @include('Dashboard.admin.Post Category.edit-post-category')

  @push('post-scripts')
    @include('Dashboard.admin.Post.post-script')
  @endpush
@endsection
