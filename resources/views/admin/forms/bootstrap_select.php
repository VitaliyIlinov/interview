<link rel="stylesheet" href="/libs/bootstrap-select/css/bootstrap-select.css">

<div class="container-fluid dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Bootstrap Select </h2>
                <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet
                    vestibulum mi. Morbi lobortis pulvinar quam.</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Forms</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Bootstrap Select</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end pageheader -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- bootstrap select -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card ">
                <h5 class="card-header">Bootstrap Select</h5>
                <div class="card-body">
                    <h5 class="card-title">Basic Select </h5>
                    <select class="selectpicker">
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                    </select>
                </div>
                <div class="card-body border-top">
                    <h5 class="card-title">Select boxes with optgroups</h5>
                    <select class="selectpicker">
                        <optgroup label="Picnic">
                            <option>Mustard</option>
                            <option>Ketchup</option>
                            <option>Relish</option>
                        </optgroup>
                        <optgroup label="Camping">
                            <option>Tent</option>
                            <option>Flashlight</option>
                            <option>Toilet Paper</option>
                        </optgroup>
                    </select>
                </div>
                <div class="card-body border-top">
                    <h5 class="card-title">Multiple select boxes</h5>
                    <select class="selectpicker" multiple>
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                    </select>
                </div>
                <div class="card-body border-top">
                    <h5 class="card-title">Live search</h5>
                    <select class="selectpicker" data-live-search="true">
                        <option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
                        <option data-tokens="mustard">Burger, Shake and a Smile</option>
                        <option data-tokens="frosting">Sugar, Spice and all things nice</option>
                    </select>
                </div>
                <div class="card-body border-top">
                    <h5 class="card-title">Limit the number of selections</h5>
                    <select class="selectpicker" multiple data-max-options="2">
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                    </select>
                    <select class="selectpicker" multiple>
                        <optgroup label="Condiments" data-max-options="2">
                            <option>Mustard</option>
                            <option>Ketchup</option>
                            <option>Relish</option>
                        </optgroup>
                        <optgroup label="Breads" data-max-options="2">
                            <option>Plain</option>
                            <option>Steamed</option>
                            <option>Toasted</option>
                        </optgroup>
                    </select>
                </div>
                <div class="card-body border-top">
                    <h5 class="card-title">Custom button text </h5>
                    <select class="selectpicker" multiple title="Choose one of the following...">
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                    </select>
                </div>
                <div class="card-body border-top">
                    <h5 class="card-title">Selected text</h5>
                    <select class="selectpicker">
                        <option title="Combo 1">Hot Dog, Fries and a Soda</option>
                        <option title="Combo 2">Burger, Shake and a Smile</option>
                        <option title="Combo 3">Sugar, Spice and all things nice</option>
                    </select>
                </div>
                <div class="card-body border-top">
                    <h5 class="card-title">Styling</h5>
                    <select class="selectpicker" data-style="btn-primary">
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                    </select>
                    <select class="selectpicker" data-style="btn-secondary">
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                    </select>
                    <select class="selectpicker" data-style="btn-brand">
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                    </select>
                    <select class="selectpicker" data-style="btn-info">
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                    </select>
                    <select class="selectpicker" data-style="btn-success">
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                    </select>
                </div>
                <div class="card-body border-top">
                    <h5 class="card-title">Checkmark on selected option</h5>
                    <select class="selectpicker show-tick">
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                    </select>
                </div>
                <div class="card-body border-top">
                    <h5 class="card-title">Menu arrow </h5>
                    <select class="selectpicker show-menu-arrow">
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                    </select>
                </div>
                <div class="card-body border-top">
                    <h5 class="card-title">Style individual options</h5>
                    <select class="selectpicker">
                        <option>Mustard</option>
                        <option class="special">Ketchup</option>
                        <option style="background: #5cb85c; color: #fff;">Relish</option>
                    </select>
                </div>
                <div class="card-body border-top">
                    <h5 class="card-title">Width ( 'auto', 'fit', '100px', '75%' )</h5>
                    <select class="selectpicker" data-width="auto">
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                    </select>
                    <select class="selectpicker" data-width="fit">
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                    </select>
                    <select class="selectpicker" data-width="100px">
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                    </select>
                    <select class="selectpicker" data-width="75%">
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                    </select>
                </div>
                <div class="card-body border-top">
                    <h5 class="card-title">Customize options with icon</h5>
                    <select class="selectpicker">
                        <option data-icon="fas fa-heart">Ketchup</option>
                        <option data-icon="fas fa-glass-martini">Mustard</option>
                        <option data-icon="fas fa-film">Relish</option>
                    </select>
                </div>
                <div class="card-body border-top">
                    <h5 class="card-title">Custom content</h5>
                    <select class="selectpicker">
                        <option data-content="<span class='badge badge-primary'>Mustard</span>">Mustard</option>
                        <option data-content="<span class='badge badge-success'>Relish</span>">Relish</option>
                        <option data-content="<span class='badge badge-brand'>Ketchup</span>">Ketchup</option>
                    </select>
                </div>
                <div class="card-body border-top">
                    <h5 class="card-title">Subtext</h5>
                    <select class="selectpicker" data-size="5">
                        <option data-subtext="Heinz">Ketchup</option>
                        <option data-subtext="Mitro">Mustard</option>
                        <option data-subtext="Laila">Ketchup</option>
                        <option data-subtext="Rim">Relish</option>
                    </select>
                </div>
                <div class="card-body border-top">
                    <h5 class="card-title">Menu Size</h5>
                    <select class="selectpicker" data-size="5">
                        <option>Ketchup</option>
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                        <option>Ketchup</option>
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                        <option>Ketchup</option>
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                    </select>
                </div>
                <div class="card-body border-top">
                    <h5 class="card-title">Select/deselect all options</h5>
                    <select class="selectpicker" multiple data-actions-box="true">
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                    </select>
                </div>
                <div class="card-body border-top">
                    <h5 class="card-title">Divider</h5>
                    <select class="selectpicker" data-size="5">
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                        <option data-divider="true">-</option>
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                    </select>
                </div>
                <div class="card-body border-top">
                    <h5 class="card-title">Menu Header</h5>
                    <select class="selectpicker" data-header="Select a condiment">
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                    </select>
                </div>
                <div class="card-body border-top">
                    <h5 class="card-title">Container</h5>
                    <div style="overflow:hidden;">
                        <select class="selectpicker">
                            <option>Mustard</option>
                            <option>Ketchup</option>
                            <option>Relish</option>
                        </select>
                        <select class="selectpicker" data-container="body">
                            <option>Mustard</option>
                            <option>Ketchup</option>
                            <option>Relish</option>
                        </select>
                    </div>
                </div>
                <div class="card-body border-top">
                    <h5 class="card-title">Dropup menu</h5>
                    <select class="selectpicker dropup">
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                    </select>
                </div>
                <div class="card-body border-top">
                    <h5 class="card-title">Disabled </h5>
                    <select class="selectpicker" disabled>
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                    </select>
                </div>
                <div class="card-body border-top">
                    <h5 class="card-title">Disabled options </h5>
                    <select class="selectpicker">
                        <option>Mustard</option>
                        <option disabled>Ketchup</option>
                        <option>Relish</option>
                    </select>
                </div>
                <div class="card-body border-top">
                    <h5 class="card-title">Disabled option groups </h5>
                    <select class="selectpicker test">
                        <optgroup label="Picnic" disabled>
                            <option>Mustard</option>
                            <option>Ketchup</option>
                            <option>Relish</option>
                        </optgroup>
                        <optgroup label="Camping">
                            <option>Tent</option>
                            <option>Flashlight</option>
                            <option>Toilet Paper</option>
                        </optgroup>
                    </select>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- bootstrap select -->
        <!-- ============================================================== -->
    </div>
</div>

<script src="/libs/bootstrap-select/js/bootstrap-select.js"></script>