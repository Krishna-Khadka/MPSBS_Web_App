
<div class="modal fade" id="editUserModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editUserModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="edit_user_form" action="{{ route('update.user') }}" method="POST">
          @csrf
          <input type="hidden" name="user_id" id="user_id">
          <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp">
              <small id="nameHelp" class="form-text text-muted">Enter your full name.</small>
          </div>
          <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          {{-- <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password">
          </div> --}}
          <div class="form-group">
              <label for="user_type">User Type</label>
              <select class="form-control" id="user_type" name="user_type">
                  <option value="1">Admin</option>
                  <option value="4">Content Manager</option>
              </select>
          </div>
          <div class="modal-footer">
              <button type="submit" id="update_user_btn" class="btn btn-primary">Update User</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
      </form>
      </div>
    </div>
  </div>
</div>

 
  