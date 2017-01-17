<!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
      <h3><i class="fa fa-angle-right"></i> Form Pegawai</h3>
        <div class="row mt">
          <div class="col-lg-12">

            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i> Form Pengisian Data Pegawai</h4>
              <form class="form-horizontal style-form" action="<?php echo base_url(); ?>index.php/admin/welcome/insert_pegawai" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Nama Depan</label>
                <div class="col-sm-10">
                  <input type="text" name="depan" class="form-control" placeholder="Masukan Nama Depan Anda">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Nama Belakang</label>
                <div class="col-sm-10">
                  <input type="text" name="belakang" class="form-control" placeholder="Masukan Nama Belakang Anda">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Tempat</label>
                <div class="col-sm-10">
                  <input type="text" name="tempat" class="form-control" placeholder="Masukan Tempat Lahir Anda">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Tanggal Lahir</label>
                <div class="col-sm-10">
                  <input type="date" name="lahir" class="form-control" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Telpon</label>
                <div class="col-sm-10">
                  <input type="text" name="telpon" class="form-control" placeholder="Masukan Nomer Telpon Anda">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" name="email" class="form-control" placeholder="Masukan Email Anda">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Alamat</label>
                <div class="col-sm-10">
                  <input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat Anda">
                </div>
              </div>
            </div>

              <div class="form-panel">
                <label>Jenis Kelamin</label>
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
                <textarea class="form-control" name="tentang" rows="3"></textarea>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="gambar">Upload Foto</label>
                <input id="gambar" name="gambar" type="file"/>
              </div>
              <button type="submit" class="btn btn-theme">Kirim</button>
            </div>
          </form>
        </div>
    </section>
</section>
