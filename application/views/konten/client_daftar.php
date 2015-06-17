<script type="text/javascript" src="<?php echo base_url;?>assets/js/jquery-1.7.2.min.js"></script>
<div class="center_content">

      <form name="login"  class="form-horizontal" role="form"  action="<?php echo base_url();?>user_auth/daftar" method="post">

          <h1 align="center"><?php echo $title;?></h1><br>
          <b><h3>Data Personal</h3></b><br>

          <div class="form-group has-feedback">
            <label class="col-sm-3 control-label" for="lg">Nama</label>
              <div class="col-sm-6">
                  <input type="text"  class="form-control"  id="nama" name="nama" placeholder="Masukkan Nama Anda" required>
              </div>
          </div> 

          <div class="form-group has-feedback">
            <label class="col-sm-3 control-label" for="lg">Email</label>
              <div class="col-sm-6">
                  <input type="email"  class="form-control"  id="email" name="email" placeholder="Masukkan Email Anda" required>
              </div>
          </div> 

          <div class="form-group has-feedback">
            <label class="col-sm-3 control-label" for="lg">Handphone</label>
              <div class="col-sm-6">
                  <input type="text"  class="form-control"  id="hp" name="hp" placeholder="Masukkan No Hp Anda" required>
              </div>
          </div> 

           <b><h3>Alamat</h3></b><br>

           <div class="form-group has-feedback">
            <label class="col-sm-3 control-label" for="lg">Alamat</label>
              <div class="col-sm-6">
                  <input type="text"  class="form-control"  id="alamat" name="alamat" placeholder="Alamat" required>
              </div>
          </div> 

          <div class="form-group has-feedback">
            <label class="col-sm-3 control-label" for="lg">Provinsi</label>
              <div class="col-sm-6">
                  <input type="text"  class="form-control"  id="provinsi" name="provinsi" placeholder="Provinsi" required>
              </div>
          </div> 

          <div class="form-group has-feedback">
            <label class="col-sm-3 control-label" for="lg">Kota/ Kabupaten</label>
              <div class="col-sm-6">
                  <input type="text"  class="form-control"  id="kota" name="kota" placeholder="Kota/ Kabupaten" required>
              </div>
          </div> 

          <div class="form-group has-feedback">
            <label class="col-sm-3 control-label" for="lg">Kecamatan</label>
              <div class="col-sm-6">
                  <input type="text"  class="form-control"  id="kecamatan" name="kecamatan" placeholder="Kecamatan" required>
              </div>
          </div> 

          <div class="form-group has-feedback">
            <label class="col-sm-3 control-label" for="lg">Kelurahan / Desa</label>
              <div class="col-sm-6">
                  <input type="text"  class="form-control"  id="kelurahan" name="kelurahan" placeholder="Kelurahan" required>
              </div>
          </div> 
          
           <b><h3>Password</h3></b><br>

            <div class="form-group has-feedback">
              <label class="col-sm-3 control-label" for="lg">Password</label>
                <div class="col-sm-6">
                    <input type="password"  class="form-control"  id="password" name="password" placeholder="Masukkan Password Baru" required>
                     <i id='gagalp' class="glyphicon glyphicon-remove form-control-feedback"  style="color:red"></i>
                    <i id='suksesp' class="glyphicon glyphicon-ok form-control-feedback"  style="color:green"></i>
                </div>
           </div> 

             <!-- Confirm Password -->
            <div class="form-group has-feedback">
              <label class="col-sm-3 control-label" for="lg">Confirm Password</label>
                <div class="col-sm-6">
                    <input type="password" id="cpassword" class="form-control" name="cpassword" placeholder="Confirm Password  Anda" required>
                    <i id='gagal' class="glyphicon glyphicon-remove form-control-feedback"  style="color:red"></i>
                    <i id='sukses' class="glyphicon glyphicon-ok form-control-feedback"  style="color:green"></i>
                    <div id='pesan'></div>
                </div>
             </div>
            <br>
            <input type="submit" name="daftar" value="Daftar" class="btn btn-primary ">      
    </form>  
        
      </div>
</div>
    <!-- end of center content -->
