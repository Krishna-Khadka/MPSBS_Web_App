   // fetch user
   fetchUser();
   function fetchUser(){
      $.ajax({
        url: fetchUsers,
        method: 'GET',
        success: function(res){
            // console.log(res);
            $('#allData').html(res.users);
        }
      })
   }

  // add user
  $(document).ready(function() {
    $('#add_user_form').submit(function(e){
        e.preventDefault();
        // alert('hello');
        const fd = new FormData(this);
        $('#add_user_btn').text('Adding...');
        $.ajax({
            url: userAddUrl,
            method: 'post',
            data: fd,
            cache:false,
            processData: false,
            contentType:false,

            success: function(data){
                // console.log(data);
                if(data.status == 200){
                    Swal.fire(
                        'Added',
                        'New User Added Successfully',
                        'success'
                    );
                    fetchUser();
                }
                $('#add_user_btn').text('Add Blog');
                $('#add_user_form')[0].reset();
                $('#addUserModal').modal('hide');
            }
        });

    });


    // edit user (load user in form)
    $(document).on('click', '.editIcon',function(e){
        e.preventDefault(); // stop page load/refresh
        let id = $(this).attr('id');
        $.ajax({
            url: userEditUrl,
            method: 'GET',
            data:{ id:id, _token:token },
            success: function(res) {
                // console.log(res);
                $('#user_id').val(res.id);
                $("#name").val(res.name);
                $("#email").val(res.email);
                $("#user_type").val(res.user_type);
                // console.log(res);

                // $("#user_type option").each(function() {
                //     if ($(this).val() == res.userType) {
                //         $(this).prop("selected", true);
                //     }
                // });
            }
        })
    });

    // update user 
    $('#edit_user_form').submit(function(event) {
        event.preventDefault();
        // alert('hello');
        const fd = new FormData(this);
        $("#update_user_btn").text('Updating...');
        $.ajax({
            url: userUpdateUrl,
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
                        "User updated successfully",
                        "success"
                    );
                    fetchUser();
                }
                $('#update_user_btn').text('Add Blog');
                $('#edit_user_form')[0].reset();
                $('#editUserModal').modal('hide');

            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText); // Log the error response to the console
                // Handle the error condition here if needed
            }


        });
     
    });


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
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
                url: userDeleteUrl,
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
                    fetchUser();
                }
              })
            }
          });
    });
   });

    // edit user
