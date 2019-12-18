<div class="container-fluid dashboard-content">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <?php require resource_path('helpers/admin/breadcrump.php'); ?>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    Toastr
                </div>
                <div class="hr-line-dashed"></div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="control-label" for="title">Title</label>
                                <input class="form-control" id="title" type="text" placeholder="Enter a title ...">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="message">Message</label>
                                <textarea class="form-control" id="message" rows="3"
                                          placeholder="Enter a message ..."></textarea>
                            </div>
                            <div class="checkbox">
                                <label class="checkbox" for="closeButton">
                                    <input id="closeButton" type="checkbox" value="checked">
                                    Close Button
                                </label>
                            </div>
                            <div class="checkbox">
                                <label class="checkbox" for="addBehaviorOnToastClick">
                                    <input id="addBehaviorOnToastClick" type="checkbox" value="checked">
                                    Add behavior on toast click
                                </label>
                            </div>
                            <div class="checkbox">
                                <label class="checkbox" for="debugInfo">
                                    <input id="debugInfo" type="checkbox" value="checked">
                                    Debug
                                </label>
                            </div>
                            <div class="checkbox">
                                <label class="checkbox" for="progressBar">
                                    <input id="progressBar" type="checkbox" value="checked">
                                    Progress Bar
                                </label>
                            </div>
                            <div class="checkbox">
                                <label class="checkbox" for="preventDuplicates">
                                    <input id="preventDuplicates" type="checkbox" value="checked">
                                    Prevent Duplicates
                                </label>
                            </div>
                            <div class="checkbox">
                                <label class="checkbox" for="addClear">
                                    <input id="addClear" type="checkbox" value="checked">
                                    Add button to force clearing a toast, ignoring focus
                                </label>
                            </div>
                            <div class="checkbox">
                                <label class="checkbox" for="newestOnTop">
                                    <input id="newestOnTop" type="checkbox" value="checked">
                                    Newest on top
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="control-group" id="toastTypeGroup">
                                <label>Toast type</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="toasts" value="success" checked="">
                                        Success
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="toasts" value="info">
                                        Info
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="toasts" value="warning">
                                        Warning
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="toasts" value="error">
                                        Error
                                    </label>
                                </div>
                            </div>
                            <div class="control-group" id="positionGroup">
                                <label>Toast position</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="position" value="toast-top-right">
                                        Top Right
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="position" value="toast-bottom-right">
                                        Bottom Right
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="position" value="toast-bottom-left">
                                        Bottom Left
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="position" value="toast-top-left">
                                        Top Left
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="position" value="toast-top-full-width">
                                        Top Full Width
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="position" value="toast-bottom-full-width">
                                        Bottom Full Width
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="position" value="toast-top-center">
                                        Top Center
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="position" value="toast-bottom-center">
                                        Bottom Center
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="control-group">
                                <div class="form-group">
                                    <label class="control-label" for="showEasing">Show Easing</label>
                                    <input class="form-control" id="showEasing" type="text" placeholder="swing, linear"
                                           value="swing">
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="hideEasing">Hide Easing</label>
                                    <input class="form-control" id="hideEasing" type="text" placeholder="swing, linear"
                                           value="linear">
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="showMethod">Show Method</label>
                                    <input class="form-control" id="showMethod" type="text"
                                           placeholder="show, fadeIn, slideDown" value="fadeIn">
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="hideMethod">Hide Method</label>
                                    <input class="form-control" id="hideMethod" type="text"
                                           placeholder="hide, fadeOut, slideUp" value="fadeOut">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="control-group">
                                <div class="form-group">
                                    <label class="control-label" for="showDuration">Show Duration</label>
                                    <input class="form-control" id="showDuration" type="text" placeholder="ms"
                                           value="300">
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="hideDuration">Hide Duration</label>
                                    <input class="form-control" id="hideDuration" type="text" placeholder="ms"
                                           value="1000">
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="timeOut">Time out</label>
                                    <input class="form-control" id="timeOut" type="text" placeholder="ms" value="5000">
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="extendedTimeOut">Extended time out</label>
                                    <input class="form-control" id="extendedTimeOut" type="text" placeholder="ms"
                                           value="1000">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" id="showtoast" type="button">Show Toast</button>
                    <button class="btn btn-danger" id="cleartoasts" type="button">Clear Toasts</button>
                    <button class="btn btn-danger" id="clearlasttoast" type="button">Clear Last Toast</button>
                    <div style="margin-top: 25px;">
                        <pre id="toastrOptions"></pre>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(function () {
        var i = -1;
        var toastCount = 0;
        var $toastlast;

        var getMessage = function () {
            var msgs = ['My name is Inigo Montoya. You killed my father. Prepare to die!',
                '<div><input class="input-small" value="textbox"/>&nbsp;<a href="http://johnpapa.net" target="_blank">This is a hyperlink</a></div><div><button type="button" id="okBtn" class="btn btn-primary">Close me</button><button type="button" id="surpriseBtn" class="btn" style="margin: 0 8px 0 8px">Surprise me</button></div>',
                'Are you the six fingered man?',
                'Inconceivable!',
                'I do not think that means what you think it means.',
                'Have fun storming the castle!'
            ];
            i++;
            if (i === msgs.length) {
                i = 0;
            }

            return msgs[i];
        };

        var getMessageWithClearButton = function (msg) {
            msg = msg ? msg : 'Clear itself?';
            msg += '<br /><br /><button type="button" class="btn clear">Yes</button>';
            return msg;
        };

        $('#showtoast').click(function () {
            var shortCutFunction = $("#toastTypeGroup input:radio:checked").val();
            var msg = $('#message').val();
            var title = $('#title').val() || '';
            var $showDuration = $('#showDuration');
            var $hideDuration = $('#hideDuration');
            var $timeOut = $('#timeOut');
            var $extendedTimeOut = $('#extendedTimeOut');
            var $showEasing = $('#showEasing');
            var $hideEasing = $('#hideEasing');
            var $showMethod = $('#showMethod');
            var $hideMethod = $('#hideMethod');
            var toastIndex = toastCount++;
            var addClear = $('#addClear').prop('checked');

            toastr.options = {
                closeButton: $('#closeButton').prop('checked'),
                debug: $('#debugInfo').prop('checked'),
                newestOnTop: $('#newestOnTop').prop('checked'),
                progressBar: $('#progressBar').prop('checked'),
                positionClass: $('#positionGroup input:radio:checked').val() || 'toast-top-right',
                preventDuplicates: $('#preventDuplicates').prop('checked'),
                onclick: null
            };

            if ($('#addBehaviorOnToastClick').prop('checked')) {
                toastr.options.onclick = function () {
                    alert('You can perform some custom action after a toast goes away');
                };
            }

            if ($showDuration.val().length) {
                toastr.options.showDuration = $showDuration.val();
            }

            if ($hideDuration.val().length) {
                toastr.options.hideDuration = $hideDuration.val();
            }

            if ($timeOut.val().length) {
                toastr.options.timeOut = addClear ? 0 : $timeOut.val();
            }

            if ($extendedTimeOut.val().length) {
                toastr.options.extendedTimeOut = addClear ? 0 : $extendedTimeOut.val();
            }

            if ($showEasing.val().length) {
                toastr.options.showEasing = $showEasing.val();
            }

            if ($hideEasing.val().length) {
                toastr.options.hideEasing = $hideEasing.val();
            }

            if ($showMethod.val().length) {
                toastr.options.showMethod = $showMethod.val();
            }

            if ($hideMethod.val().length) {
                toastr.options.hideMethod = $hideMethod.val();
            }

            if (addClear) {
                msg = getMessageWithClearButton(msg);
                toastr.options.tapToDismiss = false;
            }
            if (!msg) {
                msg = getMessage();
            }

            $('#toastrOptions').text('Command: toastr["'
                + shortCutFunction
                + '"]("'
                + msg
                + (title ? '", "' + title : '')
                + '")\n\ntoastr.options = '
                + JSON.stringify(toastr.options, null, 2)
            );

            var $toast = toastr[shortCutFunction](msg, title); // Wire up an event handler to a button in the toast, if it exists
            $toastlast = $toast;

            if (typeof $toast === 'undefined') {
                return;
            }

            if ($toast.find('#okBtn').length) {
                $toast.delegate('#okBtn', 'click', function () {
                    alert('you clicked me. i was toast #' + toastIndex + '. goodbye!');
                    $toast.remove();
                });
            }
            if ($toast.find('#surpriseBtn').length) {
                $toast.delegate('#surpriseBtn', 'click', function () {
                    alert('Surprise! you clicked me. i was toast #' + toastIndex + '. You could perform an action here.');
                });
            }
            if ($toast.find('.clear').length) {
                $toast.delegate('.clear', 'click', function () {
                    toastr.clear($toast, {force: true});
                });
            }
        });

        function getLastToast() {
            return $toastlast;
        }

        $('#clearlasttoast').click(function () {
            toastr.clear(getLastToast());
        });
        $('#cleartoasts').click(function () {
            toastr.clear();
        });
    })
</script>