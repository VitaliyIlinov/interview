<div class="container-fluid dashboard-content">

    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <?php require resource_path('helpers/admin/breadcrump.php'); ?>
        </div>
    </div>

    <div class="dashboard-short-list">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 co-12">
                <section class="card card-fluid">
                    <h5 class="card-header drag-handle"> Shortable List </h5>
                    <ul class="list-group" id="items">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          <i class="fas fa-arrows-alt"></i>
                            <span> Item one</span>
                            <span class="btn-group ml-auto">
                                <button class="btn btn-sm btn-outline-light">Edit</button>
                                <button class="btn btn-sm btn-outline-light">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          <i class="fas fa-arrows-alt"></i>
                            <div> Item two</div>
                            <div class="btn-group ml-auto">
                                <button class="btn btn-sm btn-outline-light">Edit</button>
                                <button class="btn btn-sm btn-outline-light">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          <i class="fas fa-arrows-alt"></i>
                            <div>Item three</div>
                            <div class="btn-group ml-auto">
                                <button class="btn btn-sm btn-outline-light">Edit</button>
                                <button class="btn btn-sm btn-outline-light">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          <i class="fas fa-arrows-alt"></i>
                            <div> Item four</div>
                            <div class="btn-group ml-auto">
                                <button class="btn btn-sm btn-outline-light">Edit</button>
                                <button class="btn btn-sm btn-outline-light">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          <i class="fas fa-arrows-alt"></i>
                            <div> Item five</div>
                            <div class="btn-group ml-auto">
                                <button class="btn btn-sm btn-outline-light">Edit</button>
                                <button class="btn btn-sm btn-outline-light">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </div>
                        </li>
                    </ul>
                </section>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 co-12">
                <section class="card card-fluid">
                    <h5 class="card-header drag-handle">Shortable List </h5>
                    <div class="row m-3" id="items-2">
                        <div class="col-3 py-4 text-center border border-primary">
                            1
                        </div>
                        <div class="col-3 py-4 text-center border border-primary">
                            2
                        </div>
                        <div class="col-3 py-4 text-center border border-primary">
                            3
                        </div>
                        <div class="col-3 py-4 text-center border border-primary">
                            4
                        </div>
                        <div class="col-3 py-4 text-center border border-primary">
                            5
                        </div>
                        <div class="col-3 py-4 text-center border border-primary">
                            6
                        </div>
                        <div class="col-3 py-4 text-center border border-primary">
                            7
                        </div>
                        <div class="col-3 py-4 text-center border border-primary">
                            8
                        </div>
                        <div class="col-3 py-4 text-center border border-primary">
                            9
                        </div>
                        <div class="col-3 py-4 text-center border border-primary">
                           10
                        </div>
                        <div class="col-3 py-4 text-center border border-primary">
                            11
                        </div>
                        <div class="col-3 py-4 text-center border border-primary">
                           12
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>



<script>
    $(function() {
        var sortable = Sortable.create(document.getElementById('items'),{
            animation: 150,
            ghostClass: 'bg-blue-light'
        });
        var sortable = Sortable.create(document.getElementById('items-2'),{
            animation: 150,
            ghostClass: 'bg-blue-light'
        });
    });
</script>

