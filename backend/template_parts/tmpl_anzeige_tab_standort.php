<!-- anzeige standort -->

<form class="form form-horizontal">
  <div class="form-body">

    <h3 class="form-section">Standort bearbeiten</h3>
    <div class="row gutter-large">
      <!-- col1 -->
      <div class="col-12 col-md-6">

          <h4 class="form-section">Adresse</h4>
          <div class="form-group row">
            <label for="was" class="col-xl-3">Straße</label>
            <div class="col-xl-9 mx-auto">
              <input type="text" name="fewoStreet" class="form-control" value="">
            </div>
          </div>


          <div class="form-group row">
            <label for="fewosel" class="col-xl-3">PLZ <span class="text-warning">*</span></label>
            <div class="col-xl-9 mx-auto">
              <input type="number" class="form-control basic-maxlength" maxlength="5" value="12345">
            </div>
          </div>


          <div class="form-group row">
            <label for="methode" class="col-xl-3">Ort <span class="text-warning">*</span></label>
            <div class="col-xl-9 mx-auto">
              <input type="text" class="form-control" name="fewoLocation" value="">
            </div>
          </div>


          <div class="form-group row">
            <label for="sprache" class="col-xl-3">Land <span class="text-warning">*</span></label>
            <div class="col-xl-9 mx-auto">
              <input type="text" class="form-control" value="Deutschland">
            </div>
          </div>

          <h4 class="form-section">Koordinaten</h4>

          <div class="form-group row">
            <label for="sprache" class="col-xl-3">Lat. N</label>
            <div class="col-xl-9 mx-auto">
              <input type="text" class="form-control" name="fewoLat" value="0">
            </div>
          </div>
          <div class="form-group row">
            <label for="sprache" class="col-xl-3">Lon. E</label>
            <div class="col-xl-9 mx-auto">
              <input type="text" class="form-control" name="fewoLong" value="0">
            </div>
          </div>

      </div>
      <!-- /col1 -->
    </div>

  </div>
  <!-- /row -->


  <div class="form-actions">
    <button type="submit" class="btn btn-success round">
      <i class="la la-floppy-o"></i> speichern
    </button>
  </div>
</form>


<!-- /objekt bearbeitung info und lage -->