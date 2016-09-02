(function(document, window, $) {
  'use strict';

  var Site = window.Site;

  $(document).ready(function($) {
    Site.run();
  });

  // Fixed Header Example
  // --------------------
  (function() {
    // initialize datatable
    var table = $('#exampleFixedHeader').DataTable({
      responsive: true,
      "bPaginate": false,
      "sDom": "t" // just show table, no other controls
    });

    // initialize FixedHeader
    var offsetTop = 0;
    if ($('.site-navbar').length > 0) {
      offsetTop = $('.site-navbar').eq(0).innerHeight();
    }
  })();

  // Individual column searching
  // ---------------------------
  (function() {
    $(document).ready(function() {
      var defaults = $.components.getDefaults("dataTable");

      var options = $.extend(true, {}, defaults, {
        initComplete: function() {
          this.api().columns().every(function() {
            var column = this;
            var select = $(
                '<select class="form-control width-full"><option value=""></option></select>'
              )
              .appendTo($(column.footer()).empty())
              .on('change', function() {
                var val = $.fn.dataTable.util.escapeRegex(
                  $(this).val()
                );

                column
                  .search(val ? '^' + val + '$' : '',
                    true, false)
                  .draw();
              });

            column.data().unique().sort().each(function(
              d, j) {
              select.append('<option value="' + d +
                '">' + d + '</option>')
            });
          });
        }
      });

      $('#exampleTableSearch').DataTable(options);
    });
  })();

  // Table Tools
  // -----------
  (function() {
    $(document).ready(function() {
      var defaults = $.components.getDefaults("dataTable");

      var options = $.extend(true, {}, defaults, {
        "aoColumnDefs": [{
          'bSortable': false,
          'aTargets': [-1]
        }],
        "iDisplayLength": 5,
        "aLengthMenu": [
          [5, 10, 25, 50, -1],
          [5, 10, 25, 50, "All"]
        ],
        "sDom": '<"dt-panelmenu clearfix"Tfr>t<"dt-panelfooter clearfix"ip>',
        "oTableTools": {
          "sSwfPath": "../../assets/vendor/datatables-tabletools/swf/copy_csv_xls_pdf.swf"
        }
      });

      $('#exampleTableTools').dataTable(options);
    });
  })();

  // Table Add Row
  // -------------

  (function() {
    $(document).ready(function() {
      var defaults = $.components.getDefaults("dataTable");

      var t = $('#exampleTableAdd').DataTable(defaults);

      $('#exampleTableAddBtn').on('click', function() {
        t.row.add([
          'Adam Doe',
          'New Row',
          'New Row',
          '30',
          '2015/10/15',
          '$20000'
        ]).draw();
      });
    });
  })();
})(document, window, jQuery);
