<?php
/*
* tmpl_main-menu.php
* Hauptmenu
* Version: 1.0
* Projekt: caravan24 backend
*/

?>
<!-- BEGIN: Main Menu-->

<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a href="index.php"><i class="la la-home"></i><span class="menu-title">Dashboard</span><span class="badge badge badge-primary badge-pill float-right">5</span></a>
            </li>
            <li class=" nav-item"><a href="preistafeln.php"><i class="la la-money"></i><span class="menu-title">Preistafeln</span></a></li>
            <li class=" nav-item"><a href="anzeige.php"><i class="la la-truck"></i><span class="menu-title">Anzeigen</span></a></li>
            <li class=" nav-item"><a href="#"><i class="la la-calendar"></i><span class="menu-title">Kalender</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="belegung.php"><i class="la la-calendar"></i>Belegung</a>
                    </li>
                    <li><a class="menu-item" href="objekte.php"><i class="la la-list-alt"></i>Objekte / Details</a>
                    </li>
                    <li><a class="menu-item" href="preise.php"><i class="la la-money"></i>Preise</a>
                    </li>
                    <li><a class="menu-item" href="#"><i class="la la-cart-plus"></i>Zusatzleistungen</a>
                    </li>
                    <li class="navigation-divider">
                        <hr>
                    </li>
                    <li><a class="menu-item" href="#"><i class="la la-bar-chart"></i>Statistik</a>
                    </li>
                    <li><a class="menu-item" href="#"><i class="la la-suitcase"></i>Anfragen<span class="badge badge badge-info badge-pill float-right">3</span></a>
                    </li>
                    <li class="navigation-divider">
                        <hr>
                    </li>
                    <li><a class="menu-item" href="#"><i class="la la-save"></i>Backup Belegung</a>
                    </li>
                    <li><a class="menu-item" href="#"><i class="la la-cogs"></i>Kalendereinstellungen</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item nav-item--disabled"><a href="channelmanager.php" title="Nicht freigeschaltet"><i class="la la-exchange"></i><span class="menu-title">Channelmanager</span></a>
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
            <li class=" nav-item"><a href="#"><i class="la la-folder-o"></i><span class="menu-title">Backoffice</span></a>
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
            <li class=" nav-item"><a href="#"><i class="la la-gear"></i><span class="menu-title">Einstellungen</span></a>
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
            <li class=" nav-item"><a href="#"><i class="la la-support"></i><span class="menu-title">Hilfe</span></a>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-book"></i><span class="menu-title">Dokumentation</span></a>
            </li>
        </ul>
    </div>
</div>

<!-- END: Main Menu-->