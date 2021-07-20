<form class="form form-horizontal">
    <div class="form-body">     
        <!-- row -->
        <div class="row">
            <!-- col1 -->
            <div class="col-md-12">
                <h4 class="form-section"><i class="la la-code"></i>Generierter Kalender-Code </h4>
                <fieldset class="form-group">
                    <textarea class="form-control" id="codesnippet" rows="7"> Hier ist der Code-Schnipsel...</textarea>
                </fieldset>

        </div>
        <!-- /row -->
    </div>
    <!-- /form-body -->

    <div class="form-actions">
        <button id="copysnippet" class="btn btn-warning round" >
            <i class="la la-copy"></i> In Zwischenablage kopieren
        </button>
    </div>

</form>

<script type="text/javascript">
    var button = document.getElementById('copysnippet'),
        input = document.getElementById('codesnippet');

    button.addEventListener('click', function(event) {
        event.preventDefault();
        input.select();
        document.execCommand('copy');
    });
</script>
