<script>
    fetchArchive();
    function fetchArchive() { $.ajax(
        { url: "{{ route('display.archive') }}",
        method: 'GET',
        success: function(res) { // console.log(res);
            $('#allData').html(res.archives);
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
</script>
