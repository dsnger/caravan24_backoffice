<table class="table table-striped table-bordered data-table dataex-res-immediately">
  <thead>
    <tr>
      <th>von <a href="#" class="help" data-toggle="popover" data-trigger="hover" data-placement="right" data-container="body" data-original-title="Hilfe" data-content="Die Berechnung basiert auf 'pro Nacht'. Eine Periode endet z.B. am 06.06. Die neue Periode muss dann auch am 06.06. beginnen, anders entstehen Lücken"><i class="la la-question-circle"></i></a>
      </th>
      <th>bis <a href="#" class="help" data-toggle="popover" data-trigger="hover" data-placement="right" data-container="body" data-original-title="Hilfe" data-content="Die Berechnung basiert auf 'pro Nacht'. Eine Periode endet z.B. am 06.06. Die neue Periode muss dann auch am 06.06. beginnen, anders entstehen Lücken"><i class="la la-question-circle"></i></a></th>
      <th>Preis/Nacht (€)</th>
      <th>Preis/Woche (€)</th>
      <th>Folgenacht (€)</th>
      <th>Rabatt 14 Nächte (%)</th>
      <th>Rabatt 21 Nächte (%)</th>
      <th>Mindestaufenthalt</th>
      <th>Kurtaxe</th>
      <th>bearbeiten</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <fieldset class="form-group">
          <input type="date" class="form-control" id="datum_von" value="2019-08-19">
        </fieldset>
        <div class="form-group skin skin-flat">
          <h6>Anreisetage</h6>
          <ul class="d-inline-flex flex-wrap p-0">
            <li>
              <fieldset>
                <input type="checkbox" id="input-1">
                <label for="input-1">Mo</label>
              </fieldset>
            </li>
            <li>
              <fieldset>
                <input type="checkbox" id="input-2">
                <label for="input-2">Di</label>
              </fieldset>
            </li>
            <li>
              <fieldset>
                <input type="checkbox" id="input-3">
                <label for="input-3">Mi</label>
              </fieldset>
            </li>
            <li>
              <fieldset>
                <input type="checkbox" id="input-4">
                <label for="input-4">Do</label>
              </fieldset>
            </li>
            <li>
              <fieldset>
                <input type="checkbox" id="input-5">
                <label for="input-5">Fr</label>
              </fieldset>
            </li>
            <li>
              <fieldset>
                <input type="checkbox" id="input-6">
                <label for="input-6"><strong>Sa</strong></label>
              </fieldset>
            </li>
            <li>
              <fieldset>
                <input type="checkbox" id="input-7">
                <label for="input-7"><strong>So</strong></label>
              </fieldset>
            </li>
          </ul>
        </div>
      </td>
      <td>
        <fieldset class="form-group">
          <input type="date" class="form-control" id="datum_bis" value="2019-08-19">
        </fieldset>
      </td>
      <td>
        <fieldset class="form-group">
          <div class="input-group">
            <input type="text" class="form-control" aria-describedby="preis_nacht" value="10">
            <div class="input-group-append">
              <span class="input-group-text" id="preis_nacht">€</span>
            </div>
          </div>
        </fieldset>
      </td>
      <td>
        <fieldset class="form-group">
          <div class="input-group">
            <input type="text" class="form-control" aria-describedby="preis_woche" value="10">
            <div class="input-group-append">
              <span class="input-group-text" id="preis_woche">€</span>
            </div>
          </div>
        </fieldset>
      </td>
      <td>
        <fieldset class="form-group">
          <div class="input-group">
            <input type="text" class="form-control" aria-describedby="preis_folgenacht" value="10">
            <div class="input-group-append">
              <span class="input-group-text" id="preis_folgenacht">€</span>
            </div>
          </div>
        </fieldset>
      </td>
      <td>
        <fieldset class="form-group">
          <div class="input-group">
            <input type="text" class="form-control" aria-describedby="rabatt-14" value="10">
            <div class="input-group-append">
              <span class="input-group-text" id="rabatt-14">%</span>
            </div>
          </div>
        </fieldset>
      </td>
      <td>
        <fieldset class="form-group">
          <div class="input-group">
            <input type="text" class="form-control" aria-describedby="rabatt-21" value="10">
            <div class="input-group-append">
              <span class="input-group-text" id="rabatt-21">%</span>
            </div>
          </div>
        </fieldset>
      </td>
      <td>
        <fieldset class="form-group">
          <select class="form-control" name="periode[8292][minnacht]">
            <option value="">- keine -</option>
            <option value="1">1 Nacht</option>
            <option value="2">2 Nächte</option>
            <option value="3">3 Nächte</option>
            <option value="4">4 Nächte</option>
            <option value="5">5 Nächte</option>
            <option value="6">6 Nächte</option>
            <option value="7" selected="">1 Woche</option>
          </select>
        </fieldset>
      </td>
      <td>
        <fieldset class="form-group">
          <input type="text" class="form-control" id="kurtaxe" value="">
        </fieldset>
      </td>
      <td>
        <a href="#"><i class="ft-copy text-success"></i></a>
        <a href="#"><i class="ft-trash-2 ml-1 text-warning"></i></a>
      </td>
    </tr>
    <tr>
      <td>
        <fieldset class="form-group">
          <input type="date" class="form-control" id="datum_von" value="2019-08-19">
        </fieldset>
        <div class="form-group skin skin-flat">
          <h6>Anreisetage</h6>
          <ul class="d-inline-flex flex-wrap p-0">
            <li>
              <fieldset>
                <input type="checkbox" id="input-1">
                <label for="input-1">Mo</label>
              </fieldset>
            </li>
            <li>
              <fieldset>
                <input type="checkbox" id="input-2">
                <label for="input-2">Di</label>
              </fieldset>
            </li>
            <li>
              <fieldset>
                <input type="checkbox" id="input-3">
                <label for="input-3">Mi</label>
              </fieldset>
            </li>
            <li>
              <fieldset>
                <input type="checkbox" id="input-4">
                <label for="input-4">Do</label>
              </fieldset>
            </li>
            <li>
              <fieldset>
                <input type="checkbox" id="input-5">
                <label for="input-5">Fr</label>
              </fieldset>
            </li>
            <li>
              <fieldset>
                <input type="checkbox" id="input-6">
                <label for="input-6"><strong>Sa</strong></label>
              </fieldset>
            </li>
            <li>
              <fieldset>
                <input type="checkbox" id="input-7">
                <label for="input-7"><strong>So</strong></label>
              </fieldset>
            </li>
          </ul>
        </div>
      </td>
      <td>
        <fieldset class="form-group">
          <input type="date" class="form-control" id="datum_bis" value="2019-08-19">
        </fieldset>
      </td>
      <td>
        <fieldset class="form-group">
          <div class="input-group">
            <input type="text" class="form-control" aria-describedby="preis_nacht" value="10">
            <div class="input-group-append">
              <span class="input-group-text" id="preis_nacht">€</span>
            </div>
          </div>
        </fieldset>
      </td>
      <td>
        <fieldset class="form-group">
          <div class="input-group">
            <input type="text" class="form-control" aria-describedby="preis_woche" value="10">
            <div class="input-group-append">
              <span class="input-group-text" id="preis_woche">€</span>
            </div>
          </div>
        </fieldset>
      </td>
      <td>
        <fieldset class="form-group">
          <div class="input-group">
            <input type="text" class="form-control" aria-describedby="preis_folgenacht" value="10">
            <div class="input-group-append">
              <span class="input-group-text" id="preis_folgenacht">€</span>
            </div>
          </div>
        </fieldset>
      </td>
      <td>
        <fieldset class="form-group">
          <div class="input-group">
            <input type="text" class="form-control" aria-describedby="rabatt-14" value="10">
            <div class="input-group-append">
              <span class="input-group-text" id="rabatt-14">%</span>
            </div>
          </div>
        </fieldset>
      </td>
      <td>
        <fieldset class="form-group">
          <div class="input-group">
            <input type="text" class="form-control" aria-describedby="rabatt-21" value="10">
            <div class="input-group-append">
              <span class="input-group-text" id="rabatt-21">%</span>
            </div>
          </div>
        </fieldset>
      </td>
      <td>
        <fieldset class="form-group">
          <select class="form-control" name="periode[8292][minnacht]">
            <option value="">- keine -</option>
            <option value="1">1 Nacht</option>
            <option value="2">2 Nächte</option>
            <option value="3">3 Nächte</option>
            <option value="4">4 Nächte</option>
            <option value="5">5 Nächte</option>
            <option value="6">6 Nächte</option>
            <option value="7" selected="">1 Woche</option>
          </select>
        </fieldset>
      </td>
      <td>
        <fieldset class="form-group">
          <input type="text" class="form-control" id="kurtaxe" value="">
        </fieldset>
      </td>
      <td>
        <a href="#"><i class="ft-copy text-success"></i></a>
        <a href="#"><i class="ft-trash-2 ml-1 text-warning"></i></a>
      </td>
    </tr>
    <tr>
      <td>
        <fieldset class="form-group">
          <input type="date" class="form-control" id="datum_von" value="2019-08-19">
        </fieldset>
        <div class="form-group skin skin-flat">
          <h6>Anreisetage</h6>
          <ul class="d-inline-flex flex-wrap p-0">
            <li>
              <fieldset>
                <input type="checkbox" id="input-1">
                <label for="input-1">Mo</label>
              </fieldset>
            </li>
            <li>
              <fieldset>
                <input type="checkbox" id="input-2">
                <label for="input-2">Di</label>
              </fieldset>
            </li>
            <li>
              <fieldset>
                <input type="checkbox" id="input-3">
                <label for="input-3">Mi</label>
              </fieldset>
            </li>
            <li>
              <fieldset>
                <input type="checkbox" id="input-4">
                <label for="input-4">Do</label>
              </fieldset>
            </li>
            <li>
              <fieldset>
                <input type="checkbox" id="input-5">
                <label for="input-5">Fr</label>
              </fieldset>
            </li>
            <li>
              <fieldset>
                <input type="checkbox" id="input-6">
                <label for="input-6"><strong>Sa</strong></label>
              </fieldset>
            </li>
            <li>
              <fieldset>
                <input type="checkbox" id="input-7">
                <label for="input-7"><strong>So</strong></label>
              </fieldset>
            </li>
          </ul>
        </div>
      </td>
      <td>
        <fieldset class="form-group">
          <input type="date" class="form-control" id="datum_bis" value="2019-08-19">
        </fieldset>
      </td>
      <td>
        <fieldset class="form-group">
          <div class="input-group">
            <input type="text" class="form-control" aria-describedby="preis_nacht" value="10">
            <div class="input-group-append">
              <span class="input-group-text" id="preis_nacht">€</span>
            </div>
          </div>
        </fieldset>
      </td>
      <td>
        <fieldset class="form-group">
          <div class="input-group">
            <input type="text" class="form-control" aria-describedby="preis_woche" value="10">
            <div class="input-group-append">
              <span class="input-group-text" id="preis_woche">€</span>
            </div>
          </div>
        </fieldset>
      </td>
      <td>
        <fieldset class="form-group">
          <div class="input-group">
            <input type="text" class="form-control" aria-describedby="preis_folgenacht" value="10">
            <div class="input-group-append">
              <span class="input-group-text" id="preis_folgenacht">€</span>
            </div>
          </div>
        </fieldset>
      </td>
      <td>
        <fieldset class="form-group">
          <div class="input-group">
            <input type="text" class="form-control" aria-describedby="rabatt-14" value="10">
            <div class="input-group-append">
              <span class="input-group-text" id="rabatt-14">%</span>
            </div>
          </div>
        </fieldset>
      </td>
      <td>
        <fieldset class="form-group">
          <div class="input-group">
            <input type="text" class="form-control" aria-describedby="rabatt-21" value="10">
            <div class="input-group-append">
              <span class="input-group-text" id="rabatt-21">%</span>
            </div>
          </div>
        </fieldset>
      </td>
      <td>
        <fieldset class="form-group">
          <select class="form-control" name="periode[8292][minnacht]">
            <option value="">- keine -</option>
            <option value="1">1 Nacht</option>
            <option value="2">2 Nächte</option>
            <option value="3">3 Nächte</option>
            <option value="4">4 Nächte</option>
            <option value="5">5 Nächte</option>
            <option value="6">6 Nächte</option>
            <option value="7" selected="">1 Woche</option>
          </select>
        </fieldset>
      </td>
      <td>
        <fieldset class="form-group">
          <input type="text" class="form-control" id="kurtaxe" value="">
        </fieldset>
      </td>
      <td>
        <a href="#"><i class="ft-copy text-success"></i></a>
        <a href="#"><i class="ft-trash-2 ml-1 text-warning"></i></a>
      </td>
    </tr>

  </tbody>
</table>