                <div id="content">
                    <div class="outer">
                        <div class="inner bg-light lter">
                              <?php
                              $jumlah_data=$profil->num_rows();
                              if ($jumlah_data==0) {
                                echo "Data Belum Terisi";
                              }
                              else {
                                foreach ($profil->result() as $data_profil) {
                                  $visi=$data_profil->visi;
                                  $misi=$data_profil->misi;
                                  $sejarah=$data_profil->sejarah;
                                  $foto_ketua=$data_profil->foto_ketua;
                                  $tujuan=$data_profil->tujuan;
                                  $sasaran=$data_profil->sasaran;
                                  $banyak_staf=$data_profil->banyak_staf;
                                  $banyak_mahasiswa=$data_profil->banyak_mahasiswa;
                                }
                               ?>
                            <div class="col-lg-4">
                                <div class="box">
                                    <header>
                                      <h5><i class="glyphicon glyphicon-home"></i>&nbsp;Foto Ketua</h5>
                                        <div class="toolbar">
                                          <a data-toggle="modal" data-original-title="Help" data-placement="bottom"
                                             href="#helpModal" class="btn btn-primary btn-sm btn-rect" >  <i class="glyphicon glyphicon-edit"></i> edit</a>
                                        </div>
                                    </header>
                                    <div class="body">
                                        <img src="<?= base_url() ?>assets/gambar/<?php echo $foto_ketua;  ?>"width="100%"  />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="box">
                                    <header>
                                        <h5><i class="glyphicon glyphicon-home"></i>&nbsp;Profil</h5>
                                        <div class="toolbar">
                                          <a href="<?= base_url() ?>Profil/edit_profil" class="btn btn-primary btn-sm btn-rect" alt="edit data profil">  <i class="glyphicon glyphicon-edit"></i> edit</a>
                                        </div>
                                    </header>
                                    <div id="borderedTable" class="body collapse in">
                                        <table class="table table-bordered responsive-table">
                                          <?php
                                          $pesan=$this->session->flashdata('message');
                                          if ($pesan == "edit") {
                                            echo "<p class='bg-info'>Data Berhasil Diubah</p>";
                                          }
                                          elseif ($pesan == "hapus") {
                                            echo "<p class='bg-info'>Data Berhasil Diubah</p>";
                                          }
                                          elseif ($pesan == "tambah") {
                                            echo "<p class='bg-info'>Data Berhasil Diubah</p>";
                                          }
                                          ?>
                                            <thead>
                                                <tr>
                                                    <th>Jenis</th>
                                                    <th>Isi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              <?php
                                               ?>
                                                <tr>
                                                    <td>Visi</td>
                                                    <td><?php echo $visi;  ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Misi</td>
                                                    <td><?php echo $misi;  ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Sejarah</td>
                                                    <td><?php echo $sejarah;  ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Tujuan</td>
                                                    <td><?php echo $tujuan;  ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Sasaran</td>
                                                    <td><?php echo $sasaran;  ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Banyak Staff</td>
                                                    <td><?php echo $banyak_staf;  ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Banyak Mahasiswa</td>
                                                    <td><?php echo $banyak_mahasiswa;  ?></td>
                                                </tr>
                                            </tbody>
                                          </table>
                                          <?php }//akhir mkondisi menghitung jumlah data ?>
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
                            <h4 class="modal-title">Upload Foto Ketua</h4>
                        </div>
                        <div class="modal-body">
                            <p>
                              <form class="form-horizontal" method="post" action="<?= base_url() ?>Profil/update_foto" enctype="multipart/form-data">
                                  <div class="form-group">
                                      <label class="control-label col-lg-2">Foto Ketua</label>
                                      <div class="col-lg-8">
                                          <input type="file" name="foto_ketua" class="form-control">
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
                            </p>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <!-- /#helpModal -->
            <!--jQuery -->
            <script src="<?php echo base_url(); ?>assets/lib/jquery/jquery.js"></script>

                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/jquery.dataTables.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/dataTables.bootstrap.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.26.6/js/jquery.tablesorter.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>

            <!--Bootstrap -->
            <script src="<?php echo base_url(); ?>assets/lib/bootstrap/js/bootstrap.js"></script>
            <!-- MetisMenu -->
            <script src="<?php echo base_url(); ?>assets/lib/metismenu/metisMenu.js"></script>
            <!-- Screenfull -->
            <script src="<?php echo base_url(); ?>assets/lib/screenfull/screenfull.js"></script>


            <!-- Metis core scripts -->
            <script src="<?php echo base_url(); ?>assets/js/core.js"></script>
            <!-- Metis demo scripts -->
            <script src="<?php echo base_url(); ?>assets/js/app.js"></script>

                <script>
                    $(function() {
                      Metis.MetisTable();
                      Metis.metisSortable();
                    });
                </script>

            <script src="<?php echo base_url(); ?>assets/js/style-switcher.js"></script>
        </body>

  </html>
