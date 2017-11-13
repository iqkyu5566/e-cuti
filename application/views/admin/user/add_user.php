<div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="row">
            <div class="col-sm-10"><h3 class="m-t-none m-b"><strong>Tambah Data User</strong></h3>

                
                <?php
                echo form_open_multipart('user/add', 'role="form" class="form-horizontal"');
                ?>

                    <div class="form-group"><label>Nama Lengkap</label> <input placeholder="Masukkan Nama Anda" class="form-control" type="text" name="nama_lengkap"></div>
                    <div class="form-group"><label>Username</label> <input placeholder="Masukkan Username Anda" class="form-control" type="text" name="username"></div>
                    <div class="form-group"><label>Password</label> <input placeholder="Masukkan Password Anda" class="form-control" type="password" name="password"></div>
                    <div class="form-group"><label>Level User</label> 
                    <?php echo cmb_dinamis ('id_level_user', 'level_user', 'nama_level', 'id_level_user'); ?></div>
                    <div class="form-group"><label>Foto</label>  <input type="file" name="userfile"></div>


                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-2">
                            <button class="btn btn-primary btn-sm" type="submit" name="submit">SIMPAN</button>
                        </div>
                        <div class="col-sm-4 col-sm-offset-2">
                            <?php echo anchor('users', 'Kembali', array('class' => 'btn btn-white btn-sm')); ?>
                        </div>
                    </div>

                    
                </form>
            </div>
                                                
        </div>
    </div>
    </div>
</div>

