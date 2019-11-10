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
    <div class="dashboard-short-list">
        <div class="row">
            <!-- ============================================================== -->
            <!-- shortable list  -->
            <!-- ============================================================== -->
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 co-12">
                <section class="card card-fluid">
                    <h5 class="card-header drag-handle"> Shortable List </h5>
                    <ul class="sortable-lists list-group list-group-flush list-group-bordered" id="items">
                        <li class="list-group-item align-items-center drag-handle">
                            <span class="drag-indicator"></span>
                            <div> Item one</div>
                            <div class="btn-group ml-auto">
                                <button class="btn btn-sm btn-outline-light">Edit</button>
                                <button class="btn btn-sm btn-outline-light">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </div>
                        </li>
                        <li class="list-group-item align-items-center drag-handle">
                            <span class="drag-indicator"></span>
                            <div> Item two</div>
                            <div class="btn-group ml-auto">
                                <button class="btn btn-sm btn-outline-light">Edit</button>
                                <button class="btn btn-sm btn-outline-light">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </div>
                        </li>
                        <li class="list-group-item align-items-center drag-handle">
                            <span class="drag-indicator"></span>
                            <div>Item three</div>
                            <div class="btn-group ml-auto">
                                <button class="btn btn-sm btn-outline-light">Edit</button>
                                <button class="btn btn-sm btn-outline-light">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </div>
                        </li>
                        <li class="list-group-item align-items-center drag-handle">
                            <span class="drag-indicator"></span>
                            <div> Item four</div>
                            <div class="btn-group ml-auto">
                                <button class="btn btn-sm btn-outline-light">Edit</button>
                                <button class="btn btn-sm btn-outline-light">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </div>
                        </li>
                        <li class="list-group-item align-items-center drag-handle">
                            <span class="drag-indicator"></span>
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
                    <ul class="sortable-lists list-group list-group-flush list-group-bordered" id="item-2">
                        <li class="list-group-item align-items-center drag-handle">
                            <span class="drag-indicator"></span>
                            <div> Item one</div>
                            <div class="btn-group ml-auto">
                                <button class="btn btn-sm btn-outline-light">Edit</button>
                                <button class="btn btn-sm btn-outline-light">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </div>
                        </li>
                        <li class="list-group-item align-items-center drag-handle">
                            <span class="drag-indicator"></span>
                            <div> Item two</div>
                            <div class="btn-group ml-auto">
                                <button class="btn btn-sm btn-outline-light">Edit</button>
                                <button class="btn btn-sm btn-outline-light">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </div>
                        </li>
                        <li class="list-group-item align-items-center drag-handle">
                            <span class="drag-indicator"></span>
                            <div> Item three</div>
                            <div class="btn-group ml-auto">
                                <button class="btn btn-sm btn-outline-light">Edit</button>
                                <button class="btn btn-sm btn-outline-light">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </div>
                        </li>
                        <li class="list-group-item align-items-center drag-handle">
                            <span class="drag-indicator"></span>
                            <div>Item four</div>
                            <div class="btn-group ml-auto">
                                <button class="btn btn-sm btn-outline-light">Edit</button>
                                <button class="btn btn-sm btn-outline-light">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </div>
                        </li>
                        <li class="list-group-item align-items-center drag-handle">
                            <span class="drag-indicator"></span>
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
        </div>
        <!-- ============================================================== -->
        <!-- end shortable list  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- nestable list  -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 co-12">
                <section class="card card-fluid">
                    <h5 class="card-header drag-handle"> Nestable List </h5>
                    <div class="dd" id="nestable">
                        <ol class="dd-list">
                            <li class="dd-item" data-id="13">
                                <div class="dd-handle"><span class="drag-indicator"></span>
                                    <div> Item one</div>
                                    <div class="dd-nodrag btn-group ml-auto">
                                        <button class="btn btn-sm btn-outline-light">Edit</button>
                                        <button class="btn btn-sm btn-outline-light">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li class="dd-item" data-id="2">
                                <div class="dd-handle"><span class="drag-indicator"></span>
                                    <div> Item two</div>
                                    <div class="dd-nodrag btn-group ml-auto">
                                        <button class="btn btn-sm btn-outline-light">Edit</button>
                                        <button class="btn btn-sm btn-outline-light">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </div>
                                </div>
                                <ol class="dd-list">
                                    <li class="dd-item" data-id="3">
                                        <div class="dd-handle"><span class="drag-indicator"></span>
                                            <div> Item three</div>
                                            <div class="dd-nodrag btn-group ml-auto">
                                                <button class="btn btn-sm btn-outline-light">Edit</button>
                                                <button class="btn btn-sm btn-outline-light">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dd-item" data-id="4">
                                        <div class="dd-handle"><span class="drag-indicator"></span>
                                            <div> Item four</div>
                                            <div class="dd-nodrag btn-group ml-auto">
                                                <button class="btn btn-sm btn-outline-light">Edit</button>
                                                <button class="btn btn-sm btn-outline-light">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dd-item" data-id="5">
                                        <div class="dd-handle"><span class="drag-indicator"></span>
                                            <div> Item five</div>
                                            <div class="dd-nodrag btn-group ml-auto">
                                                <button class="btn btn-sm btn-outline-light">Edit</button>
                                                <button class="btn btn-sm btn-outline-light">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="6">
                                                <div class="dd-handle"><span class="drag-indicator"></span>
                                                    <div> Item six</div>
                                                    <div class="dd-nodrag btn-group ml-auto">
                                                        <button class="btn btn-sm btn-outline-light">Edit</button>
                                                        <button class="btn btn-sm btn-outline-light">
                                                            <i class="far fa-trash-alt"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item" data-id="7">
                                                <div class="dd-handle"><span class="drag-indicator"></span>
                                                    <div> Item seven</div>
                                                    <div class="dd-nodrag btn-group ml-auto">
                                                        <button class="btn btn-sm btn-outline-light">Edit</button>
                                                        <button class="btn btn-sm btn-outline-light">
                                                            <i class="far fa-trash-alt"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item" data-id="8">
                                                <div class="dd-handle"><span class="drag-indicator"></span>
                                                    <div> Item eight</div>
                                                    <div class="dd-nodrag btn-group ml-auto">
                                                        <button class="btn btn-sm btn-outline-light">Edit</button>
                                                        <button class="btn btn-sm btn-outline-light">
                                                            <i class="far fa-trash-alt"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>
                                        </ol>
                                    </li>
                                    <li class="dd-item" data-id="9">
                                        <div class="dd-handle"><span class="drag-indicator"></span>
                                            <div> Item nine</div>
                                            <div class="dd-nodrag btn-group ml-auto">
                                                <button class="btn btn-sm btn-outline-light">Edit</button>
                                                <button class="btn btn-sm btn-outline-light">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dd-item" data-id="10">
                                        <div class="dd-handle"><span class="drag-indicator"></span>
                                            <div> Item ten</div>
                                            <div class="dd-nodrag btn-group ml-auto">
                                                <button class="btn btn-sm btn-outline-light">Edit</button>
                                                <button class="btn btn-sm btn-outline-light">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                            </li>
                            <li class="dd-item" data-id="11">
                                <div class="dd-handle"><span class="drag-indicator"></span>
                                    <div> Item eleven</div>
                                    <div class="dd-nodrag btn-group ml-auto">
                                        <button class="btn btn-sm btn-outline-light">Edit</button>
                                        <button class="btn btn-sm btn-outline-light">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li class="dd-item" data-id="12">
                                <div class="dd-handle"><span class="drag-indicator"></span>
                                    <div> Item twelve</div>
                                    <div class="dd-nodrag btn-group ml-auto">
                                        <button class="btn btn-sm btn-outline-light">Edit</button>
                                        <button class="btn btn-sm btn-outline-light">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </li>
                        </ol>
                    </div>
                </section>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 co-12">
                <section class="card card-fluid">
                    <h5 class="card-header drag-handle">Nestable List </h5>
                    <div class="dd" id="nestable2">
                        <ol class="dd-list">
                            <li class="dd-item" data-id="13">
                                <div class="dd-handle"><span class="drag-indicator"></span>
                                    <div> Item one</div>
                                    <div class="dd-nodrag btn-group ml-auto">
                                        <button class="btn btn-sm btn-outline-light">Edit</button>
                                        <button class="btn btn-sm btn-outline-light">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li class="dd-item" data-id="14">
                                <div class="dd-handle"><span class="drag-indicator"></span>
                                    <div> Item two</div>
                                    <div class="dd-nodrag btn-group ml-auto">
                                        <button class="btn btn-sm btn-outline-light">Edit</button>
                                        <button class="btn btn-sm btn-outline-light">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li class="dd-item" data-id="15">
                                <div class="dd-handle"><span class="drag-indicator"></span>
                                    <div> Item three</div>
                                    <div class="dd-nodrag btn-group ml-auto">
                                        <button class="btn btn-sm btn-outline-light">Edit</button>
                                        <button class="btn btn-sm btn-outline-light">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </div>
                                </div>
                                <ol class="dd-list">
                                    <li class="dd-item" data-id="16">
                                        <div class="dd-handle"><span class="drag-indicator"></span>
                                            <div> Item four</div>
                                            <div class="dd-nodrag btn-group ml-auto">
                                                <button class="btn btn-sm btn-outline-light">Edit</button>
                                                <button class="btn btn-sm btn-outline-light">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dd-item" data-id="17">
                                        <div class="dd-handle"><span class="drag-indicator"></span>
                                            <div> Item five</div>
                                            <div class="dd-nodrag btn-group ml-auto">
                                                <button class="btn btn-sm btn-outline-light">Edit</button>
                                                <button class="btn btn-sm btn-outline-light">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dd-item" data-id="18">
                                        <div class="dd-handle"><span class="drag-indicator"></span>
                                            <div> Item six</div>
                                            <div class="dd-nodrag btn-group ml-auto">
                                                <button class="btn btn-sm btn-outline-light">Edit</button>
                                                <button class="btn btn-sm btn-outline-light">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                            </li>
                        </ol>
                    </div>
                </section>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end nestable list  -->
        <!-- ============================================================== -->
    </div>
</div>


<script src="/libs/shortable-nestable/Sortable.min.js"></script>
<script src="/libs/shortable-nestable/sort-nest.js"></script>
<script src="/libs/shortable-nestable/jquery.nestable.js"></script>
