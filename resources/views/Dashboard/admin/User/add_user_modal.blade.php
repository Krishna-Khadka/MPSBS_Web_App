  <!-- Modal -->
  <div class="modal fade" id="addUserModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Add User Form</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            
            <form id="add_user_form" action="{{ route('add.user') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputName">Name</label>
                    <input type="text" class="form-control" id="exampleInputName" name="name" aria-describedby="nameHelp">
                    <small id="nameHelp" class="form-text text-muted">Enter your full name.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail" name="email" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword" name="password">
                </div>
                <div class="form-group">
                    <label for="exampleInputUserType">User Type</label>
                    <select class="form-control" id="exampleInputUserType" name="user_type">
                        <option value="1">Admin</option>
                        <option value="4">Content Manager</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="add_user_btn" class="btn btn-primary">Add User</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
            
    </div>
  </div>
 
  