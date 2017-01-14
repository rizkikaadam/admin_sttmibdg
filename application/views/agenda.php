                <div id="content">
                    <div class="outer">
                        <div class="inner bg-light lter">
                            <!-- table -->
                            <div class="col-lg-12">
                                <div class="box">
                                  <header>
                                    <h5><i class="glyphicon glyphicon-calendar"></i>&nbsp;Data Agenda</h5>
                                      <div class="toolbar">
                                        <a data-toggle="modal" data-original-title="Help" data-placement="bottom"
                                           href="#tambah" class="btn btn-primary btn-sm btn-rect" >  <i class="glyphicon glyphicon-edit"></i> Tambah</a>
                                      </div>
                                  </header>
                                    <?php
                                    $jumlah_data=$agenda->num_rows();
                                    if ($jumlah_data==0) {
                                      echo "Data Belum Terisi";
                                    }
                                    else {
                                     ?>
                                    <div id="borderedTable" class="body collapse in">
                                      <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
                                          <thead>
                                              <tr>
                                                  <th>No</th>
                                                  <th>Agenda</th>
                                                  <th>Deskripsi</th>
                                                  <th>Tempat</th>
                                                  <th>Prodi</th>
                                                  <th>Tanggal</th>
                                                  <th>Manage</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                            <?php
                                            $no=0;
                                            foreach ($agenda->result() as $data_agenda) {
                                              $no++;
                                             ?>
                                              <tr>
                                                  <td><?php echo "$no"; ?></td>
                                                  <td><?php echo $data_agenda->agenda_judul; ?></td>
                                                  <td><?php echo $data_agenda->agenda_deskripsi; ?></td>
                                                  <td><?php echo $data_agenda->agenda_tempat; ?></td>
                                                  <td><?php echo $data_agenda->agenda_prodi; ?></td>
                                                  <td><?php echo $data_agenda->agenda_tanggal; ?></td>
                                                  <td><a href="<?php echo base_url() ?>agenda/edit_agenda/<?php echo $data_agenda->agenda_id; ?>" class="btn btn-primary btn-sm btn-rect" alt="edit data profil">  <i class="glyphicon glyphicon-edit"></i> edit</a>
                                                    <a href="<?php echo base_url() ?>agenda/hapus_agenda/<?php echo $data_agenda->agenda_id; ?>" class="btn btn-danger btn-sm btn-rect" alt="edit data profil">  <i class="glyphicon glyphicon-edit"></i> hapus</a>
                                                  </td>
                                              </tr>
                                              <?php }//akhir menampilkan agenda ?>
                                          </tbody>
                                        </table>
                                    </div>
                                    <?php }//akhir menghitung agenda ?>
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
            <!--jQuery -->
            <script src="assets/lib/jquery/jquery.js"></script>

                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/jquery.dataTables.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/dataTables.bootstrap.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.26.6/js/jquery.tablesorter.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>

            <!--Bootstrap -->
            <script src="assets/lib/bootstrap/js/bootstrap.js"></script>
            <!-- MetisMenu -->
            <script src="assets/lib/metismenu/metisMenu.js"></script>
            <!-- Screenfull -->
            <script src="assets/lib/screenfull/screenfull.js"></script>


            <!-- Metis core scripts -->
            <script src="assets/js/core.js"></script>
            <!-- Metis demo scripts -->
            <script src="assets/js/app.js"></script>

                <script>
                    $(function() {
                      Metis.MetisTable();
                      Metis.metisSortable();
                    });
                </script>

            <script src="assets/js/style-switcher.js"></script>
        </body>

  </html>
