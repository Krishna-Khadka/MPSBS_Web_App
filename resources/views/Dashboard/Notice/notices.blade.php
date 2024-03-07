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

        {{-- <div class="card rounded-lg shadow" style="background: linear-gradient(to right, #eef4f4, #052341);">
            <div class="card-body">
                <div class="row">
                    <div class="col-8">
                        <h5 class="card-title text-dark text-bold">Our School Events</h5>
                    </div>
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
                        <h5 class="card-title text-dark text-bold">School Notices</h5>
                        <p class="card-text">Our School Notices are Listed here.</p>
                    </div>
                    <div class="col-4 text-right">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addNoticeModal">
                            Add Notice <i class="fas fa-plus-circle"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
            
  <div class="card card-success" style="height: inherit; width: inherit; transition: all 0.15s ease 0s;">
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
            <div class="card col-12">
                <div class="card-body">
                    {{-- <h5 class="card-title">Employee Information</h5> --}}
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class=" thead-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Thumbnail</th>
                                    <th>Published Date</th>
                                    <th>Expiry Date</th>
                                    <th>Is Active</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="allNoticeData">
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
          </div>
    </div>
    <!-- /.card-body -->
  </div>
      </div><!--/. container-fluid -->
    </section>
    {{-- main content end here --}}
    <!-- /.content -->
  </div>


  
  <!-- add Notice Modal starts here -->
  <!-- Modal -->
  <div class="modal fade"  id="addNoticeModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="addEventModal" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 900px;">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="addEventModal">
                <i class="fas fa-plus"></i> Create New Notice
            </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('add.notice') }}" id="add_notice_form" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card mb-3 rounded">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Enter Title">
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea class="form-control" name="content" rows="3" placeholder="Enter Content"></textarea>
                        </div>
                    </div>
                </div>
            
                <!-- Second Card with Text Area and File Upload -->
                <div class="card rounded">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="thumbnail">Thumbnail</label>
                            <input type="file" class="form-control-file"  name="thumbnail">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="published_date">Published Date</label>
                                <input type="date" class="form-control"  name="published_date">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="expiry_date">Expiry Date</label>
                                <input type="date" class="form-control"  name="expiry_date">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="is_active">Is Active</label>
                                <select class="form-control"  name="is_active">
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" id="addEventBtn" class="btn btn-primary mt-3">
                    <i class="fas fa-calendar-plus"></i> Add Notice
                </button>
            </form>
        </div>
        </div>
      </div>
    </div>




    {{-- update notice modal --}}
    <!-- Modal -->
<div class="modal fade"  id="editNoticeModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 900px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">
                    <i class="fas fa-pencil-alt"></i> Update School Notice
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('update.notice') }}" id="edit_notice_form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="notice_id" id="notice_id">
                    <div class="card mb-3 rounded">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title">
                            </div>
                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea class="form-control" id="content" name="content" rows="3" placeholder="Enter Content"></textarea>
                            </div>
                        </div>
                    </div>
                
                    <!-- Second Card with Text Area and File Upload -->
                    <div class="card rounded">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="thumbnail">Thumbnail</label>
                                <input type="file" class="form-control-file" id="thumbnail" name="thumbnail">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="published_date">Published Date</label>
                                    <input type="date" class="form-control" id="published_date" name="published_date">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="expiry_date">Expiry Date</label>
                                    <input type="date" class="form-control" id="expiry_date" name="expiry_date">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="is_active">Is Active</label>
                                    <select class="form-control" id="is_active" name="is_active">
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" id="addNoticeBtn" class="btn btn-primary mt-3">
                        <i class="fas fa-calendar-plus"></i> Update Notice
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>


    {{-- update event category modal --}}
    {{-- <div class="modal fade" id="editEventCategoryModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="editEventCategoryModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="editEventCategoryModalLabel">Upade Event Category</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('update.eventCategory') }}" id="edit_eventCategory_form" method="POST">
                    @csrf
                    <input type="hidden" name="event_category_id" id="event_category_id">
                    <div class="form-group">
                      <label for="eventTitle">Title</label>
                      <input type="text" name="title" class="form-control" id="ECTitle" placeholder="Enter title">
                    </div>
                    <div class="form-group">
                      <label for="eventDescription">Description</label>
                      <textarea class="form-control" name="description" id="ECDescription" rows="3" placeholder="Enter description"></textarea>
                    </div>
                    <button type="submit" id="add_event_category" class="btn btn-primary">Update Event Category</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </form>
              
            </div>
          </div>
        </div>
      </div> --}}
  </div>

  @push('notice-scripts')
    @include('Dashboard.Notice.notice-scripts')
  @endpush
@endsection