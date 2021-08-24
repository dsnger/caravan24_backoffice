<!-- anzeige fahrzeugdaten -->

<form class="form form-horizontal needs-validation repeater">
  <div class="form-body">
    <h3 class="form-section">Fotos</h3>
    <!-- row -->
    <div class="row gutter-large">
      <!-- col1 -->
      <div class="col-12 col-lg-8">

        <!-- callout -->
        <div class="bs-callout-primary mb-5 shadow-sm">
          <div class="media align-items-stretch">
            <div class="media-left media-middle bg-primary p-2">
              <i class="la la-info-circle white font-medium-5"></i>
            </div>
            <div class="media-body p-1">
              <strong></strong>
              <p>Das 1. Foto wird von uns ausgewählt und ausschließlich für Suchergebnis-Übersichtseiten verwendet z.B. auf Caravan24.de.
                Das Foto darf keine Werbung oder Kennzeichnung enthalten und muss eine Aussenansicht des Fahrzeugs zeigen.</p>
            </div>
          </div>
        </div>


        <div class="form-group col-12 mb-2 file-repeater">
          <div data-repeater-list="repeater-list">
            <div data-repeater-item="">
              <div class="row mb-1">
                <div class="col-9 col-xl-10">
                  <label class="file center-block">
                    <input type="file" id="file">
                    <span class="file-custom"></span>
                  </label>
                </div>
                <div class="col-2 col-xl-2">
                  <button type="button" data-repeater-delete="" class="btn btn-icon btn-danger mr-1"><i class="ft-x"></i></button>
                </div>
              </div>
            </div>
       
          </div>

          <button type="button" data-repeater-create="" class="btn btn-secondary round">
            <i class="ft-plus"></i> Foto hinzufügen
          </button>
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