<div class="container">
    <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Open Modal</button>

    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="form" enctype="multipart/form-data" role="form">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title">Upload Photo</h4>
                    </div>
                    <div class="modal-body">
                        <div id="messages"></div>
                        <input type="file" name="file" id="file">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

<script>
    $('#form').submit(function(e) {

        var form = $(this);
        var formdata = false;
        if(window.FormData){
            formdata = new FormData(form[0]);
        }

        var formAction = form.attr('action');

        $.ajax({
            type        : 'POST',
            url         : 'post.php',
            cache       : false,
            data        : formdata ? formdata : form.serialize(),
            contentType : false,
            processData : false,

            success: function(response) {
                if(response != 'error') {
                    //$('#messages').addClass('alert alert-success').text(response);
                    // OP requested to close the modal
                    $('#myModal').modal('hide');
                } else {
                    $('#messages').addClass('alert alert-danger').text(response);
                }
            }
        });
        e.preventDefault();
    });
</script>