<ul class="list-group list-group-flush" id="todo-list">
    <?php foreach ($todolist as $key => $option): ?>
        <li class="list-group-item d-flex justify-content-between align-items-center" data-id="<?= $key ?>">
            <span class="handle" style="cursor: move;min-width: 15px;">
                <i class="fas fa-ellipsis-v"></i>
                <i class="fas fa-ellipsis-v"></i>
            </span>
            <div class="custom-control custom-checkbox ml-4">
                <input type="checkbox" <?= $option['is_done'] ? 'checked' : '' ?> class="custom-control-input"
                       id="<?= $key ?>" name="<?= $key ?>"/>
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
                        data-target="#edit-new-form"
                        data-description="<?= $option['description'] ?>">
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
                <form>
                    <div class="form-group">
                        <label for="description" class="col-form-label">Description:</label>
                        <input type="hidden" name="id" id="id">
                        <textarea class="form-control" name="description" id="description"></textarea>
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

        $('#edit-new-form').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var description = button.data('description'); // Extract info from data-* attributes
            var modal = $(this);
            modal.find('#description').val(description);

            var id = $(button).closest('li').data('id');
            modal.find('#id').val(id);
        }).on('click', '[type="submit"]', function (event) {
            var description = $('#description').val();
            var id = $('#id').val();
            $.ajax({
                url: '<?=app('url')->route('editDescTodoList');?>',
                method: 'POST',
                data: {id: id, description: description}
            });
            if (id) $('#' + id + "'").next('label').text(description);
        });

        var sortable = Sortable.create(document.getElementById('todo-list'), {
            animation: 150,
            handle: '.handle',
            ghostClass: 'bg-blue-light',
            filter: '.custom-control-input',
            // Changed sorting within list
            onUpdate: function (/**Event*/evt) {
                $.ajax({
                    url: '<?=app('url')->route('sortTodoList');?>',
                    method: 'POST',
                    data: {value: sortable.toArray()}
                });
                //todo change data id old && new
                // Sortable.utils.find(evt.target,'input')[0]
            },
            onFilter: function (evt) {
                var item = evt.item,
                    ctrl = evt.target;
                if (Sortable.utils.is(ctrl, ".custom-control-input")) {  // Click on edit link
                    $.ajax({
                        url: '<?=app('url')->route('editDoneTodoList');?>',
                        method: 'POST',
                        data: {key: ctrl.getAttribute('name'), value: !ctrl.checked}
                    }).done(function () {
                        //todo notification
                        $(this).addClass("done");
                    });
                }
            }
        });
    });
</script>