<?php
/*
* pagemodules.php
* Allgemeiner HTML Header
* Version: 1.0
* Projekt: caravan24 backend
*/



function build_section_toggle($id='', $title='Titel hier', $content=''){

  ob_start();
  
  ?>
  <section id="<?php echo $id; ?>">
      <div class="row">
          <div class="col-12">
              <div class="card">
                  <div class="card-header">
                      <h4 class="card-title"><?php echo $title; ?></h4>
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
                          
                          <?php echo $content; ?>

                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

<?php
 echo ob_get_clean(); 
}

function build_help_link($title='Hilfe?', $link='#'){
  ob_start();  
    ?>
    <a href="<?php echo $link; ?>" class="help" data-toggle="tooltip" data-placement="right" data-original-title="Hilfe?"><i class="la la-question-circle"></i></a>
    <?php
 return ob_get_clean(); 
}

?>