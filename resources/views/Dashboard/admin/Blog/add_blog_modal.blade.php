  <!-- Modal -->
  <div class="modal fade" id="addBlogModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Add User Form</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            
          <form id="add_post_form" action="" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="titleHelp">
                <small id="titleHelp" class="form-text text-muted">Enter the post title.</small>
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="ckeditor form-control" id="content" name="content" rows="4"></textarea>
            </div>
            <div class="form-group">
                <label for="author_id">Author ID</label>
                <input type="number" class="form-control" id="author_id" name="author_id">
            </div>
            <div class="form-group">
                <label for="published_date">Published Date</label>
                <input type="datetime-local" class="form-control" id="published_date" name="published_date">
            </div>
            <div class="form-group">
                <label for="category_id">Category</label>
                <select class="form-control" id="category_id" name="category_id">
                    <option value="1">School Life</option>
                    <option value="2">Athletics</option>
                    <option value="3">Club</option>
                </select>
            </div>
            <div class="form-group">
                <label for="thumbnail_url">Thumbnail URL</label>
                <input type="text" class="form-control" id="thumbnail_url" name="thumbnail_url">
            </div>
            <div class="form-group">
                <label for="post_status">Post Status</label>
                <select class="form-control" id="post_status" name="post_status">
                    <option value="published">Published</option>
                    <option value="draft">Draft</option>
                    <option value="archived">Archived</option>
                </select>
            </div>
            <div class="modal-footer">
                <button type="submit" id="add_post_btn" class="btn btn-primary">Add Post</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </form>
        
            
    </div>
  </div>
  <script>
    CKEDITOR.replace('content');
  </script>
 
  