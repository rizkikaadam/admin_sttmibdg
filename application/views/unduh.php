                <div id="content">
                    <div class="outer">
                        <div class="inner bg-light lter">
                            <!-- table -->
                            <?php
                              $pesan=$this->session->flashdata('message');
                              if ($pesan == "hapus") {
                                echo "<p class='bg-danger'>Data Berhasil Dihapus</p>";
                              }
                              ?>
                            <div class="col-lg-12">
                                <div class="box">
                                    <header>
                                      <div class="icons"><i class="glyphicon glyphicon-list"></i></div>
                                      <h5><i class="glyphicon glyphicon-user"></i>&nbsp;Data Unduhan</h5>
                                      <div class="toolbar">
                                        <a data-toggle="modal" data-original-title="Help" data-placement="bottom"
                                           href="#tambah" class="btn btn-primary btn-sm btn-rect" >  <i class="glyphicon glyphicon-edit"></i> Tambah Data Unduhan</a>
                                      </div>
                                    </header>
                                    <?php
                                    $jumlah_data=$unduh->num_rows();
                                    if ($jumlah_data==0) {
                                      echo "Data Belum Terisi";
                                    }
                                    else {
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
                                    <div id="borderedTable" class="body collapse in">
                                      <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
                                          <thead>
                                              <tr>
                                                  <th>No</th>
                                                  <th>Judul</th>
                                                  <th>Keterangan</th>
                                                  <th>File</th>
                                                  <th>Jenis</th>
                                                  <th>Manage</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                            <?php
                                              foreach ($unduh->result() as $data_unduh) {
                                                 ?>
                                              <tr>
                                                  <td><?php echo $data_unduh->unduh_id; ?></td>
                                                  <td><?php echo $data_unduh->judul_unduh; ?></td>
                                                  <td><?php echo $data_unduh->keterangan; ?></td>
                                                  <td><?php echo $data_unduh->file_unduh; ?></td>
                                                  <td><?php echo $data_unduh->jenis; ?></td>
                                                  <?php echo $data_unduh->tanggal_unduh; ?>
                                                  <td>
                                                    <a data-toggle="modal" data-original-title="Help" data-placement="bottom"
                                                       href="<?= base_url() ?>Unduh/edit_unduh/<?php echo $data_unduh->unduh_id; ?>" class="btn btn-primary btn-sm btn-rect" >  <i class="glyphicon glyphicon-edit"></i> edit</a>
                                                       <a data-toggle="modal" data-original-title="Help" data-placement="bottom"
                                                          href="<?= base_url() ?>Unduh/hapus_proses/<?php echo $data_unduh->unduh_id; ?>/<?php echo $data_unduh->jenis; ?>" class="btn btn-danger btn-sm btn-rect" >  <i class="glyphicon glyphicon-edit"></i> hapus</a>
                                                  </td>
                                              </tr>
                                              <?php } ?>
                                          </tbody>
                                        </table>
                                    </div>
                                    <?php }//akhir menghitung jumlah data ?>
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
