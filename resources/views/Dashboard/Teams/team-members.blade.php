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
                        <h5 class="card-title text-dark text-bold">Our Active Team Members</h5>
                        <p class="card-text">Adminstation, Management and All Teaching/Non-Teaching Teams are Listed Here.</p>
                    </div>
                    <div class="col-4 text-right">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addTeamsModal">
                            Add Team Member <i class="fas fa-plus-circle"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

  <div class="card card-success" style="height: inherit; width: inherit; transition: all 0.15s ease 0s;">
    <div class="card-header">
      <h3 class="card-title">Team Members</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="{{ route('all.teams') }}" data-source-selector="#card-refresh-content" data-load-on-init="false">
          <i class="fas fa-sync-alt"></i>
        </button>
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
                                    <th>Name</th>
                                    {{-- <th>Photo</th> --}}
                                    <th>Position</th>
                                    <th>Role</th>
                                    <th>Contact</th>
                                    <th>Address</th>
                                    <th>Email</th>
                                    <th>Facebook URL</th>
                                    <th>Instagram URL</th>
                                    <th>Is Active</th>
                                    <th>DOJ</th>
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
          </div>
    </div>
    <!-- /.card-body -->
  </div>
      </div><!--/. container-fluid -->
    </section>
    {{-- main content end here --}}
    <!-- /.content -->
  </div>



  {{-- ADD team modal --}}
      <div class="modal fade" id="addTeamsModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="editEventCategoryModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width: 900px;">
            <div class="modal-content">
                <div class="modal-header">
                   <h5 class="modal-title" id="editEventCategoryModalLabel">
                    <i class="fas fa-users"></i>&nbsp;Add Team Member</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('add.team') }}" id="add_team_form" method="POST">
                        @csrf

                        <!-- Card 1: Name, Contact, Address -->
                        <div class="card mb-3 rounded">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control"  name="name" placeholder="Enter Name">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="contact">Contact</label>
                                        <input type="text" class="form-control"  name="contact" placeholder="Enter Contact">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control"  name="address" placeholder="Enter Address">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2: Email, Facebook URL, Instagram URL -->
                        <div class="card mb-3 rounded">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control"  name="email" placeholder="Enter Email">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="facebook_url">Facebook URL</label>
                                        <input type="text" class="form-control"  name="facebook_url" placeholder="Enter Facebook URL">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="instagram_url">Instagram URL</label>
                                        <input type="text" class="form-control"  name="instagram_url" placeholder="Enter Instagram URL">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3: Position, Role, Is Active -->
                        <div class="card mb-3 rounded">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="position">Position</label>
                                        <select class="form-control"  name="position" >
                                          @foreach ($TeamsPosition as $key => $p)
                                          <option value="{{ $key }}">{{ $p }}</option>

                                          @endforeach
                                      </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="role">Role</label>
                                        <input type="text" class="form-control"  name="role" placeholder="Enter Role">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="is_active">Is Active</label>
                                        <select class="form-control"  name="is_active">
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card 4: Photo -->
                        <div class="card mb-3 rounded">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="photo">Photo</label>
                                    <input type="file" class="form-control-file"  name="photo">
                                </div>
                                <div class="form-group">
                                  <label for="doj">Date of Join</label>
                                  <input type="date" class="form-control-file" name="DOJ">
                              </div>
                            </div>
                        </div>

                        <button type="submit" id="addTeamMemberBtn" class="btn btn-primary mt-3">
                            <i class="fas fa-user-plus"></i> Add Team Member
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    {{-- update team modal --}}
    <div class="modal fade" id="editTeamModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="editTeamModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width: 900px;">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="editTeamModalLabel">Upade Event Category</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="update.team" id="edit_team_member_form" method="POST">
                @csrf
                <input type="hidden" name="team_id" id="team_id">

                <!-- Card 1: Name, Contact, Address -->
                <div class="card mb-3 rounded">
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="contact">Contact</label>
                                <input type="text" class="form-control" id="Tcontact" name="contact" placeholder="Enter Contact">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="Taddress" name="address" placeholder="Enter Address">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Email, Facebook URL, Instagram URL -->
                <div class="card mb-3 rounded">
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="Temail" name="email" placeholder="Enter Email">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="facebook_url">Facebook URL</label>
                                <input type="text" class="form-control" id="Tfacebook_url" name="facebook_url" placeholder="Enter Facebook URL">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="instagram_url">Instagram URL</label>
                                <input type="text" class="form-control" id="Tinstagram_url" name="instagram_url" placeholder="Enter Instagram URL">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Position, Role, Is Active -->
                <div class="card mb-3 rounded">
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="position">Position</label>
                                <select class="form-control" id="Tposition" name="position">
                                  @foreach ($TeamsPosition as $key => $p)
                                  <option value="{{ $key }}">{{ $p }}</option>

                                  @endforeach
                              </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="role">Role</label>
                                <input type="text" class="form-control" id="Trole" name="role" placeholder="Enter Role">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="is_active">Is Active</label>
                                <select class="form-control" id="Tis_active" name="is_active">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 4: Photo -->
                <div class="card mb-3 rounded">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="photo">Photo</label>
                            <input type="file" class="form-control-file" id="Tphoto" name="photo">
                        </div>
                        <div class="form-group">
                          <label for="TDOJ">Date of Join</label>
                          <input type="date" class="form-control-file" id="DOJ" name="DOJ">
                      </div>
                    </div>
                </div>

                <button type="submit" id="addTeamMemberBtn" class="btn btn-primary mt-3">
                    <i class="fas fa-user-plus"></i> Update Team Member
                </button>
            </form>

            </div>
          </div>
        </div>
      </div>
  </div>

  @push('team-scripts')
    @include('Dashboard.Teams.team-script')
  @endpush
@endsection
