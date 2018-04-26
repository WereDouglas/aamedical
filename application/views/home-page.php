<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Case Professional</title>

        <!-- Bootstrap -->
        <link href="<?= base_url(); ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="<?= base_url(); ?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="<?= base_url(); ?>vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="<?= base_url(); ?>vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- iCheck -->
        <link href="<?= base_url(); ?>vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <a href="../../../../../../E:/Dashboard templates/Start UI/build/tables.html"></a>
        <!-- bootstrap-progressbar -->
        <link href="<?= base_url(); ?>vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
        <!-- JQVMap -->
        <link href="<?= base_url(); ?>vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>

        <!-- Custom Theme Style -->
        <link href="<?= base_url(); ?>build/css/custom.min.css" rel="stylesheet">
        <link rel=icon href="<?= base_url(); ?>images/favicon.ico">

        <link href="<?= base_url(); ?>css/dashboard.css" rel="stylesheet">
        <link href="<?= base_url(); ?>css/style2.css" rel="stylesheet">
    </head>
    <style>

        .nav li {
            float: left;
        }
        .main_menu_side {
            padding: 0;
            background-color:gainsboro;
        }

    </style>
    <?php
    $using = array();
    $using[] = count($usage_tasks);
    $using[] = count($usage_dis);
    $using[] = count($usage_fees);
    $using[] = count($usage_exp);
    // $using[] = 250;
    $highest = max($using);
    $fee = 0;
    if (($highest * 1) < 30) {
        $fee = 30;
    } if ($highest <= 50 && (($highest * 1) > 30)) {

        $fee = $highest * 1;
    } if ($highest > 50 && $highest <= 250 && (($highest * 1) > 30)) {

        $fee = $highest * 0.6;
    } if ($highest >= 250 && (($highest * 1) > 30)) {

        $fee = $highest * 0.3;
    }
    ?>
    <body class="nav-sm">
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container"> 
                    <div class="nav-collapse">
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                                class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><img  height="auto" width="45px"  src="<?= base_url(); ?>images/cp_logo.png" alt="Logo" /><font size="3">Case Professional</font>

                        <ul class="nav pull-right">
                            <li role="presentation" class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge bg-green"><?php echo count($notsent); ?></span>
                                </a>
                                <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                    <li>
                                        <a>
                                            <span class="image"> <img  height="50px" width="100px" class="" src="<?= base_url(); ?>uploads/<?php echo $this->session->userdata('userimage'); ?>" alt="........" /></span>
                                            <span>
                                                <span><?php echo $this->session->userdata('username'); ?></span>

                                            </span>

                                        </a>
                                    </li>
                                    <?php
                                    if (is_array($notsent) && count($notsent)) {
                                        foreach ($notsent as $loop) {
                                            ?>  
                                            <li>
                                                <a>
                                                    <span>
                                                        <span><?php echo $loop->subject; ?></span>
                                                        <span class="time"><?php echo $loop->date; ?></span>
                                                    </span>

                                                </a>
                                            </li>


                                            <?php
                                        }
                                    }
                                    ?>


                                </ul>
                            </li>
                            <li role="presentation" class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-calendar"></i>
                                    <span class="badge bg-red"><?php echo count($notcomplete); ?></span>
                                </a>
                                <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">

                                    <?php
                                    if (is_array($notcomplete) && count($notcomplete)) {
                                        foreach ($notcomplete as $loop) {
                                            ?>  
                                            <li>
                                                <a>
                                                    <span>
                                                        <span><?php echo $loop->name . ' for ' . $loop->user; ?></span>
                                                        <span class="time"><?php echo $loop->date; ?></span>
                                                    </span>

                                                </a>
                                            </li>
                                            <?php
                                        }
                                    }
                                    ?>
                                </ul>
                            </li>
                            <li role="presentation" class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-bank"></i>
                                    <span class="badge bg-red"><?php echo count($expenses_not_approved); ?></span>
                                </a>
                                <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                    <li>
                                        Expenses not yet approved
                                    </li>


                                </ul>

                            </li>
                            <li role="presentation" class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-money"></i>
                                    <span class="badge bg-red"><?php echo count($expenses_not_paid); ?></span>
                                </a>

                                <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                    <li>
                                        Expenses not yet paid
                                    </li>


                                </ul>
                            </li>

                            <li role="presentation" class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-balance-scale"></i>
                                    <span class="badge bg-red"><?php echo count($fees_not_paid); ?></span>
                                </a>
                                <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                    <li>
                                        Fees not yet paid
                                    </li>


                                </ul>


                            <li role="presentation" class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-briefcase"></i>
                                    <span class="badge bg-red"><?php echo count($dis_not_paid); ?></span>
                                </a>
                                <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                    <li>
                                        Disbursements not yet paid
                                    </li>
                                </ul>

                            </li>
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <?php
                                    if ($this->session->userdata('user_image') != "") {

                                        echo '<img class="nav-user-photo" src="data:image/jpeg;base64,' . $this->session->userdata('user_image') . '" />';
                                    } else {
                                        ?>

                                        <img class="nav-user-photo" src="<?= base_url(); ?>images/temp.png" alt="image" title="Change the name">
                                        <?php
                                    }
                                    ?>   <?php echo $this->session->userdata('username'); ?>
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li><a href="<?php echo base_url() . "index.php/user/profile/" . $this->session->userdata('username'); ?>" target="frame"> Profile</a></li>

                                    <li><a href="<?php echo base_url() . "index.php/home/logout"; ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                </ul>
                            </li>
                        </ul>

                    </div>
                    <!--/.nav-collapse --> 
                </div>
                <!-- /container --> 
            </div>
            <!-- /navbar-inner --> 
        </div>
        <!-- /navbar -->
        <div class="subnavbar">
            <div class="subnavbar-inner">
                <div class="container">
                    <ul class="mainnav">
                        <li class="active"><a href="<?php echo base_url() . "index.php/time/calendar"; ?>" target="frame"><i class="fa fa-calendar" style="color:#60ace0"></i><span> Calendar </span></a> </li>

                        <li><a href="<?php echo base_url() . "index.php/time/"; ?>" target="frame"><i class="fa fa-balance-scale" style="color:#60ace0"></i><span>Time sheet</span></a>
                        </li>
                        <li><a href="<?php echo base_url() . "index.php/client"; ?>" target="frame"><i class="fa fa-user " style="color:#ac8f74"></i><span>Clients</span></a>

                        </li>
                        <li><a href="<?php echo base_url() . "index.php/file/"; ?>" target="frame"><i class="fa fa-folder" style="color:#fe4500"></i><span>Files/Cases</span></a>

                        </li>
                        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-clone" style="color:#364a5e"></i><span>Documents</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url() . "index.php/document"; ?>" target="frame"><span>Documents<p class="label label-danger">
                                                <?php
                                                foreach ($sizes as $loop) {
                                                    ?>  
                                                    <?php echo number_format(($loop->size / 1000000), 2) . 'MBS'; ?>


                                                    <?php
                                                }
                                                ?></p></span></a>

                                </li>
                                <li><a href="<?php echo base_url() . "index.php/library"; ?>" target="frame"><span>Library</span></a></li>
                                <li><a href="<?php echo base_url() . "index.php/card"; ?>" target="frame"><span>Business Cards</span></a></li>

                            </ul>
                        </li>    
                        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-briefcase" style="color:#5fba7c"></i><span>Accounts & Finance</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url() . "index.php/wallet"; ?>" target="frame">Wallet</a></li>
                                <li><a href="<?php echo base_url() . "index.php/expense"; ?>" target="frame">Expenses</a></li>
                                <li><a href="<?php echo base_url() . "index.php/payment"; ?>" target="frame">Payments</a></li>                                           

                            </ul>
                        </li>                                    
                        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cogs" style="color:#fde377"></i><span>Setup</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url() . "index.php/service"; ?>" target="frame">Services</a></li>   
                                <li><a href="<?php echo base_url() . "index.php/department"; ?>" target="frame">Departments</a></li>   
                                <li><a href="<?php echo base_url() . "index.php/category"; ?>" target="frame">Categories</a></li>
                                <li><a href="<?php echo base_url() . "index.php/branch"; ?>" target="frame">Branches/Offices</a></li>
                                <li><a href="<?php echo base_url() . "index.php/organisation/profile"; ?>" target="frame"><i class="fa fa-cogs" style="color:#60ace0"></i> Organisational profile<span class="label label-success pull-right">manage</span></a></li>
                                <li><a href="<?php echo base_url() . "file/Case%20professional.msi"; ?>"><i class="fa fa-laptop" style="color:#60ace0"></i> Desktop application</a></li>

                            </ul>
                        </li>
                        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" style="color:#252523"></i><span>Users</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url() . "index.php/user"; ?>" target="frame">Users</a></li>
                                <li><a href="<?php echo base_url() . "index.php/role"; ?>" target="frame">Roles & Permissions</a></li>

                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /container --> 
            </div>
            <!-- /subnavbar-inner --> 
        </div>
        <!-- page content -->
        <div class="container body">
            <div class="main_container">



                <div class="" role="main">                    <!-- top tiles -->

                    <!-- /top tiles -->

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <script language="javascript" type="text/javascript">
                                function resizeIframe(obj) {
                                    obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
                                    // obj.style.width = obj.contentWindow.document.body.scrollHeight + 'px';
                                }
                            </script>
                            <iframe id="frame" name="frame" frameborder="no" border="0" onload="resizeIframe(this)" scrolling="no"  style="padding: 10px; min-height:750px;" width="100%" class="span12" src="<?php echo base_url() . "index.php/time/calendar"; ?>"> </iframe>         

                        </div>

                    </div>
                    <br/>


                </div>
                <!-- /page content -->

                <!-- footer content -->
                <footer>
                    <div class="pull-right">
                        Case professional <small><a href="novariss.com">  <img height="20px" width="150px"  class="nav" src="<?= base_url(); ?>images/novariss.png" alt="Logo" />
                            </a></small>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
            </div>
        </div>

        <!-- jQuery -->
        <script src="<?= base_url(); ?>vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?= base_url(); ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="<?= base_url(); ?>vendors/fastclick/lib/fastclick.js"></script>
        <!-- NProgress -->
        <script src="<?= base_url(); ?>vendors/nprogress/nprogress.js"></script>
        <!-- Chart.js -->
        <script src="<?= base_url(); ?>vendors/Chart.js/dist/Chart.min.js"></script>
        <!-- gauge.js -->
        <script src="<?= base_url(); ?>vendors/gauge.js/dist/gauge.min.js"></script>
        <!-- bootstrap-progressbar -->
        <script src="<?= base_url(); ?>vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
        <!-- iCheck -->
        <script src="<?= base_url(); ?>vendors/iCheck/icheck.min.js"></script>
        <!-- Skycons -->
        <script src="<?= base_url(); ?>vendors/skycons/skycons.js"></script>
        <!-- Flot -->
        <script src="<?= base_url(); ?>vendors/Flot/jquery.flot.js"></script>
        <script src="<?= base_url(); ?>vendors/Flot/jquery.flot.pie.js"></script>
        <script src="<?= base_url(); ?>vendors/Flot/jquery.flot.time.js"></script>
        <script src="<?= base_url(); ?>vendors/Flot/jquery.flot.stack.js"></script>
        <script src="<?= base_url(); ?>vendors/Flot/jquery.flot.resize.js"></script>
        <!-- Flot plugins -->
        <script src="<?= base_url(); ?>js/flot/jquery.flot.orderBars.js"></script>
        <script src="<?= base_url(); ?>js/flot/date.js"></script>
        <script src="<?= base_url(); ?>js/flot/jquery.flot.spline.js"></script>
        <script src="<?= base_url(); ?>js/flot/curvedLines.js"></script>
        <!-- JQVMap -->
        <script src="<?= base_url(); ?>vendors/jqvmap/dist/jquery.vmap.js"></script>
        <script src="<?= base_url(); ?>vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
        <script src="<?= base_url(); ?>vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
        <!-- bootstrap-daterangepicker -->
        <script src="<?= base_url(); ?>js/moment/moment.min.js"></script>
        <script src="<?= base_url(); ?>js/datepicker/daterangepicker.js"></script>

        <!-- Custom Theme Scripts -->
        <script src="<?= base_url(); ?>build/js/custom.min.js"></script>

        <!-- Flot -->
        <script>
                                $(document).ready(function () {
                                    var data1 = [
                                        [gd(2012, 1, 1), 17],
                                        [gd(2012, 1, 2), 74],
                                        [gd(2012, 1, 3), 6],
                                        [gd(2012, 1, 4), 39],
                                        [gd(2012, 1, 5), 20],
                                        [gd(2012, 1, 6), 85],
                                        [gd(2012, 1, 7), 7]
                                    ];

                                    var data2 = [
                                        [gd(2012, 1, 1), 82],
                                        [gd(2012, 1, 2), 23],
                                        [gd(2012, 1, 3), 66],
                                        [gd(2012, 1, 4), 9],
                                        [gd(2012, 1, 5), 119],
                                        [gd(2012, 1, 6), 6],
                                        [gd(2012, 1, 7), 9]
                                    ];
                                    $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
                                        data1, data2
                                    ], {
                                        series: {
                                            lines: {
                                                show: false,
                                                fill: true
                                            },
                                            splines: {
                                                show: true,
                                                tension: 0.4,
                                                lineWidth: 1,
                                                fill: 0.4
                                            },
                                            points: {
                                                radius: 0,
                                                show: true
                                            },
                                            shadowSize: 2
                                        },
                                        grid: {
                                            verticalLines: true,
                                            hoverable: true,
                                            clickable: true,
                                            tickColor: "#d5d5d5",
                                            borderWidth: 1,
                                            color: '#fff'
                                        },
                                        colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
                                        xaxis: {
                                            tickColor: "rgba(51, 51, 51, 0.06)",
                                            mode: "time",
                                            tickSize: [1, "day"],
                                            //tickLength: 10,
                                            axisLabel: "Date",
                                            axisLabelUseCanvas: true,
                                            axisLabelFontSizePixels: 12,
                                            axisLabelFontFamily: 'Verdana, Arial',
                                            axisLabelPadding: 10
                                        },
                                        yaxis: {
                                            ticks: 8,
                                            tickColor: "rgba(51, 51, 51, 0.06)",
                                        },
                                        tooltip: false
                                    });

                                    function gd(year, month, day) {
                                        return new Date(year, month - 1, day).getTime();
                                    }
                                });
        </script>
        <!-- /Flot -->

        <!-- JQVMap -->
        <script>
            $(document).ready(function () {
                $('#world-map-gdp').vectorMap({
                    map: 'world_en',
                    backgroundColor: null,
                    color: '#ffffff',
                    hoverOpacity: 0.7,
                    selectedColor: '#666666',
                    enableZoom: true,
                    showTooltip: true,
                    values: sample_data,
                    scaleColors: ['#E6F2F0', '#149B7E'],
                    normalizeFunction: 'polynomial'
                });
            });
        </script>
        <!-- /JQVMap -->

        <!-- Skycons -->
        <script>
            $(document).ready(function () {
                var icons = new Skycons({
                    "color": "#73879C"
                }),
                        list = [
                            "clear-day", "clear-night", "partly-cloudy-day",
                            "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                            "fog"
                        ],
                        i;

                for (i = list.length; i--; )
                    icons.set(list[i], list[i]);

                icons.play();
            });
        </script>
        <!-- /Skycons -->

        <!-- Doughnut Chart -->
        <script>
            $(document).ready(function () {
                var options = {
                    legend: false,
                    responsive: false
                };

                new Chart(document.getElementById("canvas1"), {
                    type: 'doughnut',
                    tooltipFillColor: "rgba(51, 51, 51, 0.55)",
                    data: {
                        labels: [
                            "Symbian",
                            "Blackberry",
                            "Other",
                            "Android",
                            "IOS"
                        ],
                        datasets: [{
                                data: [15, 20, 30, 10, 30],
                                backgroundColor: [
                                    "#BDC3C7",
                                    "#9B59B6",
                                    "#E74C3C",
                                    "#26B99A",
                                    "#3498DB"
                                ],
                                hoverBackgroundColor: [
                                    "#CFD4D8",
                                    "#B370CF",
                                    "#E95E4F",
                                    "#36CAAB",
                                    "#49A9EA"
                                ]
                            }]
                    },
                    options: options
                });
            });
        </script>
        <!-- /Doughnut Chart -->

        <!-- bootstrap-daterangepicker -->
        <script>
            $(document).ready(function () {

                var cb = function (start, end, label) {
                    console.log(start.toISOString(), end.toISOString(), label);
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                };

                var optionSet1 = {
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment(),
                    minDate: '01/01/2012',
                    maxDate: '12/31/2015',
                    dateLimit: {
                        days: 60
                    },
                    showDropdowns: true,
                    showWeekNumbers: true,
                    timePicker: false,
                    timePickerIncrement: 1,
                    timePicker12Hour: true,
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    opens: 'left',
                    buttonClasses: ['btn btn-default'],
                    applyClass: 'btn-small btn-primary',
                    cancelClass: 'btn-small',
                    format: 'MM/DD/YYYY',
                    separator: ' to ',
                    locale: {
                        applyLabel: 'Submit',
                        cancelLabel: 'Clear',
                        fromLabel: 'From',
                        toLabel: 'To',
                        customRangeLabel: 'Custom',
                        daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                        monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                        firstDay: 1
                    }
                };
                $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
                $('#reportrange').daterangepicker(optionSet1, cb);
                $('#reportrange').on('show.daterangepicker', function () {
                    console.log("show event fired");
                });
                $('#reportrange').on('hide.daterangepicker', function () {
                    console.log("hide event fired");
                });
                $('#reportrange').on('apply.daterangepicker', function (ev, picker) {
                    console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
                });
                $('#reportrange').on('cancel.daterangepicker', function (ev, picker) {
                    console.log("cancel event fired");
                });
                $('#options1').click(function () {
                    $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
                });
                $('#options2').click(function () {
                    $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
                });
                $('#destroy').click(function () {
                    $('#reportrange').data('daterangepicker').remove();
                });
            });
        </script>
        <!-- /bootstrap-daterangepicker -->

        <!-- gauge.js -->
        <script>
            var opts = {
                lines: 12,
                angle: 0,
                lineWidth: 0.4,
                pointer: {
                    length: 0.75,
                    strokeWidth: 0.042,
                    color: '#1D212A'
                },
                limitMax: 'false',
                colorStart: '#1ABC9C',
                colorStop: '#1ABC9C',
                strokeColor: '#F0F3F3',
                generateGradient: true
            };
            var target = document.getElementById('foo'),
                    gauge = new Gauge(target).setOptions(opts);

            gauge.maxValue = 6000;
            gauge.animationSpeed = 32;
            gauge.set(3200);
            gauge.setTextField(document.getElementById("gauge-text"));
        </script>
        <!-- /gauge.js -->
    </body>
</html>


