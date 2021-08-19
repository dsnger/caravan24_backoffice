<!-- anzeige farhzeugdaten -->

<form class="form form-horizontal">
  <div class="form-body">

    <h3 class="form-section">Objekt bearbeiten</h3>
    <div class="row gutter-large">
      <!-- col1 -->
      <div class="col-12 col-md-6">
        <div class="form-group row">
          <label class="col-xl-3">Objekttyp<span class="text-warning"> *</span></label>
          <div class="col-xl-9 mx-auto">
            <select class="form-control" name="fewoClass" id="SelectObjekttypAufbau">
              <option>Bitte auswählen..</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
        </div>

        <h4 class="form-section">Aufbau</h4>
        <div class="form-group row">
          <label class="col-xl-3">Hersteller<span class="text-warning"> *</span></label>
          <div class="col-xl-9 mx-auto">
            <select class="form-control" name="oMarke" id="SelectHerstellerAufbau">
              <option>Bitte auswählen..</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
        </div>


        <div class="form-group row">
          <label class="col-xl-3">Modell<span class="text-warning"> *</span></label>
          <div class="col-xl-9 mx-auto">
            <input type="text" class="form-control" name="oModell" value="">
          </div>
        </div>

        <div class="form-group row">
          <label class="col-xl-3">Untertitel<span class="text-warning"> *</span></label>
          <div class="col-xl-9 mx-auto">
            <input type="text" class="form-control" name="fewoUntertitel_de" value="">
          </div>
        </div>





      </div>
      <!-- /col1 -->

    </div>

    <h4 class="form-section mt-4">Basisfahrzeug</h4>

    <div class="row gutter-large">

      <!-- col1 -->
      <div class="col-12 col-md-6">

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
            <input type="text" class="form-control" name="fewoName" value="">
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

      <!-- col2 -->
      <div class="col-12 col-md-6">



        <div class="form-group row">
          <label class="col-xl-3">Winterbereifung</label>
          <div class="col-xl-9 mx-auto">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="oWReifen" id="oWReifen" value="true">
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
     
    </div>
    <!-- /col2 -->

  </div>
  <!-- /row -->

  </div>
  <div class="form-actions">
    <button type="submit" class="btn btn-success round">
      <i class="la la-floppy-o"></i> speichern
    </button>
  </div>
</form>


<!-- /objekt bearbeitung info und lage -->