<!--
=========================================================
Material Dashboard - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo site_url('assets/'); ?>images/icon.png">
    <link rel="icon" type="image/png" href="<?php echo site_url('assets/'); ?>images/icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Absensi Kehadiran Manasik Umroh
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="<?php echo site_url('assets/'); ?>css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap-datetimepicker.min.css'); ?>">
    <script src="<?php echo site_url('assets/'); ?>js/core/html2canvas.js" type="text/javascript"></script>
    <script src="<?php echo site_url('assets/'); ?>js/core/jquery.min.js"></script>
    <script src="<?php echo site_url('assets/'); ?>js/core/popper.min.js"></script>
    <script src="<?php echo site_url('assets/'); ?>js/core/bootstrap-material-design.min.js"></script>
    <script src="<?php echo site_url('assets/'); ?>js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!-- Plugin for the momentJs  -->
    <script src="<?php echo site_url('assets/'); ?>js/plugins/moment.min.js"></script>
    <!--  Plugin for Sweet Alert -->
    <script src="<?php echo site_url('assets/'); ?>js/plugins/sweetalert2.js"></script>
    <!-- Forms Validations Plugin -->
    <script src="<?php echo site_url('assets/'); ?>js/plugins/jquery.validate.min.js"></script>
    <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
    <script src="<?php echo site_url('assets/'); ?>js/plugins/jquery.bootstrap-wizard.js"></script>
    <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="<?php echo site_url('assets/'); ?>js/plugins/bootstrap-selectpicker.js"></script>
    <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
    <script src="<?php echo site_url('assets/'); ?>js/plugins/bootstrap-datetimepicker.min.js"></script>
    <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
    <script src="<?php echo site_url('assets/'); ?>js/plugins/jquery.dataTables.min.js"></script>
    <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <script src="<?php echo site_url('assets/'); ?>js/plugins/bootstrap-tagsinput.js"></script>
    <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="<?php echo site_url('assets/'); ?>js/plugins/jasny-bootstrap.min.js"></script>
    <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
    <script src="<?php echo site_url('assets/'); ?>js/plugins/fullcalendar.min.js"></script>
    <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
    <script src="<?php echo site_url('assets/'); ?>js/plugins/jquery-jvectormap.js"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="<?php echo site_url('assets/'); ?>js/plugins/nouislider.min.js"></script>
    <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <!-- Library for adding dinamically elements -->
    <script src="<?php echo site_url('assets/'); ?>js/plugins/arrive.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chartist JS -->
    <script src="<?php echo site_url('assets/'); ?>js/plugins/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="<?php echo site_url('assets/'); ?>js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?php echo site_url('assets/'); ?>js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="<?php echo site_url('resources/js/bootstrap-datetimepicker.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo site_url('assets/'); ?>datatables/datatables.min.js"></script>
    <script type="text/javascript" src="<?php echo site_url('assets/'); ?>datatables/lib/js/dataTables.bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>

<body class="">
    <div class="wrapper">
        <!-- <div class="wrapper" style="display: none;"> -->
        <div class="sidebar" data-color="green" data-background-color="white" data-image="<?php echo site_url('assets/'); ?>img/sidebar-1.jpg">
            <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
                    <br>
                    <h5>
                        <?php echo $this->session->userdata('user_name') ?>
                        <?php $user_level = $this->session->userdata('user_level') ?>
                    </h5>
                </a></div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <?php if ($this->session->userdata('user_level') === '1') : ?>
                        <li class="nav-item <?php if ($this->uri->uri_string() == 'dashboard/index') {
                                                echo 'active';
                                            } ?>">
                            <a class="nav-link" href="<?php echo site_url(''); ?>dashboard/index">
                                <i class="material-icons">dashboard</i>
                                <p>Dashboard</p>
                            </a>
                        </li>        
                        <li class="nav-item <?php if ($this->uri->uri_string() == 'keberangkatan/index') {
                                                echo 'active';  
                                            } ?>">
                            <a class="nav-link" href="<?php echo site_url(''); ?>keberangkatan/index">
                                <i class="material-icons">event_available</i>
                                <p>Keberangkatan</p>
                            </a>
                        </li>
                        <li class="nav-item <?php if ($this->uri->uri_string() == 'paket/index') {
                                                echo 'active';  
                                            } ?>">
                            <a class="nav-link" href="<?php echo site_url(''); ?>paket/index">
                                <i class="material-icons">view_kanban</i>
                                <p>Paket</p>
                            </a>
                        </li>
                        <li class="nav-item <?php if ($this->uri->uri_string() == 'jamaah/index') {
                                                echo 'active';  
                                            } ?>">
                            <a class="nav-link" href="<?php echo site_url(''); ?>jamaah/index">
                                <i class="material-icons">persons</i>
                                <p>Jamaah</p>
                            </a>
                        </li>
                        <li class="nav-item <?php if ($this->uri->uri_string() == 'scan/index') {
                                                echo 'active';
                                            } ?>">
                            <a class="nav-link" href="<?php echo site_url(''); ?>scan/index">
                                <i class="material-icons">computer</i>
                                <p>Scan Kehadiran Manasik</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('login/logout'); ?>">
                                <i class="material-icons">archive</i>
                                <p>Keluar</p>
                            </a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item <?php if ($this->uri->uri_string() == 'dashboard/index') {
                                                echo 'active';
                                            } ?>">
                            <a class="nav-link" href="<?php echo site_url(''); ?>dashboard/index">
                                <i class="material-icons">dashboard</i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item <?php if ($this->uri->uri_string() == 'jamaah/index') {
                                                echo 'active';
                                            } ?>">
                            <a class="nav-link" href="<?php echo site_url(''); ?>jamaah/index">
                                <i class="material-icons">persons</i>
                                <p>Jamaah</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('login/logout'); ?>">
                                <i class="material-icons">archive</i>
                                <p>Keluar</p>
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
                <div class="container-fluid py-4 px-5">
                    <section class="content">
                        <?php
                        if (isset($_view) && $_view)
                            $this->load->view($_view);
                        ?>
                    </section>
                </div>
            </main>
        </div>
    </div>
    <!--   Core JS Files   -->
    
</body>

</html>