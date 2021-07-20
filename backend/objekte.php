<?php
/*
* objekte.php
* 
* Version: 1.0
* Projekt: caravan24 backend
*/

//html header
include('template_parts/tmpl_header.php');
?>



<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row mb-1">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">Objekte anlegen und bearbeiten</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item">Kalender
                                </li>
                                <li class="breadcrumb-item active">Objekte
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>

            </div>
            <div class="content-body">

                <?php include('template_parts/tmpl_objekte.php');

                ob_start();
                include('template_parts/tmpl_objekt_bearbeitung.php');
                $content1 = ob_get_clean();
                build_section_toggle('', 'Objekt: Holiday Home', $content1);

                ?>
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <?php

    //page header
    include('template_parts/tmpl_page-header.php');

    //page header
    include('template_parts/tmpl_main-menu.php');

    ?>



    <?php
    include('template_parts/tmpl_footer.php');
    ?>