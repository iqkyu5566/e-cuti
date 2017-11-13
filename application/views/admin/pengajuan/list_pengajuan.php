<div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5><strong>DATA PENGAJUAN CUTI</strong></h5>
                        <div class="ibox-tools">
                            <a class="collapse-link binded">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link binded">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>

                    <div class="ibox-content" id="font_kecil">
                        <table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
                         <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pegawai</th>
                                <th>Jenis Cuti</th>
                                <th>Ambil</th>
                                <th>Mulai</th>
                                <th>Selesai</th>
                                <th>Kota Tujuan</th>
                                <th>Alasan</th>
                                <th>Persetujuan Pimpinan</th>
                                <th>Persetujuan HR</th>
                                <th>Aksi</th>
                            </tr>
                         </thead>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.0/jquery.dataTables.js"></script> -->
    <!-- <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.js"></script> -->

    <script src="<?php echo base_url(); ?>assets/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/dataTables/dataTables.bootstrap.js"></script>
 
    <script>
        $(document).ready(function() {
            var t = $('#mytable').DataTable( {
                "ajax": '<?php echo site_url('pengajuan/data_pengajuan_cuti'); ?>',
                "order": [[ 2, 'asc' ]],
                "columns": [
                    {
                        "data": null,
                        "width": "5px",
                        "sClass": "text-center",
                        "orderable": false,
                    },
                    {
                        "data": "nama_pegawai",
                        "width": "140px",
                        "sClass": "text-center"                       
                    },
                    { "data": "type" },
                    { "data": "tgl_sekarang" },
                    { "data": "tgl_mulai" },
                    { "data": "tgl_selesai" },
                    { "data": "nama_kota" },
                    { "data": "alasan" },
                    { "data": "disetujui_pimpinan" },
                    { "data": "disetujui_hr" },
                    {
                        "data": "aksi",
                        "width": "100px",
                        "sClass": "text-center"
                    },
                    
                ]
            } );
               
            t.on( 'order.dt search.dt', function () {
                t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                    cell.innerHTML = i+1;
                } );
            } ).draw();
        } );
    </script>

            