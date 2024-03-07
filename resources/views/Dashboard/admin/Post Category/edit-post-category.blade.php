<!-- Modal -->
<div class="modal fade" id="editPostCategoryModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Edit Post Category</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            
          <form id="edit_post_category_form" action="{{ route('update.category') }}" method="POST">
            @csrf
            <input type="hidden" name="category_id" id="category_id">
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" id="catTitle" name="title" aria-describedby="titleHelp">
              <small id="titleHelp" class="form-text text-muted">Enter the title of the post category.</small>
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <textarea class="form-control" id="catDescription" name="description" rows="3"></textarea>
            </div>
            <div class="modal-footer">
              <button type="submit" id="edit_post_category_btn" class="btn btn-primary">Edit Post Category</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </form>
          
        </div>
      </div>
    </div>
  </div>
  