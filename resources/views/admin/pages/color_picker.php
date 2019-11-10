<link href="/libs/bootstrap-colorpicker/claviska/jquery-minicolors/jquery.minicolors.css" rel="stylesheet">

<div class="container-fluid dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <?php require resource_path('helpers/admin/breadcrump.php'); ?>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end pageheader -->
    <!-- ============================================================== -->

    <div class="row">
        <!-- ============================================================== -->
        <!-- minicolors -->
        <!-- ============================================================== -->
        <div class="col-xl-6 col-lg-6 col-md-6 col-12 col-12">
            <div class="card">
                <h5 class="card-header">Minicolors</h5>
                <div class="card-body">
                    <h4 class="card-title">Control Types</h4>
                    <div class="form-group">
                        <label for="hue-demo">Hue (default)</label>
                        <input type="text" id="hue-demo" class="form-control demo" data-control="hue" value="#ff6161">
                    </div>
                    <div class="form-group">
                        <label for="saturation-demo">Saturation</label>
                        <input type="text" id="saturation-demo" class="form-control demo" data-control="saturation"
                               value="#0088cc">
                    </div>
                    <div class="form-group">
                        <label for="brightness-demo">Brightness</label>
                        <input type="text" id="brightness-demo" class="form-control demo" data-control="brightness"
                               value="#00ffff">
                    </div>
                    <div class="form-group">
                        <label for="wheel-demo">Wheel</label>
                        <input type="text" id="wheel-demo" class="form-control demo" data-control="wheel"
                               value="#ff99ee">
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end minicolors -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- input modes -->
        <!-- ============================================================== -->
        <div class="col-xl-6 col-lg-6 col-md-6 col-12 col-12">
            <div class="card">
                <h5 class="card-header">Input Modes</h5>
                <div class="card-body">
                    <div class="form-group">
                        <label for="textfield">Text field</label>
                        <br>
                        <input type="text" id="textfield" class="form-control demo" value="#70c24a">
                    </div>
                    <div class="form-group">
                        <label for="hiddeninput">Hidden Input</label>
                        <br>
                        <input type="hidden" id="hiddeninput" class="demo" value="#db913d">
                    </div>
                    <div class="form-group">
                        <label for="inline">Inline</label>
                        <br>
                        <input type="text" id="inline" class="form-control demo" data-inline="true" value="#4fc8db">
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end input modes -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- positions -->
        <!-- ============================================================== -->
        <div class="col-xl-6 col-lg-6 col-md-6 col-12 col-12">
            <div class="card">
                <h5 class="card-header">Positions</h5>
                <div class="card-body">
                    <h6 class="card-subtitle">Valid positions include bottom left, bottom right, top left, and top
                        right.</h6>
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label for="position-bottom-left">bottom left (default)</label>
                                <input type="text" id="position-bottom-left" class="form-control demo"
                                       data-position="bottom left" value="#0088cc">
                            </div>
                            <div class="form-group">
                                <label for="position-top-left">top left</label>
                                <input type="text" id="position-top-left" class="form-control demo"
                                       data-position="top left" value="#0088cc">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label for="position-bottom-right">bottom right</label>
                                <input type="text" id="position-bottom-right" class="form-control demo"
                                       data-position="bottom right" value="#0088cc">
                            </div>
                            <div class="form-group">
                                <label for="position-top-right">top right</label>
                                <input type="text" id="position-top-right" class="form-control demo"
                                       data-position="top right" value="#0088cc">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end positions -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- RGB (A) -->
        <!-- ============================================================== -->
        <div class="col-xl-6 col-lg-6 col-md-6 col-12 col-12">
            <div class="card">
                <h5 class="card-header">RGB(A)</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="rgb">RGB</label>
                                <h6 class="help-block text-muted font-light">
                                    RGB input can be assigned by setting the <code>format</code> option
                                    to <code>rgb</code>.
                                </h6>
                                <input type="text" id="rgb" class="form-control demo" data-format="rgb"
                                       value="rgb(33, 147, 58)">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="rgba">RGBA</label>
                                <h6 class="help-block text-muted font-light">
                                    RGBA input can be assigned by setting the <code>format</code>
                                    option to <code>rgb</code> and <code>opacity</code> option to
                                    <code>true</code>.
                                </h6>
                                <input type="text" id="rgba" class="form-control demo" data-format="rgb"
                                       data-opacity=".5" value="rgba(52, 64, 158, 0.5)">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end RGB (A) -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- different style -->
        <!-- ============================================================== -->
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">Different Styles</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="opacity">Opacity</label>
                                <h6 class="help-block text-muted font-light">
                                    Opacity can be assigned by including the <code>data-opacity</code>
                                    attribute or by setting the <code>opacity</code> option to
                                    <code>true</code>.
                                </h6>
                                <input type="text" id="opacity" class="form-control demo" data-opacity=".5"
                                       value="#766fa8">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="keywords">Keywords</label>
                                <h6 class="help-block text-muted font-light">
                                    CSS-wide keywords can be assigned by setting the <code>keywords</code>
                                    option to a comma-separated list of valid keywords: <code>transparent,
                                        initial, inherit</code>.
                                </h6>
                                <input type="text" id="keywords" class="form-control demo"
                                       data-keywords="transparent, initial, inherit" value="transparent">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="default-value">Default Value</label>
                                <h6 class="help-block text-muted font-light">
                                    This field has a default value assigned to it, so it will never be empty.
                                </h6>
                                <input type="text" id="default-value" class="form-control demo"
                                       data-defaultValue="#ff6600">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="letter-case">Letter Case</label>
                                <h6 class="help-block text-muted font-light">
                                    This field will always be uppercase.
                                </h6>
                                <input type="text" id="letter-case" class="form-control demo"
                                       data-letterCase="uppercase" value="#abcdef">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="input-group">Input Groups</label>
                                <h6 class="help-block text-muted font-light">
                                    Example using Bootstrap's input groups.
                                </h6>
                                <div class="input-group">
                                    <input type="text" id="input-group" class="form-control demo" value="#ff0000"/>
                                    <span class="input-group-btn">
                                                    <button class="btn btn-default" type="button">Button</button>
                                                </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="more-input-group">More Input Groups</label>
                                <h6 class="help-block text-muted font-light">
                                    Input group example with addon.
                                </h6>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">Color</span>
                                    </div>
                                    <input type="text" id="more-input-group" class="form-control demo" value="#ff0000"/>
                                    <div class="input-group-append">
                                        <button class="btn btn-default" type="button">Button</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end different style -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- swatches  -->
                        <!-- ============================================================== -->
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="letter-case">Swatches</label>
                                <h6 class="help-block text-muted font-light">
                                    Example with swatches.
                                </h6>
                                <input type="text" id="swatches1" class="form-control demo"
                                       data-swatches="#ef9a9a|#90caf9|#a5d6a7|#fff59d|#ffcc80|#bcaaa4|#eeeeee|#f44336|#2196f3|#4caf50|#ffeb3b|#ff9800|#795548|#9e9e9e"
                                       value="#abcdef">
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end swatches  -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- swatches and opacity  -->
                        <!-- ============================================================== -->
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="letter-case">Swatches and opacity</label>
                                <h6 class="help-block text-muted font-light">
                                    Example with swatches and opacity.
                                </h6>
                                <input type="text" id="swatches2" class="form-control demo" data-format="rgb"
                                       data-opacity="1" data-swatches="#fff|#000|#f00|#0f0|#00f|#ff0|rgba(0,0,255,0.5)"
                                       value="rgba(14, 206, 235, .5)">
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end swatches and opacity  -->
                        <!-- ============================================================== -->
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="/libs/bootstrap-colorpicker/jquery-asColor/dist/jquery-asColor.min.js"></script>
<script src="/libs/bootstrap-colorpicker/jquery-asGradient/dist/jquery-asGradient.js"></script>
<script src="/libs/bootstrap-colorpicker/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
<script src="/libs/bootstrap-colorpicker/claviska/jquery-minicolors/jquery.minicolors.min.js"></script>
<script>
    $('.demo').each(function () {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
        $(this).minicolors({
            control: $(this).attr('data-control') || 'hue',
            defaultValue: $(this).attr('data-defaultValue') || '',
            format: $(this).attr('data-format') || 'hex',
            keywords: $(this).attr('data-keywords') || '',
            inline: $(this).attr('data-inline') === 'true',
            letterCase: $(this).attr('data-letterCase') || 'lowercase',
            opacity: $(this).attr('data-opacity'),
            position: $(this).attr('data-position') || 'bottom left',
            swatches: $(this).attr('data-swatches') ? $(this).attr('data-swatches').split('|') : [],
            change: function (value, opacity) {
                if (!value) return;
                if (opacity) value += ', ' + opacity;
                if (typeof console === 'object') {
                    console.log(value);
                }
            },
            theme: 'bootstrap'
        });

    });
</script>
