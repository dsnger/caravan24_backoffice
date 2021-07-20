<div class="row gutter-large">
    <div class="col-xxl-12 col-xxxl-8">
        <form class="form">
            <div class="form-body">
                <h4 class="form-section"><i class="la la-print"></i>Druckansicht wählen</h4>
                <!-- row -->
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="monthChoice">Zeitraum</label>
                            <select id="monthChoice" name="monthChoice" class="form-control">
                                <option value="0">komplettes Jahr</option>
                                <option value="-1"> </option>
                                <option value="1">Januar</option>
                                <option value="2">Februar</option>
                                <option value="3">März</option>
                                <option value="4">April</option>
                                <option value="5">Mai</option>
                                <option value="6">Juni</option>
                                <option value="7">Juli</option>
                                <option value="8">August</option>
                                <option value="9">September</option>
                                <option value="10">Oktober</option>
                                <option value="11">November</option>
                                <option value="12">Dezember</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="yearChoice">Jahr</label>
                            <select id="yearChoice" name="yearChoice" class="form-control">
                                <option value="2018">2018</option>
                                <option value="2019" selected="">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                            </select>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="details">Details</label>
                            <select id="details" name="details" class="form-control">
                                <option value="0">ohne Buchungsdetails</option>
                                <option value="1">mit Buchungsdetails</option>
                                <option value="2">mit Namen</option>
                            </select>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="fewoChoice">Objekte</label>
                            <select id="fewoChoice" name="fewoChoice" class="form-control">
                                <option value="0">Alle Objekte</option>
                                <option value="1750">Adler</option>
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
                </div>
                <!-- /row -->
            </div>
            <!-- /form-body -->

            <div class="form-actions">
                <button type="submit" class="btn btn-warning round">
                    <i class="la la-print"></i> Druckansicht
                </button>
            </div>

        </form>
    </div>

</div>