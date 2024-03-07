<script>
     $.ajaxSetup(
            { headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } }
    );


    fetchTeams();
    function fetchTeams() { $.ajax(
        { url: "{{ route('display.teams') }}",
        method: 'GET',
        success: function(res) { // console.log(res);
            $('#allData').html(res.teams);
        }
     }
    );
    }


    $(document).ready(function(){
        $("#add_team_form").submit(function(e){
            e.preventDefault();
            let fd = new FormData(this);

            $.ajax({
                url: "{{ route('add.team') }}",
                method: "POST",
                data: fd,
                cache:false,
                processData: false,
                contentType:false,

                success: function(response){
                    if(response.status == 200){
                        Swal.fire(
                        'Added',
                        'New Team Added Successfully',
                        'success'
                    );
                    fetchTeams();
                    // console.log(res);
                    }
                    $('#add_team_form')[0].reset();
                    $('#addTeamsModal').modal('hide');
                }
            })
        });
    });

    $(document).on('click','.editIcon',function(e){
        e.preventDefault();
        let id = $(this).attr('data-event-id');
        // alert(id);
        $.ajax({
            url: "{{ route('edit.teams') }}",
            method: 'GET',
            data: {id:id},

            success: function (res){
                console.log(res.DOJ);
                $("#team_id").val(res.id);
                $("#name").val(res.name);
                $("#Tcontact").val(res.contact);
                $("#Taddress").val(res.address);
                $("#Temail").val(res.email);
                $("#Tfacebook_url").val(res.facebook_url);
                $("#Tinstagram_url").val(res.instagram_url);
                $("#Tposition").val(res.position);
                $("#Trole").val(res.role);
                $("#Tis_active").val(res.is_active);
                $("#Tphoto").val(res.photo);
                $("#DOJ").val(res.DOJ);


            }
        });
    });


    // update team
    $('#edit_team_member_form').submit(function(event) {
        event.preventDefault();
        const fd = new FormData(this);
        $.ajax({
            url: "{{ route('update.team') }}",
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
                        "Team updated successfully!!",
                        "success"
                    );
                    fetchTeams();
                }
                // $('#edit_post_category_btn').text('Add Blog');
                $('#edit_team_member_form')[0].reset();
                $('#editTeamModal').modal('hide');

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
                url: "{{ route('delete.team') }}",
                method: 'POST',
                data: {
                    id: id
                },
                success: function(res){
                    console.log(res);
                    Swal.fire(
                        'Deleted!',
                        'Team has been deleted',
                        'success'
                    )
                    fetchTeams();
                }
              })
            }
        });
    });
</script>
