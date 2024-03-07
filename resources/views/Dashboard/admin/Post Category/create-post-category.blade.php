<!-- Modal -->
<div class="modal fade" id="addPostCategoryModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Add Post Category</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            
          <form id="add_post_category_form" action="{{ route('create.postCategory') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" id="title" name="title" aria-describedby="titleHelp">
              <small id="titleHelp" class="form-text text-muted">Enter the title of the post category.</small>
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
            <div class="modal-footer">
              <button type="submit" id="add_post_category_btn" class="btn btn-primary">Add Post Category</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </form>
          
        </div>
      </div>
    </div>
  </div>
  