<!-- row -->
<div class="row gutter-large">
    <!-- col1 -->
    <div class="col-xxl-6 col-xxxl-4">
        <form class="form form-horizontal">
            <div class="form-body">
                <h4 class="form-section"><i class="la la-gears"></i>Kalender-Code Optionen</h4>
                <div class="form-group row">
                    <label for="was" class="col-xl-3">Kalender/Formulare</label>
                    <div class="col-xl-9 mx-auto">
                        <select id="was" name="linkgen[was]" class="form-control">
                            <optgroup label="pro Objekt (responsive)">
                                <option value="20">Jahresübersicht</option>
                                <option value="21">1-Monats-Übersicht</option>
                                <option value="24">2-Monats-Übersicht</option>
                                <option value="22" selected="">3-Monats-Übersicht</option>
                                <option value="23">6-Monats-Übersicht</option>
                                <option disabled=""></option>
                            </optgroup>
                            <optgroup label="pro Objekt klein">
                                <option value="1">Jahresübersicht (4 Spalten)</option>
                                <option value="11">Jahresübersicht (3 Spalten)</option>
                                <option value="9">1-Monats-Übersicht</option>
                                <option value="2">3-Monats-Übersicht</option>
                                <option disabled=""></option>
                            </optgroup>
                            <optgroup label="Sammelübersichten">
                                <option value="0">Alle Objekte/Jahr</option>
                                <option value="10">Alle Objekte/Monat</option>
                                <option disabled=""></option>
                            </optgroup>
                            <optgroup label="Anfrageformular pro Objekt">
                                <option value="30">Anfrageformular direkt</option>
                                <option disabled=""></option>
                            </optgroup>
                        </select>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="fewosel" class="col-xl-3">Objekt</label>
                    <div class="col-xl-9 mx-auto">
                        <select id="fewosel" name="linkgen[fewosel]" class="form-control">
                            <option value="1750" selected="">Adler</option>
                            <option value="1748">↳ Albatros</option>
                            <option value="1717">↳ Kiebit</option>
                            <option value="1745">Kranich</option>
                            <option value="1749">↳ Lerche</option>
                            <option value="1718">↳ Möwe</option>
                            <option value="2422">↳ Nordsee</option>
                            <option value="1753">Pinguin</option>
                            <option value="1746">Reiher</option>
                            <option value="1747">Schwalbe</option>
                            <option value="1754">Schwan</option>
                            <option value="1719">Spatz</option>
                            <option value="1720">Storch</option>
                            <option value="1751">Taube</option>
                            <option value="1752">Tölpel</option>
                        </select>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="methode" class="col-xl-3">Einbaumethode</label>
                    <div class="col-xl-9 mx-auto">
                        <select id="methode" name="linkgen[methode]" class="form-control">
                            <option value="1">In Webseite einbinden</option>
                            <option value="2">Link in neuem Fenster</option>
                            <option value="3" selected="">pop up</option>
                        </select>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="sprache" class="col-xl-3">Sprache</label>
                    <div class="col-xl-9 mx-auto">
                        <select id="sprache" name="linkgen[sprache]" class="form-control">
                            <option value="de">deutsch</option>
                            <option value="gb" selected="">english</option>
                            <option value="nl">nederlands</option>
                            <option value="fr">français</option>
                            <option value="es">español</option>
                            <option value="it">italiano</option>
                            <option value="cz">tschechisch</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="farben" class="col-xl-3">alle Farben anzeigen</label>
                    <div class="col-xl-9 mx-auto">
                        <select id="farben" name="linkgen[farben]" class="form-control">
                            <option value="0" selected="">alle Farben anzeigen</option>
                            <option value="1">freie Zeiten anzeigen (grün)</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="anfrage" class="col-xl-3">Anfrageformular</label>
                    <div class="col-xl-9 mx-auto">
                        <select id="anfrage" name="linkgen[anfrage]" class="form-control">
                            <option value="0">Kein Formular aktiv</option>
                            <option value="1">Anfrageformular einfach</option>
                            <option value="3" selected="">Anfrageformular mit Preisrechner</option>
                        </select>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-success round">
                        <i class="la la-code"></i> Code generieren
                    </button>
                </div>

            </div>
        </form>

    </div>
    <!-- /col1 -->

    <!-- col2 -->
    <div class="col-xxl-6 col-xxxl-4">
        <form class="form form-horizontal">
            <div class="form-body">
                <h4 class="form-section"><i class="la la-paint-brush"></i>Kalenderfarben</h4>

                <div class="form-group row">
                    <label for="colorfrei" class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-4">Frei</label>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-4 mb-1 mb-xl-0 text-right text-xl-left">
                        <a href="#" class="btn btn-outline-info btn-sm round" onclick="$('#colorfrei').val('#2cd47a'); return false">Standard grün</a>
                    </div>
                    <div class="col-xl-4 mx-auto">
                        <input type="text" id="colorfrei" class="form-control minicolors" data-control="hue" value="#2cd47a">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colorbelegt" class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-4">Belegt</label>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-4 mb-1 mb-xl-0 text-right text-xl-left">
                        <a href="#" class="btn btn-outline-info btn-sm round" onclick="$('#colorbelegt').val('#e2375a'); return false">Standard rot</a>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-4 mx-auto">
                        <input type="text" id="colorbelegt" class="form-control minicolors" data-control="hue" value="#e2375a">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="coloranfrage" class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-4">Auf Anfrage</label>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-4 mb-1 mb-xl-0 text-right text-xl-left">
                        <a href="#" class="btn btn-outline-info btn-sm round" onclick="$('#coloranfrage').val('#F7c553'); return false">Standard gelb</a>
                    </div>
                    <div class="col-xl-4 mx-auto">
                        <input type="text" id="coloranfrage" class="form-control minicolors" data-control="hue" value="#F7c553">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colorclosed" class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-4">Geschlossen</label>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-4 mb-1 mb-xl-0 text-right text-xl-left">
                        <a href="#" class="btn btn-outline-info btn-sm round" onclick="$('#colorclosed').val('#b8bfbb'); return false">Standard grau</a>
                    </div>
                    <div class="col-xl-4 mx-auto">
                        <input type="text" id="colorclosed" class="form-control minicolors" data-control="hue" value="#b8bfbb">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colorbtn" class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-4">Anfrage Button</label>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-4 mb-1 mb-xl-0 text-right text-xl-left">
                        <a href="#" class="btn btn-outline-info btn-sm round " onclick="$('#colorbtn').val('#ff7700'); return false">Standard grau</a>
                    </div>
                    <div class="col-xl-4 mx-auto">
                        <input type="text" id="colorbtn" class="form-control minicolors" data-control="hue" value="#ff7700">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colorbg" class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-4">Hintergrundfarbe</label>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-4 mb-1 mb-xl-0 text-right text-xl-left">
                        <a href="#" class="btn btn-outline-info btn-sm round" onclick="$('#colorbg').val(''); return false">transparent</a>
                    </div>
                    <div class="col-xl-4 mx-auto">
                        <input type="text" id="colorbg" class="form-control minicolors" data-control="hue" value="0">
                    </div>
                </div>

            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-success round ">
                    <i class="la la-floppy-o"></i> Farben speichern
                </button>
            </div>


        </form>

    </div>
</div>
<!-- /row -->






</form>