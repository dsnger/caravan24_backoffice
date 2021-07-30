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
                <section id="tabs">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">

                                <h4 class="mb-2">Paket-Laufzeit wählen:</h4>
                                <ul class="product-tabs nav nav-tabs nav-underline no-hover-bg">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="belegung" data-toggle="tab" aria-controls="desc" href="#tab_belegung" aria-expanded="true">Belegung</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="calcode" data-toggle="tab" aria-controls="ratings" href="#tab_calcode" aria-expanded="false">Kalender Code</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="preview" data-toggle="tab" aria-controls="comment" href="#tab_preview" aria-expanded="false">Vorschau</a>
                                    </li>
                                </ul>

                                <div class="product-content tab-content px-1 pt-1">
                                    <div role="tabpanel" class="tab-pane active" id="tab_belegung" aria-expanded="true" aria-labelledby="belegung">
                                        <h2 class="my-1">Belegung</h2>
                                        <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed tempor et et invidunt justo labore Stet clita ea et gubergren, kasd magna no rebum. sanctus sea sed takimata ut vero voluptua. est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
                                        <br>
                                        <h4>Lorem ipsum labore et dolore:</h4>
                                        <ul>
                                            <li>sanctus sea sed takimata ut vero voluptua</li>
                                            <li>sanctus sea sed takimata ut vero voluptua</li>
                                            <li>sanctus sea sed takimata ut vero voluptua</li>
                                            <li>sanctus sea sed takimata ut vero voluptua</li>
                                            <li>sanctus sea sed takimata ut vero voluptua</li>
                                        </ul>
                                    </div>

                                    <div role="tabpanel" class="tab-pane" id="tab_calcode" aria-expanded="true" aria-labelledby="calcode">
                                        <h2 class="my-1">Kalender-Code</h2>
                                        <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed tempor et et invidunt justo labore Stet clita ea et gubergren, kasd magna no rebum. sanctus sea sed takimata ut vero voluptua. est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
                                        <br>
                                        <h4>Lorem ipsum labore et dolore:</h4>
                                        <ul>
                                            <li>sanctus sea sed takimata ut vero voluptua</li>
                                            <li>sanctus sea sed takimata ut vero voluptua</li>
                                            <li>sanctus sea sed takimata ut vero voluptua</li>
                                            <li>sanctus sea sed takimata ut vero voluptua</li>
                                            <li>sanctus sea sed takimata ut vero voluptua</li>
                                        </ul>
                                    </div>


                                    <div role="tabpanel" class="tab-pane" id="tab_preview" aria-expanded="true" aria-labelledby="preview">
                                        <h2 class="my-1">Vorschau</h2>
                                        <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed tempor et et invidunt justo labore Stet clita ea et gubergren, kasd magna no rebum. sanctus sea sed takimata ut vero voluptua. est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
                                        <br>
                                        <h4>Lorem ipsum labore et dolore:</h4>
                                        <ul>
                                            <li>sanctus sea sed takimata ut vero voluptua</li>
                                            <li>sanctus sea sed takimata ut vero voluptua</li>
                                            <li>sanctus sea sed takimata ut vero voluptua</li>
                                            <li>sanctus sea sed takimata ut vero voluptua</li>
                                            <li>sanctus sea sed takimata ut vero voluptua</li>
                                        </ul>
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