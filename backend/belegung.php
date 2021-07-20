<?php
/*
* belegung.php
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
                    <h3 class="content-header-title">Objektbelegungen</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item">Kalender
                                </li>
                                <li class="breadcrumb-item active">Belegung
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
           
            </div>
            <div class="content-body">           

                <?php 

                    
                    ob_start();
                    include('template_parts/tmpl_belegungskalender.php');
                    $content1 = ob_get_clean(); 
                    build_section_toggle('','<span class="step">1</span> Belegung bearbeiten',$content1 );             
               
                    ob_start();
                    include('template_parts/tmpl_belegung_drucken.php');
                    $content2 = ob_get_clean(); 
                    build_section_toggle('','Belegung drucken', $content2);             
              
                    ob_start();
                    include('template_parts/tmpl_kalender_code.php');
                    $content3 = ob_get_clean(); 
                    build_section_toggle('','<span class="step">2</span> Kalender-Code für Ihre Website generieren', $content3);  
                    

                    ob_start();
                    include('template_parts/tmpl_kalender_code_snippet.php');
                    $content4 = ob_get_clean(); 
                    build_section_toggle('','<span class="step">3</span> Diesen Code in Ihre Website einfügen '.build_help_link(), $content4);


                    ob_start();
                    include('template_parts/tmpl_kalender_vorschau.php');
                    $content5 = ob_get_clean(); 
                    build_section_toggle('','<span class="step">4</span> Vorschau', $content5);             
                
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