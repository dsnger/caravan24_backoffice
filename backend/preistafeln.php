<?php
/*
* dashboard.php
* 
* Version: 1.0
* Projekt: caravan24 backend
*/


//html header
include('template_parts/tmpl_header.php');
?>



<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">


    <?php

    //page header
    include('template_parts/tmpl_page-header.php');

    //page header
    include('template_parts/tmpl_main-menu.php');

    ?>

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row mb-1">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">caravan24 Preistafeln</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a>
                                </li>
                                <li class="breadcrumb-item active"><a href="#">Preistafeln</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>

            </div>
            <div class="content-body">
                <section id="pricingtables" class="c24-pricing-tables">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">

                                <div class="container">
                                    <div class="row">

                                        <div class="col">
                                            <h4 class="mb-2">Paket-Laufzeit wählen:</h4>
                                        </div>

                                    </div>
                                    <div class="row justify-content-center">

                                        <div class="col-auto">

                                            <ul class="nav nav-pills c24-pricing-tabs">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="preisgruppe1" data-toggle="tab" aria-controls="desc" href="#tab_preisgruppe1" aria-expanded="true">

                                                        <span class="pricing-tabs__tabtitle">4 Wochen</span>
                                                        <span class="pricing-tabs__tabsubtitle">28 Tage Laufzeit</span>

                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="preisgruppe2" data-toggle="tab" aria-controls="ratings" href="#tab_preisgruppe2" aria-expanded="false">

                                                        <span class="pricing-tabs__tabtitle">6 Wochen</span>
                                                        <span class="pricing-tabs__tabsubtitle">42 Tage Laufzeit</span>

                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                               
                                
                                    <div class="row">
                                        <div class="col">

                                            <div class="tab-content c24-pricing-content">

                                                <!-- tabcontent 1 -->
                                                <div role="tabpanel" class="tab-pane active" id="tab_preisgruppe1" aria-expanded="true" aria-labelledby="preisgruppe1">

                                                    <?php include('template_parts/tmpl_preistafeln.php') ?>

                                                </div>

                                                <!-- tabcontent 2 -->
                                                <div role="tabpanel" class="tab-pane" id="tab_preisgruppe2" aria-expanded="true" aria-labelledby="preisgruppe2">

                                                    <?php include('template_parts/tmpl_preistafeln_2.php') ?>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col text-center">
                                            <input type="submit" class="btn round btn-min-width mr-1 mb-1 c24-pricing-table__submit" value="Auswahl buchen">
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    </div>
    <!-- END: Content-->

    <?php
    include('template_parts/tmpl_footer.php');
    ?>