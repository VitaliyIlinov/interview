<link href="/libs/codemirror-5.50.2/lib/codemirror.css"  rel="stylesheet">
<style>
    .CodeMirror{
        height: auto;
    }
</style>
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
                    <textarea id="editor" class="form-control" name="content" rows="30"></textarea>
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

    $('#contentEdit').one('show.bs.modal', function (e) {
        var modal = $(this);
        $.ajax({
            url: "/content/read?path=<?=$path;?>",
            method: 'get',
            success: function (data) {
                modal.find('.modal-body textarea').val(data);
                var editor = CodeMirror.fromTextArea(document.getElementById("editor"), {
                    lineNumbers: true,
                    autoRefresh: true,
                });
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
<script src="/libs/codemirror-5.50.2/lib/codemirror.js"></script>
<script src="/libs/codemirror-5.50.2/addon/display/autorefresh.js"></script>
<script src="/libs/codemirror-5.50.2/mode/xml/xml.js"></script>
<script src="/libs/codemirror-5.50.2/mode/javascript/javascript.js"></script>
<script src="/libs/codemirror-5.50.2/mode/css/css.js"></script>
<script src="/libs/codemirror-5.50.2/mode/htmlmixed/htmlmixed.js"></script>