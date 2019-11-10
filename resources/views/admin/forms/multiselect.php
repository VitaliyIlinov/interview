<link rel="stylesheet" href="/libs/multi-select/css/multi-select.css">

<div class="container-fluid  dashboard-content">
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
    <!-- ============================================================== -->
    <!-- multiselects  -->
    <!-- ============================================================== -->

    <div class="row">
        <!-- ============================================================== -->
        <!-- boxed multiselect  -->
        <!-- ============================================================== -->
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Boxed Multiselect</h5>
                <div class="card-body">
                    <select multiple="multiple" id="my-select" name="my-select[]">
                        <option value='elem_1'>Elements 1</option>
                        <option value='elem_2'>Elements 2</option>
                        <option value='elem_3'>Elements 3</option>
                        <option value='elem_4'>Elements 4</option>
                    </select>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end boxed multiselect  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- pre multiselectd options  -->
        <!-- ============================================================== -->
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Pre-selected options</h5>
                <div class="card-body">
                    <select id='pre-selected-options' multiple='multiple'>
                        <option value='elem_1' selected>Elements 1</option>
                        <option value='elem_2'>Elements 2</option>
                        <option value='elem_3'>Elements 3</option>
                        <option value='elem_4' selected>Elements 4</option>
                    </select>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end pre multiselectd options  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- callbacks multiselectd  -->
        <!-- ============================================================== -->
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Callbacks</h5>
                <div class="card-body">
                    <select id='callbacks' multiple='multiple'>
                        <option value='elem_1'>Elements 1</option>
                        <option value='elem_2'>Elements 2</option>
                        <option value='elem_3'>Elements 3</option>
                        <option value='elem_4'>Elements 4</option>
                    </select>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end callbacks multiselectd  -->
        <!-- ============================================================== -->
    </div>
    <div class="row">
        <!-- ============================================================== -->
        <!-- keep over multiselectd  -->
        <!-- ============================================================== -->
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Keep Over</h5>
                <div class="card-body">
                    <select id='keep-order' multiple='multiple'>
                        <option value='elem_1'>Elements 1</option>
                        <option value='elem_2'>Elements 2</option>
                        <option value='elem_3'>Elements 3</option>
                        <option value='elem_4'>Elements 4</option>
                        <option value='elem_5'>Elements 5</option>
                        <option value='elem_6'>Elements 6</option>
                        <option value='elem_7'>Elements 7</option>
                        <option value='elem_8'>Elements 8</option>
                        <option value='elem_9'>Elements 9</option>
                        <option value='elem_10'>Elements 10</option>
                        <option value='elem_11'>Elements 11</option>
                        <option value='elem_12'>Elements 12</option>
                    </select>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end keep over multiselectd  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- optgroup multiselectd  -->
        <!-- ============================================================== -->
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Optgroup</h5>
                <div class="card-body">
                    <select id='optgroup' multiple='multiple'>
                        <optgroup label='Friends'>
                            <option value='1'>Yoda</option>
                            <option value='2' selected>Obiwan</option>
                        </optgroup>
                        <optgroup label='Enemies'>
                            <option value='3'>Palpatine</option>
                            <option value='4' disabled>Darth Vader</option>
                        </optgroup>
                    </select>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end optgroup multiselectd  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- disabled multiselectd  -->
        <!-- ============================================================== -->
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Disabled attribute</h5>
                <div class="card-body">
                    <select id='disabled-attribute' disabled='disabled' multiple='multiple'>
                        <option value='elem_1'>Elements 1</option>
                        <option value='elem_2'>Elements 2</option>
                        <option value='elem_3'>Elements 3</option>
                        <option value='elem_4'>Elements 4</option>
                        <option value='elem_5'>Elements 5</option>
                    </select>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- disabled multiselectd  -->
        <!-- ============================================================== -->
    </div>

</div>

<script src="/libs/multi-select/js/jquery.multi-select.js"></script>

<script>
    $('#my-select, #pre-selected-options').multiSelect();

    $('#callbacks').multiSelect({
        afterSelect: function (values) {
            alert("Select value: " + values);
        },
        afterDeselect: function (values) {
            alert("Deselect value: " + values);
        }
    });

    $('#keep-order').multiSelect({keepOrder: true});

    $('#public-methods').multiSelect();

    $('#select-all').click(function () {
        $('#public-methods').multiSelect('select_all');
        return false;
    });
    $('#deselect-all').click(function () {
        $('#public-methods').multiSelect('deselect_all');
        return false;
    });

    $('#refresh').on('click', function () {
        $('#public-methods').multiSelect('refresh');
        return false;
    });
    $('#add-option').on('click', function () {
        $('#public-methods').multiSelect('addOption', {value: 42, text: 'test 42', index: 0});
        return false;
    });
    $('#optgroup').multiSelect({selectableOptgroup: true});

    $('#disabled-attribute').multiSelect();

    $('#custom-headers').multiSelect({
        selectableHeader: "<div class='custom-header'>Selectable items</div>",
        selectionHeader: "<div class='custom-header'>Selection items</div>",
        selectableFooter: "<div class='custom-header'>Selectable footer</div>",
        selectionFooter: "<div class='custom-header'>Selection footer</div>"
    });
</script>
