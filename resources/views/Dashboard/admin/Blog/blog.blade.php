@extends('Dashboard.layout.admin-master')
@section('main-content')


<!-- Content Wrapper. Contains page content -->
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
            <li class="breadcrumb-item"><a href="/others">Home</a></li>
            <li class="breadcrumb-item active">Blogs</li>
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
      <div class="row">
        <div class="col-12">
          <div>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addBlogModal">
              Add New Blog
            </button>
            <a href="{{ url('/Blog/Add') }}" class="btn btn-primary">Add New Blog</a>
          </div>
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Add Blog Table</h3>

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
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>User Type</th>
                    <th>Action</th>
                  </tr>
                </thead>
                {{-- <div > --}}
                  <tbody id="allData">
                    <tr>
                      <td>1</td>
                      <td>John Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-success">Approved</span></td>
                      <td>
                        <a href="" class="btn btn-success">Edit</a>
                        <a href="" class="btn btn-danger">Delete <i class='fa-solid fa-trash'></i></a>
                      </td>
                    </tr>
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
  {{-- main content end here --}}
  <!-- /.content -->
</div>
@include('Dashboard.admin.Blog.add_blog_modal')
<!-- /.content-wrapper -->
@endsection

