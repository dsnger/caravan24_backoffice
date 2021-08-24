<!-- anzeige fahrzeugdaten -->

<form class="form form-horizontal needs-validation">
  <div class="form-body">
    <h3 class="form-section">Objekt bearbeiten</h3>
    <!-- row -->
    <div class="row gutter-large">
      <!-- col1 -->
      <div class="col-12 col-lg-6">
        <div class="form-group row">
          <label class="col-xl-3">Objekttyp<span class="text-warning"> *</span></label>
          <div class="col-xl-9 mx-auto">
            <select class="form-control" name="fewoClass" id="SelectObjekttypAufbau" required>
              <option value="">Bitte auswählen..</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
            <span class="invalid-feedback">Bitte ausfüllen...</span>
            
          </div>
        
        </div>

        <h4 class="form-section">Aufbau</h4>
        <div class="form-group row">
          <label class="col-xl-3">Hersteller<span class="text-warning"> *</span></label>
          <div class="col-xl-9 mx-auto">
            <select class="form-control" name="oMarke" id="SelectHerstellerAufbau" required>
            <option value="">Bitte auswählen..</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-xl-3">Modell<span class="text-warning"> *</span></label>
          <div class="col-xl-9 mx-auto">
            <input type="text" class="form-control" name="oModell" value="" required>
            <span class="form-tooltip"> (z.B. T448, Roadstar, Camp 681, Charisma790 L, etc.)</span>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-xl-3">Untertitel<span class="text-warning"> *</span></label>
          <div class="col-xl-9 mx-auto">
            <input type="text" class="form-control" name="fewoUntertitel_de" value="" required>
            <span class="form-tooltip"> (Beschreibung hier...)</span>
          </div>
        </div>

      </div>
      <!-- /col1 -->

    </div>
    <!-- /row -->

    <h4 class="form-section mt-4">Basisfahrzeug</h4>

    <!-- row -->
    <div class="row gutter-large">

      <!-- col1 -->
      <div class="col-12 col-lg-6">

        <div class="form-group row">
          <label class="col-xl-3">Hersteller</label>
          <div class="col-xl-9 mx-auto">
            <input type="text" class="form-control" name="oMarke2" value="">
          </div>
        </div>

        <div class="form-group row">
          <label class="col-xl-3">Modell</label>
          <div class="col-xl-9 mx-auto">
            <input type="text" class="form-control" name="oModell2" value="">
          </div>
        </div>

        <div class="form-group row mt-3">
          <label class="col-xl-3">Name<span class="text-warning"> *</span></label>
          <div class="col-xl-9 mx-auto">
            <input type="text" class="form-control" name="fewoName" value="" required>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-xl-3">Name intern</label>
          <div class="col-xl-9 mx-auto">
            <input type="text" class="form-control" name="oNameInt" value="">
          </div>
        </div>

        <div class="form-group row">
          <label class="col-xl-3">Kennzeichen</label>
          <div class="col-xl-9 mx-auto">
            <input type="text" class="form-control" name="oKennzeichen" value="">
          </div>
        </div>


        <div class="form-group row">
          <label class="col-xl-3">Fahrzeug-Ident Nr.</label>
          <div class="col-xl-9 mx-auto">
            <input type="text" class="form-control" name="oFzID" value="">
          </div>
        </div>


        <div class="form-group row">
          <label class="col-xl-3">Fahrzeugschein Nr.</label>
          <div class="col-xl-9 mx-auto">
            <input type="text" class="form-control" name="oFzSchein" value="">
          </div>
        </div>

      </div>
      <!-- /col1 -->
      <!-- col2 -->
      <div class="col-12 col-lg-6">

        <div class="form-group row">
          <label class="col-xl-3">Winterbereifung</label>
          <div class="col-xl-9 mx-auto">
            <div class="form-check form-check-inline skin skin-flat">
              <input class="form-check-input mr-1" type="checkbox" name="oWReifen" id="oWReifen" value="true">
              <label class="form-check-label" for="oWReifen"> Während der Wintermonate mit Winterreifen ausgestattet</label>
            </div>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-xl-3">Anzahl Betten </label>
          <div class="col-xl-4 mr-auto">
            <input type="number" class="form-control" name="oBeds" min="0" max="99" value="">
          </div>
        </div>

        <div class="form-group row">
          <label class="col-xl-3">Anzahl Sitze </label>
          <div class="col-xl-4 mr-auto">
            <input type="number" class="form-control " name="oSeats" min="0" max="99" value="">
          </div>
        </div>


        <div class="form-group row">
        <label class="col-xl-3">Beispiel Multiselect Select2 </label>
        <div class="col mr-auto">
          <select class="select2 form-control" id="countrySelect" multiple="multiple">
              <option selected="selected">United States</option>
              <option>Canada</option>
              <option selected="selected">United Kingdom</option>
              <option>Japan</option>
              <option>Australia</option>
              <option>Germany</option>
              <option selected="selected">India</option>
              <option>Italy</option>
              <option>Sweden</option>
              <option>France</option>
              <option>New Zealand</option>
              <option>Switzerland</option>
              <option>Russia</option>
              <option>England</option>
              <option>Norway</option>
              <option>Greece</option>
              <option>Philippines</option>
              <option>Ireland</option>
              <option>China</option>
              <option>South Korea</option>
          </select>
          </div>
      </div>

      </div>

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