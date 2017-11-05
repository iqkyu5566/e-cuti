<!-- Header Judul -->
<div class="row wrapper border-bottom white-bg page-heading">
                <div  style="margin-bottom: 30px" class="col-lg-12">
                    <h2><strong>FORM CUTI</strong></h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Pengajuan Cuti</a>
                        </li>
                        <li class="active">
                            <strong>Cuti</strong>
                        </li>
                    </ol>
                </div>

                <div class="col-lg-12">
                    <!-- Form Kuota Cuti -->
<div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Kuota Cuti</h5>
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
                        <div class="ibox-content">
                           
                        <div class="row">
                            <div class="col-sm-6 b-r">
                                <p>Kuota Cuti Tahun Lalu (2016)</p>
                                <p>Kuota Cuti Tahun Ini (2017)</p>
                            </div>
                            <div class="col-sm-6">
                                <p>Sisa Kuota Cuti Tahun Lalu (2016):</p>
                                <p>Sisa Kuota Cuti Tahun Ini (2017):</p>
                               
                            </div>
                        </div>
                    
                        </div>
                    </div>
                </div>
<!-- End Form Kuota Cuti -->


<!-- Form Pengajuan Cuti -->
<div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Pengajuan Cuti</h5>
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
                        <div class="ibox-content">
                            <form method="get" class="form-horizontal">
                                <div class="form-group"><label class="col-sm-2 control-label">Tipe Cuti</label>
                                    <div class="col-sm-2">
                                        <?php
                                        echo cmb_dinamis('cuti', 'cuti', 'nama', 'id_cuti');
                                        ?>
                                    </div>

                                </div>
                                <div class="hr-line-dashed"></div>
                               <div class="form-group"><label class="col-sm-2 control-label">Tanggal Mulai Cuti</label>

                                    <div class="col-sm-10"><input class="input-group date" type="date" id="data_1"></div>

                                </div>
                                <div class="hr-line-dashed"></div>
                                
                                 <div class="form-group"><label class="col-sm-2 control-label">Tanggal Selesai Cuti</label>

                                    <div class="col-sm-10"><input class="input-group date" type="date" id="data_1"></div>

                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Kota Menjalankan Cuti</label>

                                    <div class="col-sm-10"><input class="form-control" type="text" name="name" id="regencyname"></div>
                                </div>
                               
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Keperluan</label>

                                    <div class="col-sm-10"><input class="form-control" type="text"></div>
                                </div>
                                
                                <div class="hr-line-dashed"></div>

                            </form>
                        </div>
                    </div>
                </div>
<!-- End Form Pengajuan Cuti -->

<!-- Form Pemeriksa Pemutus -->
<div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Pemeriksa / Pemutus</h5>
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
                        <div class="ibox-content">
                           <p><strong>Catatan :</strong></p>
                           <li><i>Input Pemeriksa terakhir sebagai <strong>Pemutus/Signer</strong></i></li>
                           <li><i>Hanya pekerja yang berstatus sebagai <strong>Pekerja tetap</strong> saja yang boleh dijadikan sebagai pemeriksa/pemutus</i></li>
                           <div class="hr-line-dashed"></div>

                            <form method="get" class="form-horizontal">
                                <div class="form-group"><label class="col-sm-2 control-label">Pemutus  : </label>

                                    <div class="col-sm-4"><input class="form-control" type="text"> 
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Jabatan  :</label>

                                    <div class="col-sm-4"><input class="form-control" type="text"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                            </form>
                           
                            

                        </div>
                    </div>
                </div>
<!-- End Form Pemeriksa Pemutus
                </div>
            </div>
<!-- End Header Judul -->

