<!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
      <h3><i class="fa fa-angle-right"></i> Form Admin</h3>
        <div class="row mt">
          <div class="col-lg-12">

            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i> Form Pengisian Data Admin</h4>
              <form class="form-horizontal style-form" action="<?php echo base_url(); ?>index.php/admin/welcome/insert_admin" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Username</label>
                <div class="col-sm-10">
                  <input type="text" name="username" class="form-control" placeholder="Masukan Nama Depan Anda">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                  <input type="password" name="paswword" class="form-control" placeholder="Masukan Nama Belakang Anda">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Nama Lengkap</label>
                <div class="col-sm-10">
                  <input type="text" name="namalengkap" class="form-control" placeholder="Masukan Tempat Lahir Anda">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="gambar">Upload Foto</label>
                <input id="gambar" name="foto" type="file"/>
              </div>
              <button type="submit" class="btn btn-theme">Kirim</button>
            </form>

        </div>
      </div>
    </div>
  </section>
</section>
