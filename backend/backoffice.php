<!DOCTYPE html>
<html class="loading" lang="de" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>caravan24 - Ferienhausverwaltung für Vermieter</title>
    <link rel="apple-touch-icon" href="../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/components.min.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css/core/menu/menu-types/vertical-menu.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.min.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light bg-primary navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item"><a class="navbar-brand" href="index.html"><img class="brand-logo" alt="caravan24 logo" src="../app-assets/images/logo/logo.png">
                            <h3 class="brand-text">web<span>planner</span></h3>
                        </a></li>
                    <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" href="#"><i class="la la-gear"></i></a></li>
                </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-user nav-item my-auto"><a class="dropdown-toggle nav-link dropdown-user-link round" href="#" data-toggle="dropdown"><span class="mr-1 text-white text-bold-500"><i class="la la-support"></i>Hilfe </span></a></li>
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label round" href="#" ><i class="ficon la la-envelope"></i><span class="badge badge-pill badge-success badge-up">5</span></a></li>
                        <li class="dropdown dropdown-user nav-item my-auto"><a class="dropdown-toggle nav-link dropdown-user-link round" href="#" data-toggle="dropdown"><i class="la la-user"></i><span class="mr-1 text-bold-400">Max Mustermann</span></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="ft-user"></i> Stammdaten</a>
                                <a class="dropdown-item" href="#"><i class="la la-file-text"></i> Email-Templates</a>
                                <a class="dropdown-item" href="#"><i class="la la-key"></i> Logindaten</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="ft-power"></i> Ausloggen </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->

    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a href="index.html"><i class="la la-home"></i><span class="menu-title" >Dashboard</span><span class="badge badge badge-info badge-pill float-right">5</span></a>
                </li>
                <li class=" nav-item"><a href="#"><i class="la la-calendar"></i><span class="menu-title" >Kalender</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="#"><i class="la la-calendar"></i>Belegung</a>
                        </li>
                        <li><a class="menu-item" href="#"><i class="la la-list-alt"></i>Objekte / Details</a>
                        </li>
                        <li><a class="menu-item" href="#"><i class="la la-money"></i>Preise</a>
                        </li>
                        <li><a class="menu-item" href="#"><i class="la la-cart-plus"></i>Zusatzleistungen</a>
                        </li>
                        <li class="navigation-divider"><hr></li>
                        <li><a class="menu-item" href="#"><i class="la la-bar-chart"></i>Statistik</a>
                        </li>
                        <li><a class="menu-item" href="#"><i class="la la-suitcase"></i>Anfragen<span class="badge badge badge-info badge-pill float-right">3</span></a>
                        </li>
                        <li class="navigation-divider"><hr></li>
                        <li><a class="menu-item" href="#"><i class="la la-save"></i>Backup Belegung</a>
                        </li>
                        <li><a class="menu-item" href="#"><i class="la la-cogs"></i>Kalendereinstellungen</a>
                        </li> 
                   </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="la la-exchange"></i><span class="menu-title" >Channelmanager</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="#"><i class="la la-sitemap"></i>Buchungsportale</a>
                        </li>
                        <li><a class="menu-item" href="#"><i class="la la-desktop"></i>Vermieter Homepage</a>
                        </li>
                        <li><a class="menu-item" href="#"><i class="la la-search-plus"></i>Eigenes Suchformular</a>
                        </li>
                        <li><a class="menu-item" href="#"><i class="la la-desktop"></i>Kostenlose Portale</a>
                        </li>
                   </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="la la-folder-o"></i><span class="menu-title" >Backoffice</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="#"><i class="la la-file-text"></i>Vertäge/Rechnungen</a>
                        </li>
                        <li><a class="menu-item" href="#"><i class="la la-file"></i>Neuer Vertrag</a>
                        </li>
                        <li><a class="menu-item" href="#"><i class="la la-users"></i>Kundenverwaltung</a>
                        </li>
                        <li><a class="menu-item" href="#"><i class="la la-calendar-check-o"></i>CheckIn/CheckOut</a>
                        </li>
                        <li class="navigation-divider"></li>
                        <li><a class="menu-item" href="#"><i class="la la-eur"></i>Rechnungsdaten</a>
                        </li>
                        <li><a class="menu-item" href="#"><i class="la la-keyboard-o"></i>Keywords</a>
                        </li>
                        <li><a class="menu-item" href="#"><i class="la la-save"></i>Backup Backoffice</a>
                        </li> 
                   </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="la la-gear"></i><span class="menu-title" >Einstellungen</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="#"><i class="la la-user"></i>Stammdaten</a>
                        </li>
                        <li><a class="menu-item" href="#"><i class="la la-file-text"></i>Email Templates</a>
                        </li>
                        <li><a class="menu-item" href="#"><i class="la la-key"></i>Logindaten</a>
                        </li> 
                   </ul>
                </li>
                
                <li class=" navigation-header"><span>Support</span><i class="la la-ellipsis-h" data-toggle="tooltip" data-placement="right" data-original-title="Support"></i>
                </li>
                <li class=" nav-item"><a href="#"><i class="la la-support"></i><span class="menu-title" >Hilfe</span></a>
                </li>
                <li class=" nav-item"><a href="#"><i class="la la-book"></i><span class="menu-title" >Dokumentation</span></a>
                </li>
            </ul>
        </div>
    </div>

    <!-- END: Main Menu-->
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

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2019 <a class="text-bold-800 grey darken-2" href="https://www.caravan24.de" target="_blank">caravan24</a></span></p>
        <!-- <span id="scroll-top" style="display: inline;"></span> -->
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../app-assets/js/core/app-menu.js"></script>
    <script src="../app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>