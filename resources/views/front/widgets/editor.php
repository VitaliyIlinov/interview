<!-- Button trigger modal -->
<button type="button" style="background: rgba(47,57,84,.6); top: 100px;right: 0" class="btn position-fixed" data-toggle="modal" data-target="#contentEdit">
    <i class="fa fa-cog fa-2x"> </i>
</button>

<!-- Modal -->
<div class="modal fade" id="contentEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    <textarea class="form-control" name="content" rows="22"></textarea>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" data-dismiss="modal">Save changes</button>
            </div>
        </div>
    </div>
</div>
<script>
    $('#contentEdit').on('shown.bs.modal', function (e) {
        var modal = $(this);
        $.ajax({
            url: "/content/read?path=<?=$path;?>",
            method: 'get',
            success: function (data) {
                modal.find('.modal-body textarea').val(data);
            },
            error:function (data) {
                alert(data.responseJSON.message);
            },
        });
    }).on('click', '[type="submit"]', function (event) {
        var form = $(event.delegateTarget).find('form');
        $.ajax({
            url: "/content/save",
            method: 'put',
            data:{
                path:'<?=$path;?>',
                content: form.find('textarea').val()
            },
            success: function (data) {
                location.reload();
            },
            error:function (data) {
                alert(data.responseJSON.message);
            },
        })
    });
</script>