<div id="content">
    <div class="outer">
        <div class="inner bg-light lter">
            <!-- table -->
            <div class="col-lg-12">
                <div class="box">
                    <header>
                        <h5><i class="glyphicon glyphicon-edit"></i>&nbsp;Edit Profil</h5>
                    </header>
                    <div id="borderedTable" class="body collapse in">
                      <?php
                      foreach ($profil->result() as $data_profil) {
                       ?>
                      <form class="form-horizontal" method="post" action="<?= base_url() ?>Profil/editprofil_proses" enctype="multipart/form-data">
                          <div class="form-group">
                              <label for="text1" class="control-label col-lg-2">Visi</label>
                              <div class="col-lg-8">
                                  <textarea id="text4" class="form-control" name="visi" rows="10"><?php echo $data_profil->visi;?></textarea>
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="text1" class="control-label col-lg-2">Misi</label>
                              <div class="col-lg-8">
                                  <textarea id="text4" class="form-control" name="misi" rows="10"><?php echo $data_profil->misi;?></textarea>
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="text1" class="control-label col-lg-2">Sejarah</label>
                              <div class="col-lg-8">
                                  <textarea id="text4" class="form-control" name="sejarah" rows="10"><?php echo $data_profil->sejarah;?></textarea>
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="text1" class="control-label col-lg-2">Tujuan</label>
                              <div class="col-lg-8">
                                  <textarea id="text4" class="form-control" rows="10" name="tujuan"><?php echo $data_profil->tujuan;?></textarea>
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="text1" class="control-label col-lg-2">Sasaran</label>
                              <div class="col-lg-8">
                                  <textarea id="text4" class="form-control" name="sasaran" rows="10"><?php echo $data_profil->sasaran;?></textarea>
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="text1" class="control-label col-lg-2">Banyak Staf</label>
                              <div class="col-lg-8">
                                  <input type="text" id="text1" placeholder="Isi Banyak Staf" name="banyak_staf" class="form-control" value="<?php echo $data_profil->banyak_staf;?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="text1" class="control-label col-lg-2">Banyak Mahasiswa</label>
                              <div class="col-lg-8">
                                  <input type="text" id="text1" name="banyak_mahasiswa"  placeholder="Isi Banyak Mahasiswa" class="form-control" value="<?php echo $data_profil->banyak_mahasiswa;?>">
                              </div>
                          </div>
                          <div class="form-group">
                            <label for="text1" class="control-label col-lg-2"></label>
                              <div class="col-lg-8">
                                <input type="hidden" name="profil_id"  id="text1" placeholder="Isi Banyak Mahasiswa" class="form-control" value="<?php echo $data_profil->profil_id;?>">
                                  <button type="submit" name="btn simpan" class="btn btn-primary">Simpan</button>
                              </div>
                          </div>
                      </form>
                      <?php }//akhir menampilkan edit data ?>
                    </div>
                </div>

                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>

                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
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
<!-- #helpModal -->
<div id="helpModal" class="modal fade">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Modal title</h4>
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
