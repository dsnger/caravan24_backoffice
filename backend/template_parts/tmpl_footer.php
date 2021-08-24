<?php
/*
* tmpl_footer.php
* Allgemeiner  Seiten-Footer
* Version: 1.0
* Projekt: caravan24 backend
*/
?>

<!-- Overlays -->
<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

  <!-- Background of PhotoSwipe. 
             It's a separate element as animating opacity is faster than rgba(). -->
  <div class="pswp__bg"></div>

  <!-- Slides wrapper with overflow:hidden. -->
  <div class="pswp__scroll-wrap">

    <!-- Container that holds slides. 
                PhotoSwipe keeps only 3 of them in the DOM to save memory.
                Don't modify these 3 pswp__item elements, data is added later on. -->
    <div class="pswp__container">
      <div class="pswp__item"></div>
      <div class="pswp__item"></div>
      <div class="pswp__item"></div>
    </div>

    <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
    <div class="pswp__ui pswp__ui--hidden">

      <div class="pswp__top-bar">

        <!--  Controls are self-explanatory. Order can be changed. -->

        <div class="pswp__counter"></div>

        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

        <button class="pswp__button pswp__button--share" title="Share"></button>

        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

        <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
        <!-- element will get class pswp__preloader-active when preloader is running -->
        <div class="pswp__preloader">
          <div class="pswp__preloader__icn">
            <div class="pswp__preloader__cut">
              <div class="pswp__preloader__donut"></div>
            </div>
          </div>
        </div>
      </div>

      <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
        <div class="pswp__share-tooltip"></div>
      </div>

      <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
      </button>

      <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
      </button>

      <div class="pswp__caption">
        <div class="pswp__caption__center"></div>
      </div>

    </div>

  </div>
</div>

<!--/ PhotoSwipe -->


<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light navbar-border navbar-shadow">
  <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2019 <a class="text-bold-800 grey darken-2" href="https://www.caravan24.de" target="_blank">caravan24</a></span></p>
  <span id="scroll-top"></span>
</footer>
<!-- END: Footer-->


<!-- Vendor JS-->
<script src="../app-assets/vendors/js/vendors.min.js"></script>


<!-- BEGIN: Page Vendor JS-->
<script src="../app-assets/vendors/js/pickers/miniColors/jquery.minicolors.min.js"></script>
<script src="../app-assets/vendors/js/pickers/spectrum/spectrum.js"></script>
<script src="../app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
<script src="../app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
<script src="../app-assets/vendors/js/gallery/photo-swipe/photoswipe.min.js"></script>
<script src="../app-assets/vendors/js/gallery/photo-swipe/photoswipe-ui-default.min.js"></script>
<script src="../app-assets/vendors/js/forms/extended/formatter/formatter.min.js"></script>
<script src="../app-assets/vendors/js/forms/extended/maxlength/bootstrap-maxlength.js"></script>
<script src="../app-assets/vendors/js/forms/icheck/icheck.min.js"></script>
<script src="../app-assets/vendors/js/forms/select/select2.full.min.js"></script>
<script src="../app-assets/vendors/js/forms/repeater/jquery.repeater.min.js"></script>

<!-- END: Page Vendor JS-->

<!-- Theme JS-->
<script src="../app-assets/js/core/app-menu.min.js"></script>
<script src="../app-assets/js/core/app.min.js"></script>


<!-- BEGIN: Page JS-->
<script src="../app-assets/js/scripts/pickers/colorpicker/picker-color.js"></script>
<script src="../app-assets/js/scripts/gallery/photo-swipe/photoswipe-script.js"></script>
<script src="../app-assets/js/scripts/forms/extended/form-formatter.min.js"></script>
<script src="../app-assets/js/scripts/forms/extended/form-maxlength.min.js"></script>
<script src="../app-assets/js/scripts/modal/components-modal.js"></script>

<!-- <script src="../app-assets/js/scripts/forms/checkbox-radio.js"></script> -->

<script>
  //Flat Checkbox & Radio
  $('.skin-flat input').iCheck({
    checkboxClass: 'icheckbox_flat-blue',
    radioClass: 'iradio_flat-blue'
  });
</script>
<script>
  $('.repeater').repeater({
    // (Optional)
    // start with an empty list of repeaters. Set your first (and only)
    // "data-repeater-item" with style="display:none;" and pass the
    // following configuration flag
    initEmpty: false,
    // (Optional)
    // "defaultValues" sets the values of added items.  The keys of
    // defaultValues refer to the value of the input's name attribute.
    // If a default value is not specified for an input, then it will
    // have its value cleared.
    defaultValues: {
        'text-input': 'foo'
    },
    // (Optional)
    // "show" is called just after an item is added.  The item is hidden
    // at this point.  If a show callback is not given the item will
    // have $(this).show() called on it.
    show: function () {
        $(this).slideDown();
    },
    // (Optional)
    // "hide" is called when a user clicks on a data-repeater-delete
    // element.  The item is still visible.  "hide" is passed a function
    // as its first argument which will properly remove the item.
    // "hide" allows for a confirmation step, to send a delete request
    // to the server, etc.  If a hide callback is not given the item
    // will be deleted.
    hide: function (deleteElement) {
        if(confirm('Sind Sie sicher, dass Sie das Element löschen wollen?')) {
            $(this).slideUp(deleteElement);
        }
    },
    // (Optional)
    // You can use this if you need to manually re-index the list
    // for example if you are using a drag and drop library to reorder
    // list items.
    // ready: function (setIndexes) {
    //     $dragAndDrop.on('drop', setIndexes);
    // },
    // (Optional)
    // Removes the delete button from the first list item,
    // defaults to false.
    isFirstItemUndeletable: true
});

  $(".select2").select2();
  $('.objekt-list').DataTable({
    "language": {
      "sEmptyTable": "Keine Daten in der Tabelle vorhanden",
      "sInfo": "_START_ bis _END_ von _TOTAL_ Einträgen",
      "sInfoEmpty": "Keine Daten vorhanden",
      "sInfoFiltered": "(gefiltert von _MAX_ Einträgen)",
      "sInfoPostFix": "",
      "sInfoThousands": ".",
      "sLengthMenu": "_MENU_ Einträge anzeigen",
      "sLoadingRecords": "Wird geladen ..",
      "sProcessing": "Bitte warten ..",
      "sSearch": "Suchen",
      "sZeroRecords": "Keine Einträge vorhanden",
      "oPaginate": {
        "sFirst": "Erste",
        "sPrevious": "Zurück",
        "sNext": "Nächste",
        "sLast": "Letzte"
      },
      "oAria": {
        "sSortAscending": ": aktivieren, um Spalte aufsteigend zu sortieren",
        "sSortDescending": ": aktivieren, um Spalte absteigend zu sortieren"
      },
      "select": {
        "rows": {
          "_": "%d Zeilen ausgewählt",
          "0": "",
          "1": "1 Zeile ausgewählt"
        }
      },
      "buttons": {
        "print": "Drucken",
        "colvis": "Spalten",
        "copy": "Kopieren",
        "copyTitle": "In Zwischenablage kopieren",
        "copyKeys": "Taste <i>ctrl</i> oder <i>\u2318</i> + <i>C</i> um Tabelle<br>in Zwischenspeicher zu kopieren.<br><br>Um abzubrechen die Nachricht anklicken oder Escape drücken.",
        "copySuccess": {
          "_": "%d Spalten kopiert",
          "1": "1 Spalte kopiert"
        }
      }
    }
  });
</script>
<script>
  $('.dataex-res-immediately').DataTable({
    responsive: {
      details: {
        display: $.fn.dataTable.Responsive.display.childRowImmediate,
        type: ''
      },
    },
    "language": {
      "sEmptyTable": "Keine Daten in der Tabelle vorhanden",
      "sInfo": "_START_ bis _END_ von _TOTAL_ Einträgen",
      "sInfoEmpty": "Keine Daten vorhanden",
      "sInfoFiltered": "(gefiltert von _MAX_ Einträgen)",
      "sInfoPostFix": "",
      "sInfoThousands": ".",
      "sLengthMenu": "_MENU_ Einträge anzeigen",
      "sLoadingRecords": "Wird geladen ..",
      "sProcessing": "Bitte warten ..",
      "sSearch": "Suchen",
      "sZeroRecords": "Keine Einträge vorhanden",
      "oPaginate": {
        "sFirst": "Erste",
        "sPrevious": "Zurück",
        "sNext": "Nächste",
        "sLast": "Letzte"
      },
      "oAria": {
        "sSortAscending": ": aktivieren, um Spalte aufsteigend zu sortieren",
        "sSortDescending": ": aktivieren, um Spalte absteigend zu sortieren"
      },
      "select": {
        "rows": {
          "_": "%d Zeilen ausgewählt",
          "0": "",
          "1": "1 Zeile ausgewählt"
        }
      },
      "buttons": {
        "print": "Drucken",
        "colvis": "Spalten",
        "copy": "Kopieren",
        "copyTitle": "In Zwischenablage kopieren",
        "copyKeys": "Taste <i>ctrl</i> oder <i>\u2318</i> + <i>C</i> um Tabelle<br>in Zwischenspeicher zu kopieren.<br><br>Um abzubrechen die Nachricht anklicken oder Escape drücken.",
        "copySuccess": {
          "_": "%d Spalten kopiert",
          "1": "1 Spalte kopiert"
        }
      }
    }

  });
</script>
<script>
  $('[data-toggle="popover"]').popover();
</script>

<script>
  /** simulate navigation */
  var url = window.location;

  // for sidebar menu entirely but not cover treeview
  $('li.nav-item a').filter(function() {
    return this.href == url;
  }).parent().addClass('open');

  // for treeview
  $('li.nav-item > ul > li a').filter(function() {
    return this.href == url;
  }).parent().addClass('active');
</script>

<!-- END: Page JS-->


</body>
<!-- END: Body-->

</html>