<div class="card-body bg-light">

  <form class="form form-horizontal">
    <div class="form-body">
      <div class="row gutter-large">
        <!-- col1 -->
        <div class="col-xxl-6 col-xxxl-6">
          <h4 class="form-section">Ausführliche Beschreibung</h4>
          <div class="form-group row">
            <label for="fewoClass" class="col-xl-3 text-nowrap">Objekttyp<span class="text-warning">*</span></label>
            <div class="col-xl-9 mx-auto">
              <select class="form-control" name="fewoClass">
                <option value=""></option>
                <option value="FW" selected="">Ferienwohnung</option>
                <option value="FH">Ferienhaus</option>
                <option value="EZ">Einzelzimmer</option>
                <option value="DZ">Doppelzimmer</option>
                <option value="TZ">Triple Zimmer</option>
                <option value="QZ">Quad Zimmer</option>
                <option value="MZ">Mehrbettzimmer</option>
                <option value="BU">Bungalow</option>
                <option value="EB">Einzelbett</option>
                <option value="DB">Doppelbett</option>
                <option value="WM">Wohnmobil</option>
                <option value="WW">Wohnwagen</option>
              </select>
            </div>
          </div>

          <!-- <h4 class="form-section"></h4> -->
          <div class="form-group row">
            <label for="beschreibung" class="col-xl-3 text-nowrap">Beschreibung<span class="text-warning">*</span></label>
            <div class="col-xl-9 mx-auto">

              <ul class="nav nav-tabs nav-underline no-hover-bg bg-light">
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

          <!-- <h4 class="form-section"></h4> -->
          <div class="form-group row">
            <label for="beschreibung" class="col-xl-3">Garten<span class="text-warning">*</span></label>
            <div class="col-xl-9 mx-auto">

              <ul class="nav nav-tabs nav-underline no-hover-bg bg-light">
                <li class="nav-item">
                  <a class="nav-link active" id="tablink_garten_de" data-toggle="tab" href="#tab_garten_de" aria-controls="tab_garten_de" aria-expanded="false">Deutsch</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="tablink_garten_en" data-toggle="tab" href="#tab_garten_en" aria-controls="tab_garten_en" aria-expanded="false">Englisch</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" id="tablink_garten_nl" data-toggle="tab" href="#tab_garten_nl" aria-controls="tab_garten_nl">Niederländisch</a>
                </li>
              </ul>
              <div class="tab-content pt-1">
                <div role="tabpanel" class="tab-pane active" id="tab_garten_de" aria-labelledby="tablink_garten_de" aria-expanded="true">
                  <textarea rows="10" name="boatDesc_de" class="form-control" wrap="virtual">Ein luxus Ferienhaus zu vermieten ans Wasser mit Liegeplatz vor der Tür im neuen Marinapark Lemmer in Friesland. Das Ferienhaus liegt an einer einzigartiger Stelle mit offener Fahrverbindung zu den Friesischen Seeen und IJsselmeer. Lemmers ist 2,0 Kilometer entfernt und das Strand ist laufend zu erreichen.Das Ferienhaus ist geeignet für 6 Personen und hat eine besondere Einteilung mit zwei Wohngeschöße. Der Wohnzimmer liegt auf den ersten Stock. Das Ferienhaus hat eine große überdachte Terasse mit besonders schöne Aussicht übers Wasser. Haustiere sind nicht erlaubt in dieses Ferienhaus!</textarea>
                </div>
                <div class="tab-pane" id="tab_garten_en" role="tabpanel" aria-labelledby="tablink_garten_en" aria-expanded="false">
                  <textarea rows="10" name="boatDesc_en" class="form-control" wrap="virtual">Englischer Text</textarea>
                </div>

                <div class="tab-pane" id="tab_garten_nl" role="tabpanel" aria-labelledby="tablink_garten_nl" aria-expanded="false">
                  <textarea rows="10" name="boatDesc_nl" class="form-control" wrap="virtual">Niederländischer Text</textarea>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="col-xxl-6 col-xxxl-4">
          <h4 class="form-section">Räume und Fläche</h4>

          <div class="form-group row">
            <label for="rooms" class="col-xl-3 text-nowrap">Räume gesamt</label>
            <div class="col-xl-9 ">
              <div class="input-group">
                <input type="number" class="form-control" value="10">
                <div class="input-group-append">
                  <span class="input-group-text" id="rooms">Anzahl</span>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="rooms" class="col-xl-3 text-nowrap">Schlafzimmer</label>
            <div class="col-xl-9 ">
              <div class="input-group">
                <input type="number" class="form-control" value="10">
                <div class="input-group-append">
                  <span class="input-group-text" id="schlafzimmer">Anzahl</span>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label for="rooms" class="col-xl-3 text-nowrap">Badezimmer</label>
            <div class="col-xl-9 ">
              <div class="input-group">
                <input type="number" class="form-control" value="10">
                <div class="input-group-append">
                  <span class="input-group-text" id="badezimmer">Anzahl</span>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label for="rooms" class="col-xl-3 text-nowrap">Wohnfläche</label>
            <div class="col-xl-9 ">
              <div class="input-group">
                <input type="number" class="form-control" value="10">
                <div class="input-group-append">
                  <span class="input-group-text" id="wohnflaeche">m<sup>2</sup></span>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label for="rooms" class="col-xl-3 text-nowrap">Grundstück</label>
            <div class="col-xl-9 ">
              <div class="input-group">
                <input type="number" class="form-control" value="10">
                <div class="input-group-append">
                  <span class="input-group-text" id="grundstueck">m<sup>2</sup></span>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="rooms" class="col-xl-3 text-nowrap">Parkplätze</label>
            <div class="col-xl-9 ">
              <div class="input-group">
                <input type="number" class="form-control" value="10">
                <div class="input-group-append">
                  <span class="input-group-text" id="parkplatz">Anzahl</span>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

      <h4 class="form-section">Entfernungen Umfeld</h4>
      <div class="row gutter-large">

        <div class="col-xl-4">


          <div class="form-group row">
            <label for="rooms" class="col-xl-3 text-nowrap">Zentrum</label>
            <div class="col-xl-9 ">
              <div class="input-group">
                <input type="number" class="form-control" value="10">
                <div class="input-group-append">
                  <span class="input-group-text">km</span>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="rooms" class="col-xl-3 text-nowrap">Zentrum</label>
            <div class="col-xl-9 ">
              <div class="input-group">
                <input type="number" class="form-control" value="10">
                <div class="input-group-append">
                  <span class="input-group-text">km</span>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="rooms" class="col-xl-3 text-nowrap">Zentrum</label>
            <div class="col-xl-9 ">
              <div class="input-group">
                <input type="number" class="form-control" value="10">
                <div class="input-group-append">
                  <span class="input-group-text">km</span>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="rooms" class="col-xl-3 text-nowrap">Zentrum</label>
            <div class="col-xl-9 ">
              <div class="input-group">
                <input type="number" class="form-control" value="10">
                <div class="input-group-append">
                  <span class="input-group-text">km</span>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="rooms" class="col-xl-3 text-nowrap">Zentrum</label>
            <div class="col-xl-9 ">
              <div class="input-group">
                <input type="number" class="form-control" value="10">
                <div class="input-group-append">
                  <span class="input-group-text">km</span>
                </div>
              </div>
            </div>
          </div>


        </div>


        <div class="col-xl-4">

          <div class="form-group row">
            <label for="rooms" class="col-xl-3 text-nowrap">Zentrum</label>
            <div class="col-xl-9 ">
              <div class="input-group">
                <input type="number" class="form-control" value="10">
                <div class="input-group-append">
                  <span class="input-group-text">km</span>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="rooms" class="col-xl-3 text-nowrap">Zentrum</label>
            <div class="col-xl-9 ">
              <div class="input-group">
                <input type="number" class="form-control" value="10">
                <div class="input-group-append">
                  <span class="input-group-text">km</span>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="rooms" class="col-xl-3 text-nowrap">Zentrum</label>
            <div class="col-xl-9 ">
              <div class="input-group">
                <input type="number" class="form-control" value="10">
                <div class="input-group-append">
                  <span class="input-group-text">km</span>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="rooms" class="col-xl-3 text-nowrap">Zentrum</label>
            <div class="col-xl-9 ">
              <div class="input-group">
                <input type="number" class="form-control" value="10">
                <div class="input-group-append">
                  <span class="input-group-text">km</span>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="rooms" class="col-xl-3 text-nowrap">Zentrum</label>
            <div class="col-xl-9 ">
              <div class="input-group">
                <input type="number" class="form-control" value="10">
                <div class="input-group-append">
                  <span class="input-group-text">km</span>
                </div>
              </div>
            </div>
          </div>


        </div>


        <div class="col-xl-4">

          <div class="form-group row">
            <label for="rooms" class="col-xl-3 text-nowrap">Zentrum</label>
            <div class="col-xl-9 ">
              <div class="input-group">
                <input type="number" class="form-control" value="10">
                <div class="input-group-append">
                  <span class="input-group-text">km</span>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="rooms" class="col-xl-3 text-nowrap">Zentrum</label>
            <div class="col-xl-9 ">
              <div class="input-group">
                <input type="number" class="form-control" value="10">
                <div class="input-group-append">
                  <span class="input-group-text">km</span>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="rooms" class="col-xl-3 text-nowrap">Zentrum</label>
            <div class="col-xl-9 ">
              <div class="input-group">
                <input type="number" class="form-control" value="10">
                <div class="input-group-append">
                  <span class="input-group-text">km</span>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="rooms" class="col-xl-3 text-nowrap">Zentrum</label>
            <div class="col-xl-9 ">
              <div class="input-group">
                <input type="number" class="form-control" value="10">
                <div class="input-group-append">
                  <span class="input-group-text">km</span>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="rooms" class="col-xl-3 text-nowrap">Zentrum</label>
            <div class="col-xl-9 ">
              <div class="input-group">
                <input type="number" class="form-control" value="10">
                <div class="input-group-append">
                  <span class="input-group-text">km</span>
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