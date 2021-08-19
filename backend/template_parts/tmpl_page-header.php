<?php
/*
* tmpl_page-header.php
* Seitenkopfleiste und Menu
* Version: 1.0
* Projekt: caravan24 backend
*/
?>
<!-- BEGIN: Header-->
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item">
                        <a class="navbar-brand" href="index.php"><img class="brand-logo" alt="caravan24 logo" src="assets/img/caravan24-logo.svg"></a></li>
                        <a class="navbar-brand" href="index.php"><img class="brand-logo-collapsed d-none" alt="caravan24 logo" src="assets/img/caravan24-logo-icon.svg"></a>
                    
                </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i> &nbsp;Menu</a></li>
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-user nav-item my-auto"><a class="dropdown-toggle nav-link dropdown-user-link round" href="#" data-toggle="dropdown"><span class="mr-1 text-white text-bold-500"><i class="la la-support"></i>Hilfe </span></a></li>
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label round" href="#" ><i class="ficon la la-envelope"></i><span class="badge badge-pill badge-secondary badge-up">5</span></a></li>
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