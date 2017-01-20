<div id="content">
    <div class="outer">
        <div class="inner bg-light lter">
            <!-- table -->
            <div class="row">
                <?php
                foreach ($unduh->result() as $data_unduh) {
                  $unduh_id=$data_unduh->unduh_id;
                  $file_unduh=$data_unduh->file_unduh;
                  $judul_unduh=$data_unduh->judul_unduh;
                  $jenis=$data_unduh->jenis;
                  $keterangan=$data_unduh->keterangan;
                }
                 ?>
                 <div class="col-lg-3">
                     <div class="box">
                         <header>
                           <h5><i class="glyphicon glyphicon-home"></i>&nbsp;File Unduh</h5>
                             <div class="toolbar">
                               <a data-toggle="modal" data-original-title="Help" data-placement="bottom"
                                  href="#helpModal" class="btn btn-primary btn-sm btn-rect" >  <i class="glyphicon glyphicon-edit"></i> edit</a>
                             </div>
                         </header>
                         <div class="body">
                           <h3><i class="glyphicon glyphicon-download-alt"></i> <?php echo $file_unduh; ?></a></h3>
                         </div>
                     </div>
                 </div>
              <div class="col-lg-8">
                    <div class="box">
                        <header>
                            <div class="icons"><i class="glyphicon glyphicon-list"></i></div>
                            <h5><i class="glyphicon glyphicon-user"></i>&nbsp;Edit Data Pengajar</h5>
                        </header>
                        <div id="collapse4" class="body">
                          <form class="form-horizontal" method="post" action="<?php echo base_url() ?>Unduh/editunduh_proses" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="text1" class="control-label col-lg-4">Judul Unduh</label>

                                <div class="col-lg-8">
                                    <input type="text" id="text1" placeholder="Nama"  name="judul_unduh" class="form-control" required="required" value="<?php echo $judul_unduh; ?>">
                                </div>
                            </div>
                            <!-- /.form-group -->

                            <div class="form-group">
                                <label for="text1" class="control-label col-lg-4">Keterangan</label>

                                <div class="col-lg-8">
                                    <textarea class="form-control" name="keterangan" required="required"><?php echo $keterangan; ?></textarea>
                                </div>
                            </div>
                            <!-- /.form-group -->

                            <div class="form-group">
                                <label for="text1" class="control-label col-lg-4">Jenis</label>

                                <div class="col-lg-8">
                                    <select class="form-control" name="jenis" required="required">
                                        <<option value="<?php echo $jenis; ?>"><?php echo $jenis; ?></option>
                                        <option value="materi">Materi</option>
                                        <option value="tugas">Tugas</option>
                                        <option value="lainnya">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <!-- /.form-group -->
                            <input type="hidden" name="unduh_id"  id="text1" placeholder="Isi Banyak Mahasiswa" class="form-control" value="<?php echo $unduh_id;?>">
                              <button type="submit" name="btn simpan" class="btn btn-primary">Simpan</button>

                              <!-- /.form-group -->
                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.inner -->
    </div>
    <!-- /.outer -->
</div>
<!-- /#content -->
    <div id="right" class="bg-light lter">
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Warning!</strong> Best check yo self, you're not looking too good.
        </div>
        <!-- .well well-small -->
        <div class="well well-small dark">
            <ul class="list-unstyled">
                <li>Visitor <span class="inlinesparkline pull-right">1,4,4,7,5,9,10</span></li>
                <li>Online Visitor <span class="dynamicsparkline pull-right">Loading..</span></li>
                <li>Popularity <span class="dynamicbar pull-right">Loading..</span></li>
                <li>New Users <span class="inlinebar pull-right">1,3,4,5,3,5</span></li>
            </ul>
        </div>
        <!-- /.well well-small -->
        <!-- .well well-small -->
        <div class="well well-small dark">
            <button class="btn btn-block">Default</button>
            <button class="btn btn-primary btn-block">Primary</button>
            <button class="btn btn-info btn-block">Info</button>
            <button class="btn btn-success btn-block">Success</button>
            <button class="btn btn-danger btn-block">Danger</button>
            <button class="btn btn-warning btn-block">Warning</button>
            <button class="btn btn-inverse btn-block">Inverse</button>
            <button class="btn btn-metis-1 btn-block">btn-metis-1</button>
            <button class="btn btn-metis-2 btn-block">btn-metis-2</button>
            <button class="btn btn-metis-3 btn-block">btn-metis-3</button>
            <button class="btn btn-metis-4 btn-block">btn-metis-4</button>
            <button class="btn btn-metis-5 btn-block">btn-metis-5</button>
            <button class="btn btn-metis-6 btn-block">btn-metis-6</button>
        </div>
        <!-- /.well well-small -->
        <!-- .well well-small -->
        <div class="well well-small dark">
            <span>Default</span><span class="pull-right"><small>20%</small></span>

            <div class="progress xs">
                <div class="progress-bar progress-bar-info" style="width: 20%"></div>
            </div>
            <span>Success</span><span class="pull-right"><small>40%</small></span>

            <div class="progress xs">
                <div class="progress-bar progress-bar-success" style="width: 40%"></div>
            </div>
            <span>warning</span><span class="pull-right"><small>60%</small></span>

            <div class="progress xs">
                <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
            </div>
            <span>Danger</span><span class="pull-right"><small>80%</small></span>

            <div class="progress xs">
                <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
            </div>
        </div>                    </div>
    <!-- /#right -->
</div>
<!-- /#wrap -->
<!-- /#wrap -->
<footer class="Footer bg-dark dker">
<p>2016 &copy; STTMI Bandung Powered By Ukuranmu Studio</p>
</footer>
<!-- /#footer -->
<div id="helpModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Upload Foto Dosen</h4>
            </div>
            <div class="modal-body">
                <p>
                  <form class="form-horizontal" method="post" action="<?php echo base_url() ?>Unduh/editfile_proses" enctype="multipart/form-data">
                      <div class="form-group">
                          <label class="control-label col-lg-2">File Unduh</label>
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
                      <div class="form-group">
                        <label for="text1" class="control-label col-lg-2"></label>
                          <div class="col-lg-8">
                            <input type="hidden" name="unduh_id"  id="text1" placeholder="Isi Banyak Mahasiswa" class="form-control" value="<?php echo $unduh_id;?>">
                              <input type="hidden" name="jenis"  id="text1" placeholder="Isi Banyak Mahasiswa" class="form-control" value="<?php echo $jenis;?>">
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
