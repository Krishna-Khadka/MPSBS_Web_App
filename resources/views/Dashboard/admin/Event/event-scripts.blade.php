<script>

    ClassicEditor
        .create( document.querySelector( '.editorEvent' ) )
        .catch( error => {
            console.error( error );
        } );

        ClassicEditor
        .create( document.querySelector( '.UpdateEditorEvent' ) )
        .catch( error => {
            console.error( error );
        } );




    fetchEvents();
    function fetchEvents() { $.ajax(
        { url: "{{ route('display.event') }}",
        method: 'GET',
        success: function(res) { // console.log(res);
            $('#allData').html(res.events);
        }
     }
    );
    }

    $(document).ready(function(){
        $("#add_event_form").submit(function(e){
            e.preventDefault();
            let fd = new FormData(this);

            $.ajax({
                url: "{{ route('add.event') }}",
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
                    fetchEvents();
                    // console.log(res);
                    }
                    $('#add_event_form')[0].reset();
                    $('#addEventModal').modal('hide');
                }
            })
        });
    });


    $(document).on('click','.editIcon',function(e){
        e.preventDefault();
        let id = $(this).attr('data-event-id');
        // alert(id);
        $.ajax({
            url: "{{ route('edit.event') }}",
            method: 'GET',
            data: {id:id},

            success: function (res){
                // console.log(res);
                $("#event_id").val(res.id);
                $("#eventTitle").val(res.title);
                $("#EeventCategory").val(res.event_category_id);
                $("#Estatus").val(res.status);
                $("#Edescription").val(res.description);
                // $("#Eimage_url").val(res.image_url);
                $("#EeventDate").val(res.event_date);
                $("#EstartTime").val(res.start_time);
                $("#EendTime").val(res.end_time);
            }
        });
    });

        $.ajaxSetup(
            { headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } }
        );



    // update Events
    $('#updateEventForm').submit(function(event) {
        event.preventDefault();
        const fd = new FormData(this);
        $.ajax({
            url: "{{ route('update.event') }}",
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
                        "Event updated successfully",
                        "success"
                    );
                    fetchEvents();
                }
                // $('#edit_post_category_btn').text('Add Blog');
                $('#updateEventForm')[0].reset();
                $('#updateEventModal').modal('hide');

            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText);
            }


        });

    });


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
                url: "{{ route('delete.event') }}",
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
                    fetchEvents();
                }
              })
            }
        });
    });
</script>

<script>

    fetchEventCategory();
    function fetchEventCategory(){
        $.ajax({
            url: "{{ route('display.eventCategory') }}",
            method: 'GET',
            success: function(res){
                $("#allCategoryData").html(res.categories);
            }

        });
    }



    $(document).ready(function(){
        $("#add_eventCategory_form").submit(function(e){
            e.preventDefault();
            // alert("hello!");
            let fd = new FormData(this);

            $.ajax({
                url: "{{ route('event.category') }}",
                method: "POST",
                data: fd,
                cache:false,
                processData: false,
                contentType:false,

                success: function(response){
                    if(response.status == 200){
                        Swal.fire(
                        'Added',
                        'New Category Added Successfully',
                        'success'
                    );
                    fetchEventCategory();
                    // console.log(res);
                    }
                    $('#add_eventCategory_form')[0].reset();
                }
            })
        });
    });


    $(document).on('click','.editIconEC',function(e){
        e.preventDefault();
        let id = $(this).attr('data-event-id');
        $.ajax({
            url: "{{ route('edit.eventCategory') }}",
            method: 'GET',
            data: {id:id},

            success: function (res){
                // console.log(res);
                $("#event_category_id").val(res.id);
                $("#ECTitle").val(res.title);
                $("#ECDescription").val(res.description);
            }

        });
    });


    // update user
    $('#edit_eventCategory_form').submit(function(event) {
        event.preventDefault();
        const fd = new FormData(this);
        // $("#edit_post_category_btn").text('Updating...');
        $.ajax({
            url: "{{ route('update.eventCategory') }}",
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
                        "Category updated successfully",
                        "success"
                    );
                    fetchEventCategory();
                }
                // $('#edit_post_category_btn').text('Add Blog');
                $('#edit_eventCategory_form')[0].reset();
                $('#editEventCategoryModal').modal('hide');

            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText); // Log the error response to the console
                // Handle the error condition here if needed
            }


        });
    });





    // delete Event Categories
    $(document).on('click','.deleteIconEC',function(e) {
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
                url: "{{ route('delete.eventCategory') }}",
                method: 'POST',
                data: {
                    id: id
                },
                success: function(res){
                    console.log(res);
                    Swal.fire(
                        'Deleted!',
                        'Event Category been deleted',
                        'success'
                    )
                    fetchEventCategory();
                }
              })
            }
          });
    });
</script>
