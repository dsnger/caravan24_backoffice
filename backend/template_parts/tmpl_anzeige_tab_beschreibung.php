<!-- anzeige fahrzeugdaten -->

<form class="form form-horizontal needs-validation">
  <div class="form-body">
    <h3 class="form-section">Beschreibung</h3>
    <!-- row -->
    <div class="row gutter-large">
      <!-- col1 -->
      <div class="col-12 col-lg-6">
        <div class="form-group row">
          <label for="beschreibung" class="col-xl-3 text-nowrap">Beschreibung<span class="text-warning">*</span></label>
          <div class="col-xl-9 mx-auto">

            <ul class="nav nav-tabs nav-underline no-hover-bg">
              <li class="nav-item">
                <a class="nav-link active" id="tablink_beschreibung_de" data-toggle="tab" href="#tab_beschreibung_de" aria-controls="tab_beschreibung_de" aria-expanded="false">Deutsch</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="tablink_beschreibung_en" data-toggle="tab" href="#tab_beschreibung_en" aria-controls="tab_beschreibung_en" aria-expanded="false">Englisch</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" id="tablink_nl" data-toggle="tab" href="#tab_beschreibung_nl" aria-controls="tab_beschreibung_nl">Niederländisch</a>
              </li>
            </ul>
            <div class="tab-content pt-1">
              <div role="tabpanel" class="tab-pane active" id="tab_beschreibung_de" aria-labelledby="tablink_beschreibung_de" aria-expanded="true">
                <textarea rows="10" name="boatDesc_de" class="form-control" wrap="virtual">Ein luxus Ferienhaus zu vermieten ans Wasser mit Liegeplatz vor der Tür im neuen Marinapark Lemmer in Friesland. Das Ferienhaus liegt an einer einzigartiger Stelle mit offener Fahrverbindung zu den Friesischen Seeen und IJsselmeer. Lemmers ist 2,0 Kilometer entfernt und das Strand ist laufend zu erreichen.Das Ferienhaus ist geeignet für 6 Personen und hat eine besondere Einteilung mit zwei Wohngeschöße. Der Wohnzimmer liegt auf den ersten Stock. Das Ferienhaus hat eine große überdachte Terasse mit besonders schöne Aussicht übers Wasser. Haustiere sind nicht erlaubt in dieses Ferienhaus!</textarea>
              </div>
              <div class="tab-pane" id="tab_beschreibung_en" role="tabpanel" aria-labelledby="tablink_beschreibung_en" aria-expanded="false">
                <textarea rows="10" name="boatDesc_en" class="form-control" wrap="virtual">Englischer Text</textarea>
              </div>

              <div class="tab-pane" id="tab_beschreibung_nl" role="tabpanel" aria-labelledby="tablink_beschreibung_nl" aria-expanded="false">
                <textarea rows="10" name="boatDesc_nl" class="form-control" wrap="virtual">Niederländischer Text</textarea>
              </div>
            </div>
          </div>
        </div>

      </div>
      <!-- /col1 -->

    </div>
    <!-- /row -->

  </div>
  <div class="form-actions">
    <button type="submit" class="btn btn-success round">
      <i class="la la-floppy-o"></i> speichern
    </button>
  </div>
</form>

<!-- /anzeige fahrzeugdaten -->