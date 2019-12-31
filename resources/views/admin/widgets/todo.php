<style>
    .custom-control-input {
        left: 0;
        width: 16px;
        height: 30px;
        z-index: 60;
    }
</style>
<div class="card">
    <div class="card-body p-0">
        <ul class="list-group list-group-flush" id="<?= $action ?>">
            <?php foreach ($list as $key => $option): ?>
                <li class="list-group-item d-flex justify-content-between align-items-center"
                    data-id="<?= $key ?>">
            <span class="handle" style="cursor: move;min-width: 15px;">
                <i class="fas fa-ellipsis-v"></i>
                <i class="fas fa-ellipsis-v"></i>
            </span>
                    <div class="custom-control custom-checkbox ml-3">
                        <input type="checkbox" class="custom-control-input"
                               <?= $option['is_done'] == 'true' ? 'checked' : '' ?>
                        />
                        <label class="custom-control-label"
                               style="word-break: break-word;"><?= $option['description']; ?></label>
                    </div>
                    <?php if (isset($option['created_time'])): ?>
                        <small class="badge-info ml-3 position-absolute" style="right: 0;top:0">
                            <i class="far fa-clock"></i> <?= $option['created_time'] ?>
                        </small>
                    <?php endif; ?>
                    <span class="btn-group ml-auto">
                        <button class="btn btn-sx p-1"
                                data-toggle="modal"
                                data-method="patch"
                                data-url="<?= url("admin_panel/ajax/{$action}/edit_desc") ?>"
                                data-target="#<?= $action ?>_form">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="btn btn-sx p-1"
                                data-toggle="modal"
                                data-method="delete"
                                data-url="<?= url("admin_panel/ajax/{$action}/delete") ?>"
                                data-target="#<?= $action ?>_form">
                            <i class="fas fa-trash"></i>
                        </button>
                     </span>
                </li>
            <?php endforeach; ?>
        </ul>

        <div class="modal fade edit-new-form" id="<?= $action ?>_form" tabindex="-1" role="dialog"
             aria-labelledby="edit-new-form"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Todo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="">
                            <input type="hidden" name="id">
                            <h5 style="display:none;">Are yo sure?</h5>
                            <div class="form-group">
                                <label for="description" class="col-form-label">Description:</label>
                                <textarea class="form-control" name="description"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" data-dismiss="modal">Send message</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-footer clearfix">
        <button type="button"
                data-url="<?= url("admin_panel/ajax/{$action}/new_desc") ?>"
                data-toggle="modal"
                data-method="post"
                data-target="#<?= $action ?>_form"
                class="btn btn-info float-right">
            <i class="fas fa-plus"></i>
            Add item
        </button>
    </div>
</div>
<script>
    $(function () {
        //todo not working data id
        $('#<?= $action ?>_form').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var li = $(button).closest('li');
            var form = $(this).find('form');
            form.attr('action', button.data('url'));
            form.attr('method', button.data('method'));
            form.find('[name="id"]').val(li.data('id'));
            form.find('[name="description"]').val(li.find('label').text());
            if(form.attr('method')==='delete'){
                form.find('h5').show().next('div').hide();
            }else{
                form.find('h5').hide().next('div').show();
            }

        }).on('click', '[type="submit"]', function (event) {
            var modal = $(event.delegateTarget);
            var form = modal.find('form');
            var id = form.find('[name="id"]').val();
            var description = form.find('[name="description"]').val();
            $.ajax({
                url: form.attr('action'),
                method: form.attr('method'),
                data: form.serialize(),
                success: function (data) {
                    //delete
                    if(form.attr('method')==='delete'){
                        modal.prev('ul').find('li[data-id="' + id + '"]').remove();
                    }//new
                    else if (id !== '' || id.length) {
                        modal.prev('ul').find('li[data-id="' + id + '"]').find('label').text(description);
                    }
                    else {
                        clone = modal.prev('ul').children().last().clone();
                        clone.find('label').text(description);
                        clone.attr('data-id', ++clone.data().id);
                        clone.appendTo('#<?= $action ?>');
                    }
                    toastr.options.progressBar = true;
                    toastr.success('All is OK')
                },
                error: function (data) {
                    alert(data.responseJSON.message);
                },
            });


        });

        var sortable = Sortable.create(document.getElementById('<?=$action?>'), {
            animation: 150,
            handle: '.handle',
            ghostClass: 'bg-blue-light',
            filter: '.custom-control-input',
            onUpdate: function (/**Event*/evt) {
                console.log(sortable.toArray());
                $.ajax({
                    url: '<?= url("admin_panel/ajax/{$action}/sort") ?>',
                    method: 'PUT',
                    data: {value: sortable.toArray()},
                    success: function (data) {
                        toastr.options.progressBar = true;
                        toastr.success('All is OK')
                    },
                    error: function (data) {
                        alert(data.responseJSON.message);
                    },
                });
                //todo
                var li = evt.from.getElementsByTagName("li");
                for (var i = 0; i < li.length; i++) {
                    li[i].dataset.id = i;
                }

            },
            onFilter: function (evt) {
                var ctrl = evt.target,
                    item = evt.item;
                if (Sortable.utils.is(ctrl, ".custom-control-input")) {  // Click on edit link
                    $.ajax({
                        url: '<?= url("admin_panel/ajax/{$action}/edit_done") ?>',
                        method: 'PATCH',
                        data: {id: item.dataset.id, is_done: !ctrl.checked},
                        success: function (data) {
                            console.log(data);
                            toastr.options.progressBar = true;
                            toastr.success('All is OK')
                        },
                        error: function (data) {
                            alert(data.responseJSON.message);
                        },
                    });
                }
            }
        });
    });
</script>