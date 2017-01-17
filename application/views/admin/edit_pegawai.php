<!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
      <h3><i class="fa fa-angle-right"></i> Form Mengubah Data Pegawai</h3>
        <div class="row mt">
          <div class="col-lg-12">

            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i> Form Pengubah Data Pegawai</h4>
              <form class="form-horizontal style-form" action="<?php echo base_url(); ?>index.php/admin/welcome/update_pegawai" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $record['id']; ?>">
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Nama Depan</label>
                <div class="col-sm-10">
                  <input type="text" name="depan" class="form-control" value="<?php echo $record['nama_dp']; ?>">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Nama Belakang</label>
                <div class="col-sm-10">
                  <input type="text" name="belakang" class="form-control" value="<?php echo $record['nama_blk']; ?>">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Tempat</label>
                <div class="col-sm-10">
                  <input type="text" name="tempat" class="form-control" value="<?php echo $record['tempat']; ?>">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Tanggal Lahir</label>
                <div class="col-sm-10">
                  <input type="date" name="lahir" class="form-control" value="<?php echo $record['tanggal_lahir']; ?>">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Telpon</label>
                <div class="col-sm-10">
                  <input type="text" name="telpon" class="form-control" value="<?php echo $record['telpon']; ?>">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" name="email" class="form-control" value="<?php echo $record['email']; ?>">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Alamat</label>
                <div class="col-sm-10">
                  <input type="text" name="alamat" class="form-control" value="<?php echo $record['alamat']; ?>">
                </div>
              </div>
            </div>

              <div class="form-panel">
                <label>Jenis Kelamin</label>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Jenis Kelamin Lama</label>
                  <div class="col-sm-10">
                    <input class="form-control" id="disabledInput" type="text" value="<?php echo $record['jenis_kelamin']; ?>" disabled>
                  </div>
                </div>
                <div class="radio">
						    <label>
						        <input type="radio" name="jk" id="jk1" value="Pria" checked>Pria
						      </label>
						      </div>
						      <div class="radio">
						        <label>
						          <input type="radio" name="jk" id="jk2" value="Wanita">Wanita
						        </label>
						      </div>
              </div>

              <div class="form-panel">
                <label>Pekerjaan</label>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Pekerjaan Lama</label>
                  <div class="col-sm-10">
                    <input class="form-control" id="disabledInput" type="text" value="<?php echo $record['pekerjaan']; ?>" disabled>
                  </div>
                </div>
                <div class="radio">
						    <label>
						        <input type="radio" name="posisi" id="posisi1" value="1" checked>Front End Developer Website
                </label>
						      </label>
						      </div>
						      <div class="radio">
						        <label>
						          <input type="radio" name="posisi" id="posisi2" value="2">Back End Developer Website
						        </label>
						      </div>
                  <div class="radio">
						        <label>
						          <input type="radio" name="posisi" id="posisi3" value="3">Android Developer
						        </label>
						      </div>
                  <div class="radio">
						        <label>
						          <input type="radio" name="posisi" id="posisi4" value="4">Ios Developer
						        </label>
						      </div>
                  <div class="radio">
						        <label>
						          <input type="radio" name="posisi" id="posisi5" value="5">UI/UX expert
						        </label>
						      </div>
                  <div class="radio">
						        <label>
						          <input type="radio" name="posisi" id="posisi6" value="6">System Enginer
						      </div>
              </div>

              <div class="form-panel">
                <label>Tipe dalam pekerjaan :</label>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Tipe Pekerjaan Lama</label>
                  <div class="col-sm-10">
                    <input class="form-control" id="disabledInput" type="text" value="<?php echo $record['tipe_pekerjaan']; ?>" disabled>
                  </div>
                </div>
                <div class="radio">
						    <label>
						        <input type="radio" name="tipe" id="tipe1" value="1" checked>Fulltime
						      </label>
						      </div>
						      <div class="radio">
						        <label>
						          <input type="radio" name="tipe" id="tipe2" value="2">Part time
						        </label>
						      </div>
                  <div class="radio">
						        <label>
						          <input type="radio" name="tipe" id="tipe3" value="3">Remote
						        </label>
						      </div>
              </div>

            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i> Kehalian Umum</h4>
              <div class="form-group">
                <textarea class="form-control" name="tentang" rows="3"><?php echo $record['keahlian_umum']; ?></textarea>
              </div>
              <div class="form">
                <label>Foto Pegawai Lama</label>
                <input type="hidden" name="gambar" value="">
                <img src="<?php echo base_url(); ?>uploads/pegawai/<?php echo $record['gambar']; ?>" alt="">
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="gambar">Upload Foto Pegawai Baru</label>
                <input id="gambar" name="gambar" type="file"/>
              </div>
              <button type="submit" class="btn btn-theme">Kirim</button>
            </div>
          </form>
        </div>
    </section>
</section>
