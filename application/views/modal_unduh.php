<!-- #helpModal -->
<div id="tambah" class="modal fade">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Tambah Unduh</h4>
        </div>
        <div class="modal-body">
            <p>
              <form class="form-horizontal" method="post" action="<?php echo base_url() ?>Unduh/tambah_proses" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Judul Unduh</label>

                    <div class="col-lg-8">
                        <input type="text" id="text1" placeholder="Nama"  name="judul_unduh" class="form-control" required="required">
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Keterangan</label>

                    <div class="col-lg-8">
                        <textarea class="form-control" name="keterangan" required="required"></textarea>
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Jenis</label>

                    <div class="col-lg-8">
                        <select class="form-control" name="jenis" required="required">
                            <option value="materi">Materi</option>
                            <option value="tugas">Tugas</option>
                            <option value="lainnya">Lainnya</option>
                        </select>
                    </div>
                </div>
                <!-- /.form-group -->

                  <div class="form-group">
                      <label for="text1" class="control-label col-lg-4">File</label>

                      <div class="col-lg-8">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="input-group">
                        <div class="form-control uneditable-input span3" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                        <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span><input type="file" name="file_unduh" required="required"></span>
                        <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
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
