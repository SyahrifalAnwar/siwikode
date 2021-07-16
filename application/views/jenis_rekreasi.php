<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.css"/>


 <div class="row">
  <div class="content-wrapper-before gradient-45deg-indigo-blue"></div>
  <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
    <!-- Search for small screen-->
    <div class="container">
      <div class="row">
        <div class="col s10 m6 l6">
          <h5 class="breadcrumbs-title mt-0 mb-0"><span>Jenis Rekreasi</span></h5>
       
        </div>

    </div>
  </div>
</div>
<div class="col s12">
  <div class="container">
    <div class="section section-data-tables">
<a id="tambah" href="<?php echo base_url('master_data/tambah_jenis_rekreasi') ?>" class="btn btn-success">Tambah Data</a>
        
      <!-- DataTables example -->
      <div class="row">
        <div class="col s12 m12 l12">
          <div id="button-trigger" class="card card card-default scrollspy">
            <div class="card-content">
              <div class="row">
                <div class="col s12">
                
                </div>
                <div class="col s12">
                  <div id="data-table-simple_wrapper" class="dataTables_wrapper">

                  <table id="DataKuliner" class="display dataTable dtr-inline collapsed" role="grid" style="width: 100%;">
                    <thead>
                      <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" style="width: 260px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">NO</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" style="width: 391px;" aria-label="Position: activate to sort column ascending">Nama Rekreasi </th>
                      
                         <th></th>
                          <th></th>
                       
                       </tr>
                    </thead>
                    <tbody>
                     
                    </tbody>
                    
                    </table>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>



      </div><!-- START RIGHT SIDEBAR NAV -->

    </div>
    <div class="content-overlay"></div>
  </div>
</div>

<script src="<?php echo base_url() ?>app-assets/js/scripts/data-tables.min.js"></script>
<script type="text/javascript" language="javascript" >
  $(document).ready(function() {
    var dataTable = $('#DataKuliner').DataTable( {
      "processing":true,
      "serverSide": true,
      "stateSave" : false,
      "AutoWidth": true,
      "oLanguage": {
        "sSearch": "<i class='fa fa-search fa-fw'></i> Pencarian : ",
        "sLengthMenu": "Display _MENU_ records per page",
        "sInfo": "Menampilkan _START_ s/d _END_ dari <b>_TOTAL_ data</b>",
        "sInfoFiltered": "(difilter dari _MAX_ total data)",
        "sZeroRecords": "Pencarian tidak ditemukan",
        "sEmptyTable": "Data kosong",
        "sLoadingRecords": "Harap Tunggu...",
        "oPaginate": {
          "sPrevious": "<",
          "sNext": ">"
        }
      },
      "aaSorting": [[ 0, "desc" ]],
      "columnDefs": [
      {
        "targets": 'no-sort',
        "orderable": false,
      }
      ],
      "sPaginationType": "simple_numbers",
      "iDisplayLength": 10,
      "aLengthMenu": [[10, 20, 50, 100, 150], [10, 20, 50, 100, 150]],
      "ajax":{
        url :"<?php echo site_url('Master_data/json_jenis_wisata/')?>",
        type: "POST",
        error: function(){
          $(".my-grid-error").html("");
          $("#my-grid").append('<tbody class="my-grid-error"><tr><th colspan="12">No data found in the server</th></tr></tbody>');
          $("#my-grid_processing").css("display","none");
        }
      }
    } );
  });
</script>

<script type="text/javascript">
 

  $(document).on('click', '#tambah, #edit, #detail', function(e){
    e.preventDefault();

    if($(this).attr('id') == 'tambah')
    {
      $('#ModalHeader').html('Tambah');
    }

    if($(this).attr('id') == 'edit')
    {
      $('#ModalHeader').html('Edit');
    }

    if($(this).attr('id') == 'detail')
    {
      $('#ModalHeader').html('Detail Data');
    }

    $('#ModalContent').load($(this).attr('href'));
    $(".modal").modal();
    $("#GetModal").modal("open");
  });

</script>