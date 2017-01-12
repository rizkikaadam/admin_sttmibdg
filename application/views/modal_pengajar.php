<!-- #helpModal -->
<div id="edit" class="modal fade">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Edit Data Dosen</h4>
        </div>
        <div class="modal-body">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- /#helpModal -->
<!-- #helpModal -->
<div id="lihat" class="modal fade">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Lihat Data Dosen</h4>
        </div>
        <div class="modal-body">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- /#helpModal -->
<!-- #helpModal -->
<div id="tambah" class="modal fade">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Tambah Dosen</h4>
        </div>
        <div class="modal-body">
            <p>
              <form class="form-horizontal" method="post" action="<?= base_url() ?>Pengajar/tambah_proses" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Nama</label>

                    <div class="col-lg-8">
                        <input type="text" id="text1" placeholder="Nama"  name="dosen_name" class="form-control">
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Tempat Lahir</label>

                    <div class="col-lg-8">
                        <input type="text" id="text1" placeholder="Tempat Lahir" name="tmpt_lahir" class="form-control">
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Tanggal Lahir</label>

                    <div class="col-lg-8">
                        <input class="form-control" type="text" data-mask="99/99/9999" name="tgl_lahir">
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Pendidikan Terakhir</label>

                    <div class="col-lg-8">
                        <input type="text" id="text1" placeholder="Pendidikan Terakhir"  name="pendidikan" class="form-control">
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Mengajar</label>

                    <div class="col-lg-8">
                        <textarea class="form-control" name="mengajar"></textarea>
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Status</label>

                    <div class="col-lg-8">
                        <select class="form-control" name="status">
                            <option value="tetap">Dosen Tetap</option>
                            <option value="luar biasa">Dosen Luar Biasa</option>
                        </select>
                    </div>
                </div>
                <!-- /.form-group -->

                  <div class="form-group">
                      <label for="text1" class="control-label col-lg-4">Email</label>

                      <div class="col-lg-8">
                          <input type="text" id="text1" placeholder="Email" name="email" class="form-control">
                      </div>
                  </div>
                  <!-- /.form-group -->

                  <div class="form-group">
                      <label for="text1" class="control-label col-lg-4">Foto</label>

                      <div class="col-lg-8">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                          <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
                          <div>
                            <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="foto"></span>
                            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                          </div>
                              </div>
                      </div>
                  </div>
                  <button type="submit" name="btn simpan" class="btn btn-primary">Simpan</button>

                  <!-- /.form-group -->
              </form>
                  <!-- /.form-group -->
            </p>
        </div>
        <div class="modal-footer">

        </div>
    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- /#helpModal -->
