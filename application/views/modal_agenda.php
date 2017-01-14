<!-- #helpModal -->
<div id="tambah" class="modal fade">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Tambah Agenda</h4>
        </div>
        <div class="modal-body">
            <p>
              <form class="form-horizontal" method="post" action="<?= base_url() ?>agenda/tambah_proses" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Judul Agenda</label>

                    <div class="col-lg-8">
                        <input type="text" id="text1" placeholder="Nama"  name="agenda_judul" class="form-control">
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Tempat</label>

                    <div class="col-lg-8">
                        <input type="text" id="text1" placeholder="Nama"  name="agenda_tempat" class="form-control">
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Prodi</label>

                    <div class="col-lg-8">
                        <input type="text" id="text1" placeholder="Nama"  name="agenda_prodi" class="form-control">
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Tanggal </label>

                    <div class="col-lg-8">
                        <input class="form-control" type="date" name="agenda_tanggal">
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Deskripsi</label>

                    <div class="col-lg-8">
                        <textarea class="form-control" name="agenda_deskripsi"></textarea>
                    </div>
                </div>
                <!-- /.form-group -->
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
