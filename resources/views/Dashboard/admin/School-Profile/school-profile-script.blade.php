<script>
    $('#schoolInformationForm').submit(function(event) {
        event.preventDefault();
        const fd = new FormData(this);
        $.ajax({
            url: "{{ route('school-info.update') }}",
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
                        "School Information updated successfully",
                        "success"
                    );
                    // fetchEvents();
                }
                // $('#edit_post_category_btn').text('Add Blog');
                $('#schoolInformationForm')[0].reset();
                // $('#updateEventModal').modal('hide');

            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText);
            }
        });

    });


    $('#contactInfoForm').submit(function(event) {
        event.preventDefault();
        const fd = new FormData(this);
        $.ajax({
            url: "{{ route('contact-info.update') }}",
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
                        "Contact Information updated successfully",
                        "success"
                    );
                    // fetchEvents();
                }
                // $('#edit_post_category_btn').text('Add Blog');
                $('#contactInfoForm')[0].reset();
            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText);
            }
        });

    });

</script>
