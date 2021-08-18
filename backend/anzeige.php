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
                    <h3 class="content-header-title">caravan24 Anzeigen</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a>
                                </li>
                                <li class="breadcrumb-item active"><a href="#">Anzeige</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>

            </div>
            <div class="content-body">
                <section id="anzeige">

                    <!-- tab nav -->
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link c24-required active" id="tab_1" data-toggle="tab" aria-controls="desc" href="#tabcontent_1" aria-expanded="true">Fahrzeugdaten<span class="c24-required-marker">*</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link c24-required" id="tab_2" data-toggle="tab" aria-controls="ratings" href="#tabcontent_2" aria-expanded="false">Standort<span class="c24-required-marker">*</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link c24-required c24-is-empty" id="tab_3" data-toggle="tab" aria-controls="comment" href="#tabcontent_3" aria-expanded="false">Techn. Daten<span class="c24-required-marker">*</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link c24-required" id="tab_4" data-toggle="tab" aria-controls="comment" href="#tabcontent_4" aria-expanded="false">Beschreibung<span class="c24-required-marker">*</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link c24-required" id="tab_5" data-toggle="tab" aria-controls="comment" href="#tabcontent_5" aria-expanded="false">Fotos<span class="c24-required-marker">*</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link c24-required" id="tab_6" data-toggle="tab" aria-controls="comment" href="#tabcontent_6" aria-expanded="false">Ausstattung<span class="c24-required-marker">*</span></a>
                        </li>
                    </ul>
                    <!-- / tab nav -->

                    <!-- tab content -->
                    <div class="product-content tab-content pt-1">

                        <div role="tabpanel" class="tab-pane active" id="tabcontent_1" aria-expanded="true" aria-labelledby="tab_1">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body ">
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tabcontent_2" aria-expanded="true" aria-labelledby="tab_2">

                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tabcontent_3" aria-expanded="true" aria-labelledby="tab_3">

                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tabcontent_4" aria-expanded="true" aria-labelledby="tab_4">

                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tabcontent_5" aria-expanded="true" aria-labelledby="tab_5">

                        </div>


                        <div role="tabpanel" class="tab-pane fade" id="tabcontent_6" aria-expanded="true" aria-labelledby="tab_6">

                        </div>


                    </div>

                    <!-- /tab content -->


                </section>
            </div>
        </div>
    </div>
    </div>
    <!-- END: Content-->

    <?php
    include('template_parts/tmpl_footer.php');
    ?>