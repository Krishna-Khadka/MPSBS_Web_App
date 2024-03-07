<script>
    fetchPosts();
    function fetchPosts(){
        $.ajax({
            url: "{{ route('display.post') }}",
            method: 'GET',
            success: function(res){
                // console.log(res);
                $('#allData').html(res.posts);
            }
        });

    }

        $(document).ready(function(){
        $('#add_post_form').submit(function(e){
            e.preventDefault();
            const fd = new FormData(this);
            $('#add_post_btn').text('Adding...');

            $.ajax({
                url: "{{ route('save.post') }}",
                method: 'POST',
                data: fd,
                cache:false,
                processData: false,
                contentType:false,

                success: function(response){
                    if(response.status == 200){
                        Swal.fire(
                        'Added',
                        'New Post Added Successfully',
                        'success'
                    );
                    fetchPosts();
                    }
                    $("#add_post_btn").text('Add Post');
                    $('#add_post_form')[0].reset();
                    $("#addNewsBlogModal").modal('hide');

                }
                }); // ajax end

            });


            // edit post and load data on modal
            $(document).on('click', '.editPostIcon', function(e){
                e.preventDefault();
                let id = $(this).attr('id');
                console.log(id);

                $.ajax({
                    url: "{{ route('edit.post') }}",
            method: 'GET',
            data: {id:id},

            success: function (res){
                $("#post_id").val(res.id);
                $("#Puser_id").val(res.user_id);
                $("#Ppost_categories_id").val(res.post_categories_id);
                $("#Ptitle").val(res.title);
                $("#Pdescription").val(res.description);
                $("#Pstatus").val(res.status);
                $("#Ppublished_at").val(res.published_at);
            }
                })

            });


            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


        $.ajaxSetup(
            { headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } }
        );


        // send post update request
    $('#edit_post_form').submit(function(event) {
        event.preventDefault();
        const fd = new FormData(this);
        $("#edit_post_btn").text("Updating...");

        $.ajax({
            url: "{{ route('update.post') }}",
            method: 'POST',
            data: fd,
            cache:false,
            processData: false,
            contentType:false,

            success: function(res) {
                // console.log(res);
                if(res.status == 200){
                    Swal.fire(
                        'Updated',
                        "Post updated successfully",
                        "success"
                    );
                    fetchPosts();
                }
                $('#edit_post_btn').text('Add Blog');
                $('#edit_post_form')[0].reset();
                $('#editPostModal').modal('hide');

            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText);
            }


        });

    });


                // delete user ajax request
        $(document).on('click','.deleteIcon', function(e){
        e.preventDefault();
        let id = $(this).attr('id');


        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
          }).then((result) => {
            if (result.isConfirmed) {
              $.ajax({
                url: "{{ route('delete.post') }}",
                method: 'POST',
                data: {
                    id: id
                },
                success: function(res){
                    console.log(res);
                    Swal.fire(
                        'Deleted!',
                        'User has been deleted',
                        'success'
                    )
                    fetchPosts();
                }
              })
            }
          });
    });
        });
</script>


<script>
    fetchCategories();
    function fetchCategories(){
        $.ajax({
            url: "{{ route('show.postCategory') }}",
            method: 'GET',
            success: function(res){
                $("#allDataCategory").html(res.categories);
            }

        });
    }

    $(document).ready(function(){
        $('#add_post_category_form').submit(function(e){
            e.preventDefault();
            const fd = new FormData(this);
            $.ajax({
                url : "{{ route('create.postCategory') }}",
                method : 'POST',
                data : fd,
                cache:false,
                processData: false,
                contentType:false,

                success: function(res){
                    if(res.status == 200){
                        Swal.fire(
                            'Added',
                            'Post Category Createded successfully',
                            'succes'
                        );
                        fetchCategories();
                    }
                    // $('#add_post_category_form').text('Add Blog');
                    $('#add_post_category_form')[0].reset();
                    $('#addPostCategoryModal').modal('hide');
                }
            });
        });
    });


    $(document).on('click','.editIconCategory',function(e){
        e.preventDefault();
        let id = $(this).attr('id');
        $.ajax({
            url: "{{ route('edit.postCategory') }}",
            method: 'GET',
            data: {id:id},

            success: function (res){
                $("#category_id").val(res.id);
                $("#catTitle").val(res.title);
                $("#catDescription").val(res.description);
            }
        });
    });


     // update user
     $('#edit_post_category_form').submit(function(event) {
        event.preventDefault();
        // alert('hello');
        const fd = new FormData(this);
        // $("#edit_post_category_btn").text('Updating...');
        $.ajax({
            url: "{{ route('update.category') }}",
            method: 'POST',
            data: fd,
            cache:false,
            processData: false,
            contentType:false,

            success: function(res) {
                // console.log(res);
                if(res.status == 200){
                    Swal.fire(
                        'Updated',
                        "Post updated successfully",
                        "success"
                    );
                    fetchCategories();
                }
                // $('#edit_post_category_btn').text('Add Blog');
                $('#edit_post_category_form')[0].reset();
                $('#editPostCategoryModal').modal('hide');

            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText); // Log the error response to the console
                // Handle the error condition here if needed
            }


        });

    });


    // delete scripts
    $(document).on('click','.deleteIconCategory',function(e) {
        e.preventDefault();
        let id = $(this).attr('id');
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
          }).then((result) => {
            if (result.isConfirmed) {
              $.ajax({
                url: "{{ route('delete.postCategory') }}",
                method: 'POST',
                data: {
                    id: id
                },
                success: function(res){
                    console.log(res);
                    Swal.fire(
                        'Deleted!',
                        'User has been deleted',
                        'success'
                    )
                    fetchCategories();
                }
              })
            }
          });

    });


</script>
