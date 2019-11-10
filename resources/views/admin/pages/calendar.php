<link href='/libs/full-calendar/css/fullcalendar.css' rel='stylesheet'/>
<link href='/libs/full-calendar/css/fullcalendar.print.css' rel='stylesheet' media='print'/>
<div class="container-fluid  dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Calendar </h2>
                <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet
                    vestibulum mi. Morbi lobortis pulvinar quam.</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Pages</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Calendar</li>
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
    <!-- simple calendar -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <div id='calendar1'></div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end simple calendar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- events calendar -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <div id='wrap'>
                        <div id='external-events'>
                            <h4>Draggable Events</h4>
                            <div class='fc-event'>My Event 1</div>
                            <div class='fc-event bg-secondary border-secondary'>My Event 2</div>
                            <div class='fc-event bg-brand border-brand'>My Event 3</div>
                            <div class='fc-event bg-info border-info'>My Event 4</div>
                            <div class='fc-event bg-success border-success'>My Event 5</div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id='drop-remove'>
                                <label class="custom-control-label" for="drop-remove">Remove after drop</label>
                            </div>
                        </div>
                        <div id='calendar'></div>
                        <div style='clear:both'></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end events calendar -->
    <!-- ============================================================== -->
</div>

<script src='/libs/full-calendar/js/moment.min.js'></script>
<script src='/libs/full-calendar/js/fullcalendar.js'></script>
<script src='/libs/full-calendar/js/jquery-ui.min.js'></script>
<script src='/libs/full-calendar/js/calendar.js'></script>
A