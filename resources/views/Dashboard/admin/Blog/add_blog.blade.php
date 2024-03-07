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
          
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Add Blog</h3>

              {{-- <div class="card-tools"> --}}
                <form class="text-dark" id="add_post_form" action="" method="POST">
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
              {{-- </div> --}}
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
{{-- @include('Dashboard.admin.Blog.add_blog_modal') --}}
<script>
    // var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

	ClassicEditor
		.create( document.querySelector( '#content' ),
        {
            ckfinder:{
                uploadUrl: "{{ route('ckeditor.upload',['_token' => csrf_token() ]) }}"
            }
        })
		.catch( error => {
			console.error( error );
		} );
    // var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

// ClassicEditor
//     .create(document.querySelector('#content'), {
//         ckfinder: {
//             uploadUrl: "{{ route('ckeditor.upload') }}",
//             headers: {
//                 'X-CSRF-TOKEN': csrfToken
//             }
//         }
//     })
//     .catch(error => {
//         console.error(error);
//     });





</script>
<!-- /.content-wrapper -->
@endsection

