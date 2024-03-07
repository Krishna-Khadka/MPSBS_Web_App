<script>
    fetchGalleryCategory();

    function fetchGalleryCategory() {
        $.ajax({
            url: "{{ route('display.gallery.category') }}",
            method: 'GET',
            success: function(res) {
                // console.log(res);
                $('#allGalleryCategoryData').html(res.category);
            }
        });
    }


    $(document).ready(function() {
        $("#add_gallery_category_form").submit(function(e) {
            e.preventDefault();
            let fd = new FormData(this);

            $.ajax({
                url: "{{ route('add.gallery.category') }}",
                method: "POST",
                data: fd,
                cache: false,
                processData: false,
                contentType: false,

                success: function(response) {
                    if (response.status == 200) {
                        Swal.fire(
                            'Added',
                            'New Event Added Successfully',
                            'success'
                        );
                        fetchGalleryCategory();
                        // console.log(res);
                    }
                    $('#add_gallery_category_form')[0].reset();
                    // $('#addEventModal').modal('hide');
                }
            })
        });
    });
</script>


<script>
    fetchGallery();
    function fetchGallery() {
        $.ajax({
            url: "{{ route('display.image.gallery') }}",
            method: 'GET',
            success: function(res) {
                // console.log(res);
                $('#allData').html(res.galleries);
            }
        });
    }

    $(document).ready(function() {
        $("#add_gallery_form").submit(function(e) {
            e.preventDefault();
            let fd = new FormData(this);

            $.ajax({
                url: "{{ route('create.gallery') }}",
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
                        fetchGallery();
                        // console.log(res);
                    }
                    $('#add_gallery_form')[0].reset();
                    $('#createGalleryModal').modal('hide');
                }
            })
        });
    });



    $.ajaxSetup(
            { headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } }
        );

    // delete gallery
    $(document).on('click','.deleteIconG',function(e) {
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
                url: "{{ route('delete.gallery') }}",
                method: 'POST',
                data: {
                    id: id
                },
                success: function(res){
                    console.log(res);
                    Swal.fire(
                        'Deleted!',
                        'Event has been deleted',
                        'success'
                    )
                    fetchGallery();
                }
              })
            }
        });
    });
</script>
