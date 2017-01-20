<div id="content">
    <div class="outer">
        <div class="inner bg-light lter">
            <!-- table -->
            <div class="row">
                        <?php
                              //<td><img src='assets/gambar/$data_dosen->foto' width='100' /></td>
                              foreach ($dosen->result() as $data_dosen) {
                                    $dosen_id=$data_dosen->dosen_id;
                                    $status=$data_dosen->status;
                                    $foto=$data_dosen->foto;
                                    $nama=$data_dosen->dosen_nama;
                                    $email=$data_dosen->email;
                                    $mengajar=$data_dosen->mengajar;
                                    $tmpt_lahir=$data_dosen->tmpt_lahir;
                                    $tgl_lahir=$data_dosen->tgl_lahir;
                                    $username=$data_dosen->username;
                                    $pendidikan=$data_dosen->pendidikan;
                              }// akhir menampilkan data dosen
                         ?>
              <div class="col-lg-4">
                  <div class="box">
                      <header>
                        <h5><i class="glyphicon glyphicon-picture"></i>&nbsp;Foto Ketua</h5>
                          <div class="toolbar">
                            <a data-toggle="modal" data-original-title="Help" data-placement="bottom"
                               href="#helpModal" class="btn btn-primary btn-sm btn-rect" >  <i class="glyphicon glyphicon-edit"></i> edit</a>
                          </div>
                      </header>
                      <div class="body">
                          <img src="<?= base_url() ?><?php echo $foto;  ?>"width="100%"  />
                      </div>
                  </div>
              </div>
              <div class="col-lg-8">
                    <div class="box">
                        <header>
                            <div class="icons"><i class="glyphicon glyphicon-list"></i></div>
                            <h5><i class="glyphicon glyphicon-user"></i>&nbsp;Data Pengajar</h5>
                            <div class="toolbar">
                              <a data-toggle="modal" data-original-title="Help" data-placement="bottom"
                                 href="<?php echo base_url(); ?>Pengajar/edit_pengajar/<?php echo "$dosen_id"; ?>" class="btn btn-primary btn-sm btn-rect" >  <i class="glyphicon glyphicon-edit"></i> Edit Data Dosen</a>
                            </div>
                        </header>
                        <div id="collapse4" class="body">
                            <table class="table table-striped responsive-table">
                                    <tr>
                                        <td><i class="glyphicon glyphicon-user"></i> Nama  :</td>
                                        <td><?php echo "$nama"; ?></td>
                                    </tr>
                                    <tr>
                                        <td><i class="glyphicon glyphicon-heart"></i> Tempat, Tanggal Lahir :</td>
                                        <td><?php echo "$tmpt_lahir, $tgl_lahir"; ?></td>
                                    </tr>
                                    <tr>
                                        <td><i class="glyphicon  glyphicon-book"></i> Pendidikan :</td>
                                        <td><?php echo "$pendidikan"; ?></td>
                                    </tr>
                                    <tr>
                                        <td><i class="glyphicon glyphicon-briefcase"></i> Mengajar :</td>
                                        <td><?php echo "$mengajar"; ?></td>
                                    </tr>
                                    <tr>
                                        <td><i class="glyphicon glyphicon-envelope"></i> Email :</td>
                                        <td><?php echo "$email"; ?></td>
                                    </tr>
                                    <tr>
                                        <td><i class="glyphicon glyphicon-user"></i> Status :</td>
                                        <td><?php echo "Dosen $status"; ?></td>
                                    </tr>
                                    <tr>
                                        <td><i class="glyphicon glyphicon-user"></i> Username :</td>
                                        <td><?php echo "$username"; ?></td>
                                    </tr>
                              </table>
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
                  <form class="form-horizontal" method="post" action="<?php echo base_url() ?>Pengajar/update_foto" enctype="multipart/form-data">
                      <div class="form-group">
                          <label class="control-label col-lg-2">Foto Dosen</label>
                          <div class="col-lg-8">
                              <input type="file" name="foto" class="form-control">
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
