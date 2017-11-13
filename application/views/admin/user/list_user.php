<div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5><strong>DATA USER</strong></h5>
                        <div class="ibox-tools">

                             <?php echo anchor('user/add','<i class="fa fa-pencil-square-o" aria-hidden="true"></i>',"title='Tambah Data'");?>

                            <a class="collapse-link binded">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        
                            <a class="close-link binded">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
                         <thead>
                            <tr>
                                <th>NO</th>
                                <th>FOTO</th>
                                <th>NAMA LENGKAP</th>
                                <th>LEVEL</th>
                                <th>AKSI</th>
                                
                            </tr>
                         </thead>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>


<!--     <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.0/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.js"></script> -->

    <script src="<?php echo base_url(); ?>assets/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/dataTables/dataTables.bootstrap.js"></script>
 
    <script>
        $(document).ready(function() {
            var t = $('#mytable').DataTable( {
                "ajax": '<?php echo site_url('User/data'); ?>',
                "order": [[ 2, 'asc' ]],
                "columns": [
                    {
                        "data": null,
                        "width": "1px",
                        "sClass": "text-center",
                        "orderable": false,
                    },
                    { "data": "foto" },
                    { "data": "nama_lengkap" },
                    { "data": "nama_level" },
                    { "data": "aksi", "width" : "80px" },
                    
                ]
            } );
               
            t.on( 'order.dt search.dt', function () {
                t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                    cell.innerHTML = i+1;
                } );
            } ).draw();
        } );
    </script>

            