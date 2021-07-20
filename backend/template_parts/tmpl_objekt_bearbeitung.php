<div class="card collapse-icon accordion-icon-rotate">
  <div id="heading_objekt_info" class="card-header">
    <a data-toggle="collapse" href="#objekt_info" aria-expanded="false" aria-controls="objekt_info" class="card-title ´collapsed"><i class="la la-info"></i> Info und Lage</a>
  </div>
  <div id="objekt_info" role="tabpanel" aria-labelledby="heading_objekt_info" class="collapse" style="">
    <div class="card-content ">
      <?php include('tmpl_objekt_bearbeitung_info_lage.php'); ?>
    </div>
  </div>

  <div id="heading_objekt_beschreibung" class="card-header">
    <a data-toggle="collapse" href="#objekt_beschreibung" aria-expanded="false" aria-controls="objekt_beschreibung" class="card-title lead collapsed"><i class="la la-paste"></i> Beschreibung</a>
  </div>
  <div id="objekt_beschreibung" role="tabpanel" aria-labelledby="heading_objekt_beschreibung" class="collapse" aria-expanded="false">
    <div class="card-content">
      <?php include('tmpl_objekte_bearbeitung_beschreibung.php'); ?>
    </div>
  </div>
  <div id="heading_objekt_fotos" class="card-header">
    <a data-toggle="collapse" href="#objekt_fotos" aria-expanded="false" aria-controls="objekt_fotos" class="card-title lead collapsed"><i class="la la-image"></i> Fotos</a>
  </div>
  <div id="objekt_fotos" role="tabpanel" aria-labelledby="heading_objekt_fotos" class="collapse" aria-expanded="false" style="height: 0px;">
    <div class="card-content">

      <?php include('tmpl_objekte_bearbeitung_fotos.php'); ?>

    </div>
  </div>

  <div id="heading_objekt_ausstattung" class="card-header">
    <a data-toggle="collapse" href="#objekt_ausstattung" aria-expanded="false" aria-controls="objekt_ausstattung" class="card-title lead collapsed"><i class="la la-star-o"></i> Ausstattung</a>
  </div>
  <div id="objekt_ausstattung" role="tabpanel" aria-labelledby="heading_objekt_ausstattung" class="collapse" aria-expanded="false" style="height: 0px;">
    <div class="card-content">
      <?php include('tmpl_objekte_bearbeitung_ausstattung.php');
      ?>
    </div>
  </div>

  <div id="heading_objekt_links" class="card-header">
    <a data-toggle="collapse" href="#objekt_links" aria-expanded="false" aria-controls="objekt_links" class="card-title lead collapsed"><i class="la la-link"></i> Links</a>
  </div>
  <div id="objekt_links" role="tabpanel" aria-labelledby="heading_objekt_links" class="collapse" aria-expanded="false" style="height: 0px;">
    <div class="card-content">
      <div class="card-body bg-light">
        <form class="form form-horizontal">
          <div class="form-body">
            <div class="row gutter-large">
              <div class="col-xl-4">
                <div class="bs-callout-primary mb-2 shadow-sm">
                  <div class="media align-items-stretch">
                    <div class="media-left media-middle bg-primary p-2">
                      <i class="la la-info-circle white font-medium-5"></i>
                    </div>
                    <div class="media-body p-1">
                      <strong></strong>
                      <p>Hier können Sie den Link zu den Objekt-Details auf Ihrer Webseite angeben.
                        Das Suchformular verlinkt dann auf Ihre Detailseiten</p>
                    </div>
                  </div>
                </div>

                <h4 class="form-section">Räume und Fläche</h4>

                <div class="form-group row">
                  <label for="lang_de" class="col-xl-3 text-nowrap">Deutsch</label>
                  <div class="col-xl-9 ">
                    <div class="input-group mb-1">
                      <input type="text" class="form-control" value="" placeholder="Link einfügen...">
                      <div class="input-group-append">
                        <span class="input-group-text" id="lang_de"><i class="flag-icon flag-icon-de"></i></span>
                      </div>
                    </div>
                  </div>
                  <label for="lang_gb" class="col-xl-3 text-nowrap">Englisch</label>
                  <div class="col-xl-9 ">
                    <div class="input-group mb-1">
                      <input type="text" class="form-control" value="" placeholder="Link einfügen...">
                      <div class="input-group-append">
                        <span class="input-group-text" id="lang_gb"><i class="flag-icon flag-icon-gb"></i></span>
                      </div>
                    </div>
                  </div>
                  <label for="lang_nl" class="col-xl-3 text-nowrap">Niederlande</label>
                  <div class="col-xl-9 ">
                    <div class="input-group mb-1">
                      <input type="text" class="form-control" value="" placeholder="Link einfügen...">
                      <div class="input-group-append">
                        <span class="input-group-text" id="lang_nl"><i class="flag-icon flag-icon-nl"></i></span>
                      </div>
                    </div>
                  </div>
                  <label for="lang_fr" class="col-xl-3 text-nowrap">Francais</label>
                  <div class="col-xl-9 ">
                    <div class="input-group mb-1">
                      <input type="text" class="form-control" value="" placeholder="Link einfügen...">
                      <div class="input-group-append">
                        <span class="input-group-text" id="lang_fr"><i class="flag-icon flag-icon-fr"></i></span>
                      </div>
                    </div>
                  </div>
                  <label for="lang_es" class="col-xl-3 text-nowrap">Spanisch</label>
                  <div class="col-xl-9 ">
                    <div class="input-group mb-1">
                      <input type="text" class="form-control" value="" placeholder="Link einfügen...">
                      <div class="input-group-append">
                        <span class="input-group-text" id="lang_es"><i class="flag-icon flag-icon-es"></i></span>
                      </div>
                    </div>
                  </div>
                  <label for="lang_it" class="col-xl-3 text-nowrap">Italienisch</label>
                  <div class="col-xl-9 ">
                    <div class="input-group mb-1">
                      <input type="text" class="form-control" value="" placeholder="Link einfügen...">
                      <div class="input-group-append">
                        <span class="input-group-text" id="lang_it"><i class="flag-icon flag-icon-it"></i></span>
                      </div>
                    </div>
                  </div>
                </div>


              </div>
            </div>
            <div class="form-actions">
              <button type="submit" class="btn btn-success round">
                <i class="la la-floppy-o"></i> speichern
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>

  </div>
  <div id="heading_objekt_seo" class="card-header">
    <a data-toggle="collapse" href="#objekt_seo" aria-expanded="false" aria-controls="objekt_seo" class="card-title lead collapsed"><i class="la la-check-square"></i> Suchmaschinen Optimierung</a>
  </div>
  <div id="objekt_seo" role="tabpanel" aria-labelledby="heading_objekt_seo" class="collapse" aria-expanded="false" style="height: 0px;">
    <div class="card-content">
      <div class="card-body bg-light">
        <div class="row">
          <div class="col-xl-6">



            <form class="form form-horizontal">
              <div class="form-body">

                <h4 class="form-section">SEO-Angaben</h4>

                <div class="bs-callout-primary mb-2 shadow-sm">
                  <div class="media align-items-stretch">
                    <div class="media-left media-middle bg-primary p-2">
                      <i class="la la-info-circle white font-medium-5"></i>
                    </div>
                    <div class="media-body p-1">
                      <strong></strong>
                      <p>Hier können Sie Meta-Daten zur Suchmaschinen-Optimierung Eintragen.
                        Diese werden für die Vermieter Homepage verwendet</p>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="beschreibung" class="col-xl-3 text-nowrap">SEO-Titel</label>
                  <div class="col-xl-9 mx-auto">
                    <input type="text" class="form-control" value="">
                  </div>
                </div>



                <div class="form-group row">
                  <label for="meta" class="col-xl-3 text-nowrap">Meta-Beschreibung<span class="text-warning">*</span></label>
                  <div class="col-xl-9 mx-auto">

                    <ul class="nav nav-tabs nav-underline no-hover-bg bg-light">
                      <li class="nav-item">
                        <a class="nav-link active" id="tablinkmeta_de" data-toggle="tab" href="#tab_meta_de" aria-controls="tab_meta_de" aria-expanded="false">Deutsch</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="tablink_meta_en" data-toggle="tab" href="#tab_meta_en" aria-controls="tab_meta_en" aria-expanded="false">Englisch</a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" id="tablink_nl" data-toggle="tab" href="#tab_meta_nl" aria-controls="tab_meta_nl">Niederländisch</a>
                      </li>
                    </ul>
                    <div class="tab-content pt-1">
                      <div role="tabpanel" class="tab-pane active" id="tab_meta_de" aria-labelledby="tablink_meta_de" aria-expanded="true">
                        <textarea rows="10" name="boatDesc_de" class="form-control" wrap="virtual">Ein luxus Ferienhaus zu vermieten ans Wasser mit Liegeplatz vor der Tür im neuen Marinapark Lemmer in Friesland. Das Ferienhaus liegt an einer einzigartiger Stelle mit offener Fahrverbindung zu den Friesischen Seeen und IJsselmeer. Lemmers ist 2,0 Kilometer entfernt und das Strand ist laufend zu erreichen.Das Ferienhaus ist geeignet für 6 Personen und hat eine besondere Einteilung mit zwei Wohngeschöße. Der Wohnzimmer liegt auf den ersten Stock. Das Ferienhaus hat eine große überdachte Terasse mit besonders schöne Aussicht übers Wasser. Haustiere sind nicht erlaubt in dieses Ferienhaus!</textarea>
                      </div>
                      <div class="tab-pane" id="tab_meta_en" role="tabpanel" aria-labelledby="tablink_meta_en" aria-expanded="false">
                        <textarea rows="10" name="boatDesc_en" class="form-control" wrap="virtual">Englischer Text</textarea>
                      </div>

                      <div class="tab-pane" id="tab_meta_nl" role="tabpanel" aria-labelledby="tablink_meta_nl" aria-expanded="false">
                        <textarea rows="10" name="boatDesc_nl" class="form-control" wrap="virtual">Niederländischer Text</textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-actions">
                  <button type="submit" class="btn btn-success round">
                    <i class="la la-floppy-o"></i> speichern
                  </button>
                </div>
              </div>
            </form>

          </div>
        </div>

      </div>

    </div>
  </div>

</div>