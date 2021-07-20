<?php
/*
* documentation.php
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
                    <h3 class="content-header-title">caravan24 Dashboard</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">Beispielseite
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>

            </div>
            <div class="content-body">

                <section id="overview">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Überblick</h4>
                            <p>Statistiken</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="media-body text-left">
                                                <h3 class="danger">278</h3>
                                                <span>Neue Anfragen</span>
                                            </div>
                                            <div class="align-self-center">
                                                <i class="la la-suitcase danger font-large-2 float-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="media-body text-left">
                                                <h3 class="success">80%</h3>
                                                <span>Auslastung</span>
                                            </div>
                                            <div class="align-self-center">
                                                <i class="la la-bed success font-large-2 float-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="media-body text-left">
                                                <h3 class="warning">10</h3>
                                                <span>Objekte</span>
                                            </div>
                                            <div class="align-self-center">
                                                <i class="la la-building warning font-large-2 float-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="round-buttons">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Sektion zum ein- und ausklappen</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <p>Beispielbuttons rund</p>
                                                <div class="form-group">
                                                    <!-- basic buttons -->
                                                    <button type="button" class="btn btn-secondary round btn-min-width mr-1 mb-1">Secondary</button>
                                                    <button type="button" class="btn btn-primary round btn-min-width mr-1 mb-1">Primary</button>
                                                    <button type="button" class="btn btn-success round btn-min-width mr-1 mb-1">Success</button>
                                                    <button type="button" class="btn btn-info round btn-min-width mr-1 mb-1">Info</button>
                                                    <button type="button" class="btn btn-warning round btn-min-width mr-1 mb-1">Warning</button>
                                                    <button type="button" class="btn btn-danger round btn-min-width mr-1 mb-1">Danger</button>
                                                    <button type="button" class="btn btn-light round btn-min-width mr-1 mb-1">Light</button>
                                                    <button type="button" class="btn btn-dark round btn-min-width mr-1 mb-1">Dark</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="round-buttons">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Sektion mit Akkordionbeispiel</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <div class="row">

                                            <div class="col-lg-12">
                                                <div class="mb-2 mt-2">
                                                    <h5 class="mb-0 text-uppercase">Akkordion Icon links</h5>
                                                </div>
                                                <div id="accordionWrap2" role="tablist" aria-multiselectable="true">
                                                    <div class="card collapse-icon accordion-icon-rotate left">
                                                        <div id="heading21" class="card-header">
                                                            <a data-toggle="collapse" href="#accordion21" aria-expanded="false" aria-controls="accordion21" class="card-title lead collapsed">Accordion Group Item #1</a>
                                                        </div>
                                                        <div id="accordion21" role="tabpanel" data-parent="#accordionWrap2" aria-labelledby="heading21" class="collapse">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="heading22" class="card-header">
                                                            <a data-toggle="collapse" href="#accordion22" aria-expanded="false" aria-controls="accordion22" class="card-title lead collapsed">Accordion Group Item #2</a>
                                                        </div>
                                                        <div id="accordion22" role="tabpanel" data-parent="#accordionWrap2" aria-labelledby="heading22" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="heading23" class="card-header">
                                                            <a data-toggle="collapse" href="#accordion23" aria-expanded="false" aria-controls="accordion23" class="card-title lead collapsed">Accordion Group Item #3</a>
                                                        </div>
                                                        <div id="accordion23" role="tabpanel" data-parent="#accordionWrap2" aria-labelledby="heading23" class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="heading24" class="card-header">
                                                            <a data-toggle="collapse" href="#accordion24" aria-expanded="false" aria-controls="accordion24" class="card-title lead collapsed">Accordion Group Item #4</a>
                                                        </div>
                                                        <div id="accordion24" role="tabpanel" data-parent="#accordionWrap2" aria-labelledby="heading24" class="collapse" aria-expanded="false" style="height: 0px;">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>




                <section id="tabs">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
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
            </div>
            </section>

            <section id="tab-pills">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body ">
                            <ul class="nav nav-pills nav-fill">
                                <li class="nav-item">
                                    <a class="nav-link active" id="belegung2" data-toggle="tab" aria-controls="desc" href="#tab_belegung2" aria-expanded="true"><i class="la la-calendar"></i>Belegung</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="calcode2" data-toggle="tab" aria-controls="ratings" href="#tab_calcode2" aria-expanded="false"><i class="la la-calendar"></i>Kalender Code</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="preview2" data-toggle="tab" aria-controls="comment" href="#tab_preview2" aria-expanded="false"><i class="la la-eye"></i>Vorschau</a>
                                </li>
                            </ul>

                            <div class="product-content tab-content px-1 pt-1">
                                <div role="tabpanel" class="tab-pane active" id="tab_belegung2" aria-expanded="true" aria-labelledby="belegung2">
                                    <h2 class="my-1"></i>Belegung</h2>
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

                                <div role="tabpanel" class="tab-pane" id="tab_calcode2" aria-expanded="true" aria-labelledby="calcode2">
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


                                <div role="tabpanel" class="tab-pane" id="tab_preview2" aria-expanded="true" aria-labelledby="preview2">
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
        </div>
        </section>



    </div>
    </div>
    </div>
    <!-- END: Content-->

    <?php
    include('template_parts/tmpl_footer.php');
    ?>