<div id="content">
    <div class="outer">
        <div class="inner bg-light lter">
            <!-- table -->
            <div class="col-lg-12">
                <div class="box">
                    <header>
                        <h5><i class="glyphicon glyphicon-calendar"></i>&nbsp;Edit info</h5>
                    </header>
                    <div id="borderedTable" class="body collapse in">
                      <?php
                      foreach ($info->result() as $data_info) {
                       ?>
                       <form class="form-horizontal" method="post" action="<?= base_url() ?>info/tambah_proses" enctype="multipart/form-data">
                         <div class="form-group">
                             <label for="text1" class="control-label col-lg-4">Judul info</label>

                             <div class="col-lg-8">
                                 <input type="text" id="text1" name="info_judul" class="form-control" >
                             </div>
                         </div>
                         <!-- /.form-group -->

                         <div class="form-group">
                             <label for="text1" class="control-label col-lg-4">Deskripsi</label>

                             <div class="col-lg-8">
                                 <textarea class="form-control" name="info_deskripsi"></textarea>
                             </div>
                         </div>

                          <div class="form-group">
                            <label for="text1" class="control-label col-lg-4"></label>
                              <div class="col-lg-8">
                                <input type="hidden" name="info_id"  id="text1" placeholder="Isi Banyak Mahasiswa" class="form-control" >
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
