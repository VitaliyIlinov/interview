<ul class="list-group list-group-flush" id="todo-list">
    <?php foreach ($todolist as $key => $option): ?>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <span class="handle" style="cursor: move">
                <i class="fas fa-ellipsis-v"></i>
                <i class="fas fa-ellipsis-v"></i>
            </span>
            <div class="custom-control custom-checkbox ml-4">
                <input type="checkbox" <?= $option['is_done'] ? 'checked' : '' ?> class="custom-control-input"
                       id="<?= $key ?>" name="<?= $key ?>"/>
                <label class="custom-control-label"> <?= $option['description'] ?></label>
            </div>
            <!--            <small class="badge badge-info ml-3">-->
            <!--                <i class="far fa-clock"></i> 2 mins-->
            <!--            </small>-->

            <span class="btn-group ml-auto">
                <button class="btn btn-sx p-1"><i class="fas fa-edit"></i></button
            </span>
        </li>
    <?php endforeach; ?>
</ul>
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
        var sortable = Sortable.create(document.getElementById('todo-list'), {
            animation: 150,
            handle: '.handle',
            ghostClass: 'bg-blue-light',
            filter: '.fa-edit, .custom-control-input',
            // Changed sorting within list
            onUpdate: function (/**Event*/evt) {
                var input = Sortable.utils.find(evt.item, 'input')[0];
                console.log(evt);
            },
            onFilter: function (evt) {
                var item = evt.item,
                    ctrl = evt.target;

                if (Sortable.utils.is(ctrl, ".fa-edit")) {  // Click on remove button
                    console.log(item);
                    console.log(ctrl);
                    // item.parentNode.removeChild(item); // remove sortable item
                } else if (Sortable.utils.is(ctrl, ".custom-control-input")) {  // Click on edit link
                    console.log(item);
                    console.log(ctrl);
                    $.ajax({
                        //url: <?php //redirect()->route('changeTodoList');?>//,
                        url: 'http://test.com/admin_panel/ajax/change_todo_list',
                        method: 'POST',
                        data: {key: ctrl.getAttribute('name'), value: !ctrl.checked}
                    }).done(function () {
                        $(this).addClass("done");
                    });
                }
            }
        });

    });
</script>