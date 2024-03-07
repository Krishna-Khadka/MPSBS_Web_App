<script>
    fetchMessage();
    function fetchMessage() {
        $.ajax({
        url: "{{ route('display.messages') }}",
        method: 'GET',
        success: function(res) {
            // console.log(res);
            $('#allData').html(res.messages);
        }
     }
    );
    }


    $(document).ready(function() {
        $("#add_archive_form").submit(function(e) {
            e.preventDefault();
            let fd = new FormData(this);

            $.ajax({
                url: "{{ route('add.archive') }}",
                method: "POST",
                data: fd,
                cache: false,
                processData: false,
                contentType: false,

                success: function(response) {
                    if (response.status == 200) {
                        console.log(response);
                        // Swal.fire(
                        //     'Added',
                        //     'New Event Added Successfully',
                        //     'success'
                        // );
                        // fetchGalleryCategory();
                        // console.log(res);
                    }
                    $('#add.archive')[0].reset();
                    $('#addArchiveModal').modal('hide');
                }
            })
        });
    });


    $.ajaxSetup(
            { headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } }
        );

     // delete scripts
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
                url: "{{ route('delete.message') }}",
                method: 'POST',
                data: {
                    id: id
                },
                success: function(res){
                    console.log(res);
                    Swal.fire(
                        'Deleted!',
                        'Message has been deleted',
                        'success'
                    )
                    fetchMessage();
                }
              })
            }
        });
    });
</script>
