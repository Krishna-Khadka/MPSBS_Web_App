<script>
    $.ajaxSetup(
            { headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } }
    );


    fetchNotices();
    function fetchNotices() { $.ajax(
        { url: "{{ route('display.notices') }}",
        method: 'GET',
        success: function(res) {
            $('#allNoticeData').html(res.notices);
        }
     }
    );
    }


    $(document).ready(function(){
        $("#add_notice_form").submit(function(e){
            e.preventDefault();
            let fd = new FormData(this);

            $.ajax({
                url: "{{ route('add.notice') }}",
                method: "POST",
                data: fd,
                cache:false,
                processData: false,
                contentType:false,

                success: function(response){
                    if(response.status == 200){
                        Swal.fire(
                        'Added',
                        'New Event Added Successfully',
                        'success'
                    );
                    fetchNotices();
                    // console.log(res);
                    }
                    $('#add_notice_form')[0].reset();
                    $('#addNoticeModal').modal('hide');
                }
            })
        });
    });


    $(document).on('click','.editIcon',function(e){
        e.preventDefault();
        let id = $(this).attr('data-event-id');
        // alert(id);
        $.ajax({
            url: "{{ route('edit.notice') }}",
            method: 'GET',
            data: {id:id},

            success: function (res){
                // title, content, eventCategory, status, thumbnail, published_date, expiry_date, is_active
                // console.log(res);
                $("#notice_id").val(res.id);
                $("#title").val(res.title);
                $("#content").val(res.content);
                // $("#thumbnail").val(res.thumbnail);
                $("#published_date").val(res.published_date);
                $("#expiry_date").val(res.expiry_date);
                $("#is_active").val(res.is_active);
            }
        });
    });


    $('#edit_notice_form').submit(function(event) {
        event.preventDefault();
        const fd = new FormData(this);
        $.ajax({
            url: "{{ route('update.notice') }}",
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
                        "Notice updated successfully",
                        "success"
                    );
                    fetchNotices();
                }
                // $('#edit_post_category_btn').text('Add Blog');
                $('#edit_notice_form')[0].reset();
                $('#editNoticeModal').modal('hide');

            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText);
            }


        });

    });


    $(document).on('click','.deleteIcon',function(e) {
        e.preventDefault();
        let id = $(this).attr('data-event-id');
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
                url: "{{ route('delete.notice') }}",
                method: 'POST',
                data: {
                    id: id
                },
                success: function(res){
                    console.log(res);
                    Swal.fire(
                        'Deleted!',
                        'Notice has been deleted',
                        'success'
                    )
                    fetchNotices();
                }
              })
            }
        });
    });
</script>
