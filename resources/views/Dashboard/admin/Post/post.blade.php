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
              <li class="breadcrumb-item"><a href="/others">Home</a></li>
              <li class="breadcrumb-item active">News and Blogs</li>
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
                        <h5 class="card-title text-dark text-bold">Blogs, News and Categories</h5>
                        <p class="card-text">Our School Recent News and Blogs are Listed here.</p>
                    </div>
                    <div class="col-4 text-right">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addNewsBlogModal">
                            Add News/Blogs <i class="fas fa-plus-circle"></i>
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
                                    <th>User</th>
                                    <th>Post Category</th>
                                    <th>Title</th>
                                    {{-- <th>Slug</th> --}}
                                    <th>Description</th>
                                    <th>Thumbnail</th>
                                    <th>Post Type</th>
                                    <th>Status</th>
                                    <th>Published At</th>
                                    {{-- <th>Start Time</th> --}}
                                    {{-- <th>End Time</th> --}}
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="allData">
                                <!-- Sample table data -->
                                {{-- <tr>
                                    <td>1</td>
                                    <td>John Doe</td>
                                    <td>johndoe@example.com</td>
                                    <td>(123) 456-7890</td>
                                    <td>2023-01-01</td>
                                    <td>$60,000</td>
                                    <td>Project A, Project B</td>
                                    <td>
                                        <button type="button" data-toggle="modal"  class="btn btn-warning btn-sm" data-target="#updateEventModal" >
                                            <i class="fas fa-edit"></i> Edit
                                        </button>

                                        <button type="button" data-toggle="modal"  class="btn btn-danger btn-sm" data-target="#updateEventModal" >
                                            <i class="fas fa-trash"></i> Delete
                                        </button>
                                    </td>
                                </tr> --}}
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



              <!-- add Event Modal starts here -->
  <!-- Modal -->
  <div class="modal fade"  id="addNewsBlogModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="addEventModal" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 900px;">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="addEventModal">
                <i class="fas fa-plus"></i> Add New Post and News
            </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form class="text-dark" id="add_post_form" action="{{ route('save.post') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="user_id">User ID</label>



                    <select class="form-control" id="user_id" name="user_id">
                        @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="post_categories_id">Post Category</label>
                    <select class="form-control" id="post_categories_id" name="post_categories_id">
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" aria-describedby="titleHelp">
                    <small id="titleHelp" class="form-text text-muted">Enter the post title.</small>
                </div>
                {{-- <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug">
                </div> --}}
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <label for="image_url">Post Thumbnail</label>
                    <input type="file" class="form-control" id="image_url" name="image">
                </div>
                <div class="form-group">
                    <label for="post_type">Post Type</label>
                    <select class="form-control" id="post_type" name="post_type">
                        <option value="Blog">Blog</option>
                        <option value="News Article">News Article</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="status">
                        <option value="published">Published</option>
                        <option value="draft">Draft</option>
                        <option value="un-published">Un-Published</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="published_at">Published Date</label>
                    <input type="datetime-local" class="form-control" id="published_at" name="published_at">
                </div>
                <div class="modal-footer">
                    <button type="submit" id="add_post_btn" class="btn btn-primary">Add Post</button>
                </div>
            </form>
        </div>

        </div>
      </div>
    </div>


    {{-- update event modal --}}
    <!-- Modal -->
<div class="modal fade"  id="editPostModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 900px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">
                    <i class="fas fa-pencil-alt"></i> Update News & Blogs
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="text-dark" id="edit_post_form" action="{{ route('update.post') }}" method="POST">
                    @csrf
                    <input type="hidden" name="post_id" id="post_id">
                    <div class="form-group">
                        <label for="Puser_id">User ID</label>
                        <select class="form-control" id="Puser_id" name="user_id">
                            @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Ppost_categories_id">Post Category</label>
                        <select class="form-control" id="Ppost_categories_id" name="post_categories_id">
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Ptitle">Title</label>
                        <input type="text" class="form-control" id="Ptitle" name="title" aria-describedby="titleHelp">
                        <small id="titleHelp" class="form-text text-muted">Enter the post title.</small>
                    </div>
                    {{-- <div class="form-group">
                        <label for="slug">Slug</label>
                        <input type="text" class="form-control" id="slug" name="slug">
                    </div> --}}
                    <div class="form-group">
                        <label for="Pdescription">Description</label>
                        <textarea class="form-control" id="Pdescription" name="description" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="Pimage_url">Post Thumbnail</label>
                        <input type="file" class="form-control" id="Pimage_url" name="image">
                    </div>
                    <div class="form-group">
                        <label for="Ppost_type">Post Type</label>
                        <select class="form-control" id="Ppost_type" name="post_type">
                            <option value="Blog">Blog</option>
                            <option value="News Article">News Article</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Pstatus">Status</label>
                        <select class="form-control" id="Pstatus" name="status">
                            <option value="published">Published</option>
                            <option value="draft">Draft</option>
                            <option value="archived">Archived</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Ppublished_at">Published Date</label>
                        <input type="date" class="form-control" id="Ppublished_at" name="published_at">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" id="edit_post_btn" class="btn btn-primary">Edit Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




  {{-- <div class="card card-success" style="height: inherit; width: inherit; transition: all 0.15s ease 0s;">
    <div class="card-header">
      <h3 class="card-title">Events Categories</h3>

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
        <div class="row">
            <!-- First Row with 4 columns -->
            <div class="col-md-3">
              <!-- Form to add Event Category -->
              <form action="{{ route('event.category') }}" id="add_eventCategory_form" method="POST">
                @csrf
                <div class="form-group">
                  <label for="eventTitle">Title</label>
                  <input type="text" name="title" class="form-control" id="Title" placeholder="Enter title">
                </div>
                <div class="form-group">
                  <label for="eventDescription">Description</label>
                  <textarea class="form-control" name="description" id="Description" rows="3" placeholder="Enter description"></textarea>
                </div>
                <button type="submit" id="add_event_category" class="btn btn-primary">Add Event Category</button>
              </form>
            </div>

            <!-- Second Row with 8 columns -->
            <div class="col-md-8">
              <!-- Table to display Event Categories -->
              <table class="table">
                <thead>
                  <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody id="allCategoryData">
                  <!-- Your table rows will go here -->
                  <tr>
                    <td>Event 1</td>
                    <td>Description 1</td>
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
    <!-- /.card-body -->
  </div> --}}
      </div><!--/. container-fluid -->
    </section>
  </div>
  @push('post-scripts')
    @include('Dashboard.admin.Post.post-script')
  @endpush
@endsection
