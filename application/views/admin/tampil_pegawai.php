<!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
      <h3><i class="fa fa-angle-right"></i> Table Tampil Pegawai</h3>
        <div class="row mt">
          <div class="col-lg-12">
                      <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i> Tampil Pegawai</h4>
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                                <th class="numeric">No</th>
                                <th class="numeric">Nama Lengkap</th>
                                <th class="numeric">Tempat Lahir</th>
                                <th class="numeric">Tempat Lahir</th>
                                <th class="numeric">Jenis Kelamin</th>
                                <th class="numeric">Pekerjaan</th>
                                <th class="numeric">Tipe Pekerjaan</th>
                                <th class="numeric">Telpon</th>
                                <th class="numeric">Email</th>
                                <th class="numeric">Alamat</th>
                                <th class="numeric">Keahlian Umum</th>
                                <th class="numeric">Foto Pegawai</th>
                              </tr>
                              </thead>
                              <tbody>
                                <?php $no=1; foreach($record->result_array() as $list){?>
                              <tr>
                                <td class="numeric"><?php echo $no; ?></td>
                                <td class="numeric"><?php echo $list['nama_dp']." ".$list['nama_blk']; ?></td>
                                <td class="numeric"><?php echo $list['tempat']; ?></td>
                                <td class="numeric"><?php echo $list['tanggal_lahir']; ?></td>
                                <td class="numeric"><?php echo $list['jenis_kelamin']; ?></td>
                                <td class="numeric"><?php echo $list['pekerjaan']; ?></td>
                                <td class="numeric"><?php echo $list['tipe_pekerjaan']; ?></td>
                                <td class="numeric"><?php echo $list['telpon']; ?></td>
                                <td class="numeric"><?php echo $list['email']; ?></td>
                                <td class="numeric"><?php echo $list['alamat']; ?></td>
                                <td class="numeric"><?php echo $list['keahlian_umum']; ?></td>
                                <td class="numeric"><?php echo $list['gambar']; ?></td>
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
