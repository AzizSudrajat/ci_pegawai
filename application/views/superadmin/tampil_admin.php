<!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
      <h3><i class="fa fa-angle-right"></i> Table Tampil Admin</h3>
        <div class="row mt">
          <div class="col-lg-12">
                      <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i> Tampil Pegawai</h4>
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                                <th class="numeric">No</th>
                                <th class="numeric">Username</th>
                                <th class="numeric">Password</th>
                                <th class="numeric">Nama Lengkap</th>
                                <th class="numeric">Foto Admin</th>
                              </tr>
                              </thead>
                              <tbody>
                                <?php $no=1; foreach($record->result_array() as $list){?>
                              <tr>
                                <td class="numeric"><?php echo $no; ?></td>
                                <td class="numeric"><?php echo $list['username']; ?></td>
                                <td class="numeric"><?php echo $list['password']; ?></td>
                                <td class="numeric"><?php echo $list['nama_lengkap']; ?></td>
                                <td class="numeric"><?php echo $list['foto']; ?></td>
                              </tr>
                              <?php $no++ ; }?>
                              </tbody>
                          </table>
                          </section>
                  </div><!-- /content-panel -->
               </div><!-- /col-lg-4 -->
        </div>
    </section>
</section>
