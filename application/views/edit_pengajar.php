<div id="content">
    <div class="outer">
        <div class="inner bg-light lter">
            <!-- table -->
            <div class="row">
              <div class="col-lg-12">
                    <div class="box">
                        <header>
                            <div class="icons"><i class="glyphicon glyphicon-list"></i></div>
                            <h5><i class="glyphicon glyphicon-user"></i>&nbsp;Edit Data Pengajar</h5>
                        </header>
                        <div id="collapse4" class="body">
                          <?php
                          foreach ($dosen->result() as $data_dosen) {
                           ?>
                          <form class="form-horizontal" method="post" action="<?= base_url() ?>Pengajar/editpengajar_proses" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="text1" class="control-label col-lg-4">Nama</label>

                                <div class="col-lg-8">
                                    <input type="text" id="text1" placeholder="Nama"  name="dosen_name" class="form-control" value="<?php echo "$data_dosen->dosen_nama"; ?>" required="required">
                                </div>
                            </div>
                            <!-- /.form-group -->

                            <div class="form-group">
                                <label for="text1" class="control-label col-lg-4">Tempat Lahir</label>

                                <div class="col-lg-8">
                                    <input type="text" id="text1" placeholder="Tempat Lahir" name="tmpt_lahir" class="form-control" value="<?php echo "$data_dosen->tmpt_lahir"; ?>" required="required">
                                </div>
                            </div>
                            <!-- /.form-group -->

                            <div class="form-group">
                                <label for="text1" class="control-label col-lg-4">Tanggal Lahir</label>

                                <div class="col-lg-8">
                                    <input class="form-control" type="date"  name="tgl_lahir" value="<?php echo "$data_dosen->tgl_lahir"; ?>" required="required">
                                </div>
                            </div>
                            <!-- /.form-group -->

                            <div class="form-group">
                                <label for="text1" class="control-label col-lg-4">Pendidikan Terakhir</label>

                                <div class="col-lg-8">
                                    <input type="text" id="text1" placeholder="Pendidikan Terakhir"  name="pendidikan" class="form-control" value="<?php echo "$data_dosen->pendidikan"; ?>" required="required">
                                </div>
                            </div>
                            <!-- /.form-group -->

                            <div class="form-group">
                                <label for="text1" class="control-label col-lg-4">Mengajar</label>

                                <div class="col-lg-8">
                                    <textarea class="form-control" name="mengajar" required="required"><?php echo "$data_dosen->mengajar"; ?></textarea>
                                </div>
                            </div>
                            <!-- /.form-group -->

                            <div class="form-group">
                                <label for="text1" class="control-label col-lg-4">Status</label>

                                <div class="col-lg-8">
                                    <select class="form-control" name="status" required="required">
                                        <option value="<?php echo "$data_dosen->status"; ?>">Dosen <?php echo "$data_dosen->status"; ?></option>
                                        <option value="tetap">Dosen Tetap</option>
                                        <option value="luar biasa">Dosen Luar Biasa</option>
                                    </select>
                                </div>
                            </div>
                            <!-- /.form-group -->

                              <div class="form-group">
                                  <label for="text1" class="control-label col-lg-4">Email</label>

                                  <div class="col-lg-8">
                                      <input type="text" id="text1" placeholder="Email" name="email" class="form-control" value="<?php echo "$data_dosen->email"; ?>" required="required">
                                  </div>
                              </div>
                              <div class="form-group">
                                <label for="text1" class="control-label col-lg-2"></label>
                                  <div class="col-lg-8">
                                    <input type="hidden" name="dosen_id"  id="text1" placeholder="Isi Banyak Mahasiswa" class="form-control" value="<?php echo "$data_dosen->dosen_id";?>">
                                      <button type="submit" name="btn simpan" class="btn btn-primary">Simpan</button>
                                  </div>
                              </div>
                          </form>
                          <?php }//akhir menampilkan edit data ?>
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
