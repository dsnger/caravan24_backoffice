<!-- objekt bearbeitung info und lage -->
<div class="card-body bg-light">
  <form class="form form-horizontal">
    <div class="form-body">
      <div class="row gutter-large">
        <!-- col1 -->
        <div class="col-xxl-6 col-xxxl-4">

          <h4 class="form-section">Objektinfos</h4>
          <div class="form-group row">
            <label for="was" class="col-xl-3">Objektname<span class="text-warning">*</span></label>
            <div class="col-xl-9 mx-auto">
              <input type="text" class="form-control" value="Holiday Home">
            </div>
          </div>


          <div class="form-group row">
            <label for="fewosel" class="col-xl-3">Belegung max. </label>
            <div class="col-xl-9 mx-auto">
              <div class="input-group">
                <input type="number" class="form-control" aria-describedby="gesamtpersonen" value="10">
                <div class="input-group-append">
                  <span class="input-group-text" id="personen">Personen</span>
                </div>
              </div>
            </div>
          </div>


          <div class="form-group row">
            <label for="methode" class="col-xl-3">Erwachsene max.</label>
            <div class="col-xl-9 mx-auto">
              <div class="input-group">
                <input type="number" class="form-control" aria-describedby="erwpersonen" value="8">
                <div class="input-group-append">
                  <span class="input-group-text" id="erwpersonen">Erwachsene</span>
                </div>
              </div>
            </div>
          </div>


          <div class="form-group row">
            <label for="sprache" class="col-xl-3">Kinder max.</label>
            <div class="col-xl-9 mx-auto">
              <div class="input-group">
                <input type="number" class="form-control" aria-describedby="kindpersonen" value="2">
                <div class="input-group-append">
                  <span class="input-group-text" id="erwpersonen">Kinder</span>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label for="farben" class="col-xl-3"></label>
            <div class="col-xl-9 mx-auto">
              <input type="text" class="form-control" placeholder="z. B. Kinder ab 14 Jahre" value="">
            </div>
          </div>

        </div>
        <!-- /col1 -->

        <!-- col2 -->
        <div class="col-xxl-6 col-xxxl-4">

          <h4 class="form-section">Adresse</h4>
          <div class="form-group row">
            <label for="was" class="col-xl-3">Straße</label>
            <div class="col-xl-9 mx-auto">
              <input type="text" class="form-control" value="Schlossallee">
            </div>
          </div>


          <div class="form-group row">
            <label for="fewosel" class="col-xl-3">PLZ<span class="text-warning">*</span></label>
            <div class="col-xl-9 mx-auto">
              <input type="number" class="form-control basic-maxlength" maxlength="5" value="12345">
            </div>
          </div>


          <div class="form-group row">
            <label for="methode" class="col-xl-3">Ort<span class="text-warning">*</span></label>
            <div class="col-xl-9 mx-auto">
              <input type="text" class="form-control" value="Köln">
            </div>
          </div>


          <div class="form-group row">
            <label for="sprache" class="col-xl-3">Land<span class="text-warning">*</span></label>
            <div class="col-xl-9 mx-auto">
              <input type="text" class="form-control" value="Deutschland" disabled>
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
</div>

<!-- /objekt bearbeitung info und lage -->