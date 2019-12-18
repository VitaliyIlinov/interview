<div class="container-fluid dashboard-content">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <?php require resource_path('helpers/admin/breadcrump.php'); ?>
        </div>
    </div>
    <div class="ecommerce-widget">
        <div class="row">
            <div class="col-6">
                <h3 class="card-header">
                    To Do List
                </h3>
                <?=$todolist;?>
            </div>
            <div class="col-6">
                <h3 class="card-header">
                    Goals
                </h3>
                <?=$goals;?>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <h5 class="card-header">Recent Orders</h5>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="bg-light">
                                <tr class="border-0">
                                    <th class="border-0">#</th>
                                    <th class="border-0">Image</th>
                                    <th class="border-0">Product Name</th>
                                    <th class="border-0">Product Id</th>
                                    <th class="border-0">Quantity</th>
                                    <th class="border-0">Price</th>
                                    <th class="border-0">Order Time</th>
                                    <th class="border-0">Customer</th>
                                    <th class="border-0">Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <div class="m-r-10">
                                            <img src="/admin/img/product-pic.jpg" alt="user"
                                                 class="rounded" width="45">
                                        </div>
                                    </td>
                                    <td>Product #1</td>
                                    <td>id000001</td>
                                    <td>20</td>
                                    <td>$80.00</td>
                                    <td>27-08-2018 01:22:12</td>
                                    <td>Patricia J. King</td>
                                    <td><span class="badge-dot badge-brand mr-1"></span>InTransit</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <div class="m-r-10">
                                            <img src="/admin/img/product-pic-2.jpg" alt="user"
                                                 class="rounded" width="45">
                                        </div>
                                    </td>
                                    <td>Product #2</td>
                                    <td>id000002</td>
                                    <td>12</td>
                                    <td>$180.00</td>
                                    <td>25-08-2018 21:12:56</td>
                                    <td>Rachel J. Wicker</td>
                                    <td><span class="badge-dot badge-success mr-1"></span>Delivered</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>
                                        <div class="m-r-10">
                                            <img src="/admin/img/product-pic-3.jpg" alt="user"
                                                 class="rounded" width="45">
                                        </div>
                                    </td>
                                    <td>Product #3</td>
                                    <td>id000003</td>
                                    <td>23</td>
                                    <td>$820.00</td>
                                    <td>24-08-2018 14:12:77</td>
                                    <td>Michael K. Ledford</td>
                                    <td><span class="badge-dot badge-success mr-1"></span>Delivered</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>
                                        <div class="m-r-10">
                                            <img src="/admin/img/product-pic-4.jpg" alt="user"
                                                 class="rounded" width="45">
                                        </div>
                                    </td>
                                    <td>Product #4</td>
                                    <td>id000004</td>
                                    <td>34</td>
                                    <td>$340.00</td>
                                    <td>23-08-2018 09:12:35</td>
                                    <td>Michael K. Ledford</td>
                                    <td><span class="badge-dot badge-success mr-1"></span>Delivered</td>
                                </tr>
                                <tr>
                                    <td colspan="9">
                                        <a href="#" class="btn btn-outline-light float-right">View Details
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- ============================================================== -->
            <!-- sales  -->
            <!-- ============================================================== -->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="card border-3 border-top border-top-primary">
                    <div class="card-body">
                        <h5 class="text-muted">Sales</h5>
                        <div class="metric-value d-inline-block">
                            <h1 class="mb-1">$12099</h1>
                        </div>
                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                        <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i
                                                    class="fa fa-fw fa-arrow-up"></i></span><span
                                    class="ml-1">5.86%</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end sales  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- new customer  -->
            <!-- ============================================================== -->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="card border-3 border-top border-top-primary">
                    <div class="card-body">
                        <h5 class="text-muted">New Customer</h5>
                        <div class="metric-value d-inline-block">
                            <h1 class="mb-1">1245</h1>
                        </div>
                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                        <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i
                                                    class="fa fa-fw fa-arrow-up"></i></span><span
                                    class="ml-1">10%</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end new customer  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- visitor  -->
            <!-- ============================================================== -->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="card border-3 border-top border-top-primary">
                    <div class="card-body">
                        <h5 class="text-muted">Visitor</h5>
                        <div class="metric-value d-inline-block">
                            <h1 class="mb-1">13000</h1>
                        </div>
                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                        <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i
                                                    class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">5%</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end visitor  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- total orders  -->
            <!-- ============================================================== -->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="card border-3 border-top border-top-primary">
                    <div class="card-body">
                        <h5 class="text-muted">Total Orders</h5>
                        <div class="metric-value d-inline-block">
                            <h1 class="mb-1">1340</h1>
                        </div>
                        <div class="metric-label d-inline-block float-right text-danger font-weight-bold">
                                        <span class="icon-circle-small icon-box-xs text-danger bg-danger-light bg-danger-light "><i
                                                    class="fa fa-fw fa-arrow-down"></i></span><span
                                    class="ml-1">4%</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end total orders  -->
            <!-- ============================================================== -->
        </div>
        <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12 col-12">
                <!-- ============================================================== -->
                <!-- social source  -->
                <!-- ============================================================== -->
                <div class="card">
                    <h5 class="card-header"> Sales By Social Source</h5>
                    <div class="card-body p-0">
                        <ul class="social-sales list-group list-group-flush">
                            <li class="list-group-item social-sales-content"><span
                                        class="social-sales-icon-circle facebook-bgcolor mr-2"><i
                                            class="fab fa-facebook-f"></i></span><span
                                        class="social-sales-name">Facebook</span><span
                                        class="social-sales-count text-dark">120 Sales</span>
                            </li>
                            <li class="list-group-item social-sales-content"><span
                                        class="social-sales-icon-circle twitter-bgcolor mr-2"><i
                                            class="fab fa-twitter"></i></span><span
                                        class="social-sales-name">Twitter</span><span
                                        class="social-sales-count text-dark">99 Sales</span>
                            </li>
                            <li class="list-group-item social-sales-content"><span
                                        class="social-sales-icon-circle instagram-bgcolor mr-2"><i
                                            class="fab fa-instagram"></i></span><span
                                        class="social-sales-name">Instagram</span><span
                                        class="social-sales-count text-dark">76 Sales</span>
                            </li>
                            <li class="list-group-item social-sales-content"><span
                                        class="social-sales-icon-circle pinterest-bgcolor mr-2"><i
                                            class="fab fa-pinterest-p"></i></span><span
                                        class="social-sales-name">Pinterest</span><span
                                        class="social-sales-count text-dark">56 Sales</span>
                            </li>
                            <li class="list-group-item social-sales-content"><span
                                        class="social-sales-icon-circle googleplus-bgcolor mr-2"><i
                                            class="fab fa-google-plus-g"></i></span><span
                                        class="social-sales-name">Google Plus</span><span
                                        class="social-sales-count text-dark">36 Sales</span>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="btn-primary-link">View Details</a>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end social source  -->
                <!-- ============================================================== -->
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <!-- ============================================================== -->
                <!-- sales traffice source  -->
                <!-- ============================================================== -->
                <div class="card">
                    <h5 class="card-header"> Sales By Traffic Source</h5>
                    <div class="card-body p-0">
                        <ul class="traffic-sales list-group list-group-flush">
                            <li class="traffic-sales-content list-group-item "><span
                                        class="traffic-sales-name">Direct</span><span
                                        class="traffic-sales-amount">$4000.00  <span
                                            class="icon-circle-small icon-box-xs text-success ml-4 bg-success-light"><i
                                                class="fa fa-fw fa-arrow-up"></i></span><span
                                            class="ml-1 text-success">5.86%</span></span>
                            </li>
                            <li class="traffic-sales-content list-group-item"><span
                                        class="traffic-sales-name">Search<span
                                            class="traffic-sales-amount">$3123.00  <span
                                                class="icon-circle-small icon-box-xs text-success ml-4 bg-success-light"><i
                                                    class="fa fa-fw fa-arrow-up"></i></span><span
                                                class="ml-1 text-success">5.86%</span></span>
                                                </span>
                            </li>
                            <li class="traffic-sales-content list-group-item"><span
                                        class="traffic-sales-name">Social<span
                                            class="traffic-sales-amount ">$3099.00  <span
                                                class="icon-circle-small icon-box-xs text-success ml-4 bg-success-light"><i
                                                    class="fa fa-fw fa-arrow-up"></i></span><span
                                                class="ml-1 text-success">5.86%</span></span>
                                                </span>
                            </li>
                            <li class="traffic-sales-content list-group-item"><span
                                        class="traffic-sales-name">Referrals<span
                                            class="traffic-sales-amount ">$2220.00   <span
                                                class="icon-circle-small icon-box-xs text-danger ml-4 bg-danger-light"><i
                                                    class="fa fa-fw fa-arrow-down"></i></span><span
                                                class="ml-1 text-danger">4.02%</span></span>
                                                </span>
                            </li>
                            <li class="traffic-sales-content list-group-item "><span
                                        class="traffic-sales-name">Email<span
                                            class="traffic-sales-amount">$1567.00   <span
                                                class="icon-circle-small icon-box-xs text-danger ml-4 bg-danger-light"><i
                                                    class="fa fa-fw fa-arrow-down"></i></span><span
                                                class="ml-1 text-danger">3.86%</span></span>
                                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="btn-primary-link">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-12 col-md-6 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Sales By Country Traffic Source</h5>
                    <div class="card-body p-0">
                        <ul class="country-sales list-group list-group-flush">
                            <li class="country-sales-content list-group-item"><span class="mr-2"><i
                                            class="flag-icon flag-icon-us" title="us" id="us"></i> </span>
                                <span class="">United States</span><span
                                        class="float-right text-dark">78%</span>
                            </li>
                            <li class="list-group-item country-sales-content"><span class="mr-2"><i
                                            class="flag-icon flag-icon-ca" title="ca"
                                            id="ca"></i></span><span class="">Canada</span><span
                                        class="float-right text-dark">7%</span>
                            </li>
                            <li class="list-group-item country-sales-content"><span class="mr-2"><i
                                            class="flag-icon flag-icon-ru" title="ru"
                                            id="ru"></i></span><span class="">Russia</span><span
                                        class="float-right text-dark">4%</span>
                            </li>
                            <li class="list-group-item country-sales-content"><span class=" mr-2"><i
                                            class="flag-icon flag-icon-in" title="in"
                                            id="in"></i></span><span class="">India</span><span
                                        class="float-right text-dark">12%</span>
                            </li>
                            <li class="list-group-item country-sales-content"><span class=" mr-2"><i
                                            class="flag-icon flag-icon-fr" title="fr"
                                            id="fr"></i></span><span class="">France</span><span
                                        class="float-right text-dark">16%</span>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="btn-primary-link">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
