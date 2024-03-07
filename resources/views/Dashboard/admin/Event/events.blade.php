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

        <div class="card bg-white rounded-lg shadow" style="background: linear-gradient(to right, #eef4f4, #052341);">
            <div class="card-body">
                <div class="row">
                    <div class="col-8">
                        <h5 class="card-title text-dark text-bold">Events and Event Categories</h5>
                        <p class="card-text">Our School Recent and Upcoming Events are Listed here.</p>
                    </div>
                    <div class="col-4 text-right">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addEventModal">
                            Add Event <i class="fas fa-plus-circle"></i>
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
                                    <th>Event Category</th>
                                    <th>Title</th>
                                    <th>Thumbnail</th>
                                    {{-- <th>Description</th> --}}
                                    <th>Status</th>
                                    <th>Event Schedule</th>
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
  </div>
      </div><!--/. container-fluid -->
    </section>
    {{-- main content end here --}}
    <!-- /.content -->
  </div>



  <!-- add Event Modal starts here -->
  <!-- Modal -->
  <div class="modal fade"  id="addEventModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="addEventModal" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 900px;">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="addEventModal">
                <i class="fas fa-plus"></i> Add New Event
            </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('add.event') }}" id="add_event_form" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="card mb-3 rounded">
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="eventCategory">Event Category</label>
                            <select class="form-control" id="eventCategory" name="eventCategory">
                                @foreach ($event_categories as $event_category)
                                 <option value="{{ $event_category->id }}">{{ $event_category->title }}</option>
                                @endforeach
                                <!-- Add options for Event Category -->
                            </select>
                        </div>
                        {{-- <div class="form-group col-md-4">
                            <label for="postType">Post Type</label>
                            <select class="form-control" id="postType" name="postType">
                                @foreach ($postType as  $statusKey => $statusValue)
                                <option value="{{ $statusKey }}">{{ $statusValue }}</option>
                                @endforeach
                                <!-- Add options for Post Type -->
                            </select>
                        </div> --}}
                        <div class="form-group col-md-6">
                            <label for="status">Status</label>
                            <select class="form-control" id="status" name="status">
                                @foreach ($postType as  $statusKey => $statusValue)
                                <option value="{{ $statusKey }}">{{ $statusValue }}</option>
                                @endforeach
                            </select>
                        </div>
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
                        <label for="image_url">Event Thumbnail</label>
                        <input type="file" class="form-control-file" id="image_url" name="image">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="eventDate">Event Date</label>
                            <input type="date" class="form-control" id="eventDate" name="eventDate">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="startTime">Start Time</label>
                            <input type="time" class="form-control" id="startTime" name="startTime">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="endTime">End Time</label>
                            <input type="time" class="form-control" id="endTime" name="endTime">
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" id="addEventBtn" class="btn btn-primary mt-3">
                <i class="fas fa-calendar-plus"></i> Add Event
            </button>
        </form>
        </div>

        </div>
      </div>
    </div>




    {{-- update event modal --}}
    <!-- Modal -->
<div class="modal fade"  id="updateEventModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 900px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">
                    <i class="fas fa-pencil-alt"></i> Update Event
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('update.event') }}" id="updateEventForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="event_id" id="event_id">
                    <div class="card mb-3 rounded">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="eventTitle" name="title" placeholder="Enter Title">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="eventCategory">Event Category</label>
                                    <select class="form-control" id="EeventCategory" name="eventCategory">
                                        <!-- Add options for Event Category -->
                                        @foreach ($event_categories as $event_category)
                                        <option value="{{ $event_category->id }}">{{ $event_category->title }}</option>
                                       @endforeach
                                    </select>
                                </div>
                                {{-- <div class="form-group col-md-4">
                                    <label for="postType">Post Type</label>
                                    <select class="form-control" id="postType" name="postType">
                                        <!-- Add options for Post Type -->
                                        <option value="postType1">Post Type 1</option>
                                        <option value="postType2">Post Type 2</option>
                                    </select>
                                </div> --}}
                                <div class="form-group col-md-6">
                                    <label for="status">Status</label>
                                    <select class="form-control" id="Estatus" name="status">
                                        @foreach ($postType as  $statusKey => $statusValue)
                                        <option value="{{ $statusKey }}">{{ $statusValue }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Second Card with Text Area and File Upload -->
                    <div class="card rounded">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control UpdateEditorEvent" id="Edescription" name="description" rows="3" placeholder="Enter Description">Event Description</textarea>
                            </div>
                            <div class="form-group">
                                <label for="image_url">Event Thumbnail</label>
                                <input type="file" class="form-control-file" id="image_url" name="image">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="eventDate">Event Date</label>
                                    <input type="date" class="form-control" id="EeventDate" name="eventDate">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="startTime">Start Time</label>
                                    <input type="time" class="form-control" id="EstartTime" name="startTime">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="endTime">End Time</label>
                                    <input type="time" class="form-control" id="EendTime" name="endTime">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" id="updateEventBtn" class="btn btn-primary mt-3">
                        <i class="fas fa-calendar-check"></i> Update Event
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>


    {{-- update event category modal --}}
    <div class="modal fade" id="editEventCategoryModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="editEventCategoryModalLabel" aria-hidden="true">
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
                    {{-- <button type="submit" id="update_event_category_btn" class="btn btn-primary d-none">Update Event Category</button> --}}
                  </form>

            </div>
            {{-- <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Understood</button>
            </div> --}}
          </div>
        </div>
      </div>
  </div>

  @push('event-scripts')
    @include('Dashboard.admin.Event.event-scripts')
  @endpush
@endsection
