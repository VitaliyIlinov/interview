<ul class="list-group list-group-flush" id="todo-list">
    <?php foreach ($todolist as $key => $option): ?>
        <li class="list-group-item d-flex justify-content-between align-items-center"
            data-id="<?= $key ?>">
            <span class="handle" style="cursor: move;min-width: 15px;">
                <i class="fas fa-ellipsis-v"></i>
                <i class="fas fa-ellipsis-v"></i>
            </span>
            <div class="custom-control custom-checkbox ml-4">
                <input type="checkbox" class="custom-control-input"
                    <?= $option['is_done'] == 'true' ? 'checked' : '' ?>
                />
                <label class="custom-control-label"> <?= $option['description'] ?></label>
            </div>
            <?php if (isset($option['created_time'])): ?>
                <small class="badge badge-info ml-3">
                    <i class="far fa-clock"></i> <?= $option['created_time'] ?>
                </small>
            <?php endif; ?>
            <span class="btn-group ml-auto">
                <button class="btn btn-sx p-1"
                        data-toggle="modal"
                        data-url="<?= app('url')->route('editDescTodoList'); ?>"
                        data-target="#edit-new-form">
                    <i class="fas fa-edit"></i>
                </button
            </span>
        </li>
    <?php endforeach; ?>
</ul>

<div class="modal fade" id="edit-new-form" tabindex="-1" role="dialog" aria-labelledby="edit-new-form"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Todo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    <input type="hidden" name="id">
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
<style>
    .custom-control-input {
        position: absolute;
        opacity: 0;
        left: 0;
        width: 16px;
        height: 30px;
        z-index: 60;
    }
</style>
<script>
    $(function () {
        //todo not working data id
        $('#edit-new-form').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var li = $(button).closest('li');
            var form = $(this).find('form');

            form.attr('action', button.data('url'));
            form.find('[name="id"]').val(li.data('id'));
            form.find('[name="description"]').val(li.find('label').text());

        }).on('click', '[type="submit"]', function (event) {
            var form = $(event.delegateTarget).find('form');
            var id = form.find('[name="id"]').val();
            var description = form.find('[name="description"]').val();
            $.ajax({
                url: form.attr('action'),
                method: form.attr('method'),
                data: form.serialize(),
                success: function (data) {
                    //todo
                    console.log(data);
                },
            });
            if (id.length) {
                $('li[data-id="'+id+'"]').find('label').text(description);
            } else {
                var clone = $('#todo-list li').last().clone();
                clone.find('label').text(description);
                clone.attr('data-id', ++clone.data().id);
                clone.appendTo("#todo-list");
            }
        });

        var sortable = Sortable.create(document.getElementById('todo-list'), {
            animation: 150,
            handle: '.handle',
            ghostClass: 'bg-blue-light',
            filter: '.custom-control-input',
            onUpdate: function (/**Event*/evt) {
                console.log(sortable.toArray());
                $.ajax({
                    url: '<?=app('url')->route('sortTodoList');?>',
                    method: 'POST',
                    data: {value: sortable.toArray()},
                    success: function (data) {
                        // window.location = self.location.href;
                        console.log(data);
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
                console.log(evt);
                if (Sortable.utils.is(ctrl, ".custom-control-input")) {  // Click on edit link
                    $.ajax({
                        url: '<?=app('url')->route('editDoneTodoList');?>',
                        method: 'POST',
                        data: {key: item.dataset.id, value: !ctrl.checked},
                        success: function (data) {
                            console.log(data);
                        },
                    });
                }
            }
        });
    });
</script>