<script>

$(document).ready(function(){
        $("#contact_form").submit(function(e){
            e.preventDefault();
            let fd = new FormData(this);


            $.ajax({
                url: "{{ route('save.contact') }}",
                method: "POST",
                data: fd,
                cache:false,
                processData: false,
                contentType:false,

                success: function(response){
                    if(response.status == 200){

                        let toast = `
                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="true">
                            <div class="toast-header">
                                <img src="..." class="rounded me-2" alt="...">
                                <strong class="me-auto">Bootstrap</strong>
                                <small>11 mins ago</small>
                                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                            <div class="toast-body">
                                Your message here
                            </div>
                        </div>
                    `;
                    // Append toast to the body
                    $('body').append(toast);
                    // Initialize Bootstrap toast
                    $('.toast').toast('show');

                    }
                    $('#contact_form')[0].reset();
                }
            })
        });
    });

</script>

