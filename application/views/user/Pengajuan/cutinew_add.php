

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

      <?php echo form_open('pengajuan/simpan_cuti', 'class="form-horizontal"'); ?>

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
                            
                            <div class="ibox-content">
                                <!-- <form method="get" class="form-horizontal"> -->
                                    
                                    <div class="form-group"><label class="col-sm-2 control-label">NIK</label>

                                        <div class="col-sm-3"><input type ="text" id="nik" onkeyup="autofill()"></div>
                                    </div>

                                    <div class="form-group"><label class="col-sm-2 control-label">Nama Pegawai</label>

                                        <div class="col-sm-3"><input class="form-control" disabled="" type="text" id="nama_pegawai"></div>
                                    </div>

                                    <div class="form-group"><label class="col-sm-2 control-label">Jabatan</label>

                                        <div class="col-sm-3"><input class="form-control" disabled="" type="text" id="jabatan"></div>
                                    </div>

                                    <div class="form-group"><label class="col-sm-2 control-label">Tipe Cuti</label>
                                        <div class="col-sm-2">
                                            <?php
                                            echo cmb_dinamis('type_cuti', 'type_cuti', 'type', 'id_type_cuti');
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

                                        <div class="col-sm-3"><input class="form-control" list ="kota" id="countries"></div>
                                    </div>
                                   
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Keperluan</label>

                                        <div class="col-sm-10"><input class="form-control" type="text"></div>
                                    </div>
                                  
                               
                            </div>
                        </div> <!-- END I-BOX TITLE -->
                      </div>
    </div>

<!-- Form Pemeriksa Pemutus -->
    <div class="col-lg-12" style="margin-top: 20px ">
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
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Pemutus  : </label>
                      <div class="col-sm-4">
                        <input class="form-control" type="text">
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Jabatan  :</label>
                        <div class="col-sm-4">
                          <input class="form-control" type="text">
                        </div>
                      </div>
                  </div>

             </div> <!-- END IBOX-CONTENT -->
    </div>
    

              <div>
                  <div class="hr-line-dashed"></div>
                  <tr>
                    <td colspan="2" rowspan="1" position="right"><?php echo form_submit('submit', 'AJUKAN CUTI'); ?></td>
                  </tr>   
              </div>
    <?php echo form_close(); ?>
    <!-- </form> -->
    </div> <!-- END I-BOX FLAT MARGINS -->

                   
</div>
<!-- End Form Pengajuan Cuti -->




<datalist id="kota">
  <?php 
  foreach ($kota->result() as $k) {
    # code...
    echo "<option value='$k->nama_kota'>";
  }
   ?>
  
</datalist>
<!-- End Form Pemeriksa Pemutus
                </div>
            </div>
<!-- End Header Judul -->


