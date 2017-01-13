<div id="helpModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Upload Foto Dosen</h4>
            </div>
            <div class="modal-body">
                <p>
                  <form class="form-horizontal" method="post" action="<?php echo base_url() ?>Pengajar/update_foto" enctype="multipart/form-data">
                      <div class="form-group">
                          <label class="control-label col-lg-2">Foto Dosen</label>
                          <div class="col-lg-8">
                              <input type="file" name="foto_ketua" class="form-control">
                          </div>
                      </div>
                      <div class="form-group">
                        <label for="text1" class="control-label col-lg-2"></label>
                          <div class="col-lg-8">
                            <input type="hidden" name="dosen_id"  id="text1" placeholder="Isi Banyak Mahasiswa" class="form-control" value="<?php echo $dosen_id;?>">
                              <button type="submit" name="btn simpan" class="btn btn-primary">Simpan</button>
                          </div>
                      </div>
                  </form>
                </p>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
