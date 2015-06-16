
<div class="center_content">
      
      <h4><b>Akun Saya</b></h4>
      <div class="container">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#akun" data-toggle="tab">Aku Saya</a></li>
            <li><a href="#pesanan" data-toggle="tab">Pesana Saya</a></li>
            <li><a href="#konfirmasi" data-toggle="tab">Konfirmasi Pembayaran</a></li>
        </ul>
<!-- Tab menu Akun Saya-->
         <div class="tab-content">
            <div class="tab-pane active" id="akun">
              
              <!-- ALERT MESSAGE 
              <div class="alert alert-danger fade in">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                  <strong>Error!</strong> A problem has been occurred while submitting your data.
              </div>
-->
              <!-- DATA PERSONAL-->
              <h3>Data Personal</h3><br>
            <form name="datauser" class="form-horizontal" role="form" action="<?php echo base_url();?>user_auth/daftar" method="post" >
              <!-- Nama -->
              <div class="form-group">
                <label class="col-sm-3 control-label" for="lg">Nama</label>
                  <div class="col-sm-9">
                     <input type="text" id="nama" class="form-control" id="focusedInput" name="nama" placeholder="Masukkan Nama Anda" required value="<?php echo $username; ?>">
                  </div>
              </div>

               <!-- Email -->
              <div class="form-group">
                <label class="col-sm-3 control-label" for="lg">Email</label>
                  <div class="col-sm-9">
                     <input type="Email" id="email" name="email" class="form-control" placeholder="Masukkan Email Anda" required value="<?php echo $email; ?>">
                  </div>
              </div>

              <!-- HP -->
              <div class="form-group">
                <label class="col-sm-3 control-label" for="lg">Handphone</label>
                  <div class="col-sm-9">
                     <input type="hp" id="hp" name="hp" class="form-control" placeholder="Masukkan No Hp Anda" required value="<?php echo $hp; ?>">
                  </div>
              </div>
              <br>
              <h3>Alamat</h3>
              <br>
               <!-- Alamat -->
              <div class="form-group">
                <label class="col-sm-3 control-label" for="lg">Alamat</label>
                  <div class="col-sm-9">
                     <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Masukkan Alamat Rumah Anda" required value="<?php echo $alamat; ?>">
                  </div>
              </div>

              <!-- Provinsi -->
              <div class="form-group">
                <label class="col-sm-3 control-label" for="lg">Provinsi</label>
                  <div class="col-sm-9">
                     <input type="text" id="provinsi" name="provinsi" class="form-control" placeholder="Provinsi" required value="<?php echo $provinsi; ?>">
                  </div>
              </div>

              <!-- Kota / Kabupaten -->
              <div class="form-group">
                <label class="col-sm-3 control-label" for="lg">Kota/ Kabupaten</label>
                  <div class="col-sm-9">
                     <input type="text" id="kota" name="kota" class="form-control" placeholder="Kota / Kabupaten" required value="<?php echo $kota; ?>">
                  </div>
              </div>

               <!-- Kecamatan -->
              <div class="form-group">
                <label class="col-sm-3 control-label" for="lg">Kecamatan</label>
                  <div class="col-sm-9">
                     <input type="text" id="kecamatan" name="kecamatan" class="form-control" placeholder="Kecamatan" required value="<?php echo $kecamatan; ?>">
                  </div>
              </div>

              <!-- Kelurahan/ Desa -->
              <div class="form-group">
                <label class="col-sm-3 control-label" for="lg">Kelurahan/ Desa</label>
                  <div class="col-sm-9">
                     <input type="text" id="kelurahan" name="kelurahan" class="form-control" placeholder="Kelurahan" required value="<?php echo $kelurahan; ?>">
                  </div>
              </div>
    

             <input type="submit" name="Edit" value="Simpan" class="btn btn-primary">

              </form> 
<!-- END FORM -->
            <br><br>
<!-- Start FOrm -->
          <form id="gantipassword" name="gantipassword" class="form-horizontal" role="form"  action="<?php echo base_url();?>user_auth/change_password_client" method="post" >
             <h3>Password</h3><br>
             <!-- Password -->
          <div class="form-group">
              <label class="col-sm-3 control-label" for="lg">Password</label>
                <div class="col-sm-9">
                    <input type="password"  class="form-control"  id="password" name="password" placeholder="Masukkan Password Baru" required>
                </div>
           </div> 

             <!-- Confirm Password -->
            <div class="form-group">
              <label class="col-sm-3 control-label" for="lg">Confirm Password</label>
                <div class="col-sm-9">
                    <input type="password" id="cpassword" class="form-control" name="cpassword" placeholder="Confirm Password  Anda" required>
                </div>
             </div>
             <input type="submit" value="Change" class="btn btn-primary" name="submit">
          </form>
             
          
          </div>


<!--End Tab menu Akun Saya-->
<!-- Tab Menu Pesanan-->
            <div class="tab-pane" id="pesanan">
                <h4><b>Daftar Pemesanan</b></h4>
               
                <table id="myTable" class="table table-bordered">
                  <thead>
                  <tr>
                    <th>ID Pesanan</th>
                    <th>Tanggal</th>
                    <th>Total Pesanan</th>
                    <th>Status</th>
                    <th>Detail</th>
                  </tr>
                </thead>
                  <?php
                  if (empty($pesanan)){

                  }else{
                    foreach ($pesanan as $data) { //ngabsen data
                  ?>
                  <tr>
                    <td><?php echo $data->id; ?></td> 
                    <td><?php echo $data->date; ?></td>
                    <td><?php echo $data->qty; ?></td>
                    <td><?php echo $data->status; ?></td>
                                              
                    <td>
                                                 <!--     <a href="<?php echo base_url();?>client/detail_pesanan?id=<?php echo $data->id; ?>">Lihat</a>-->                                                         
                      <a href="<?php echo base_url();?>client/detail_invoice?det=<?php echo $data->id; ?>" class="btn btn-primary">Detail</a>
                    </td>
                  </tr>
                  <?php
                    }
                    }
                  ?>
                  </tr>
                </table>

                <br><br>
                <h4><b>Riwayat Pembayaran</b></h4>
                
                <table id="myTable1" class="table table-bordered">
                  <thead>
                  <tr>
                    <th>ID Invoice</th>
                    <th>Jumlah</th>
                    <th>Tanggal</th>
                    <th>Gambar</th>
                    
                  </tr>
                </thead>
                <?php
                if (empty($pembayaran)){}else{
                  foreach($pembayaran as $data1){ 
                ?> 
                  <tr>
                    <td><?php echo $data1->id_invoice;?></td>
                    <td><?php echo $data1->dari_bank;?></td>
                    <td><?php echo $data1->tanggal?></td>
                    <td><img alt="Thumbnail image" src="<?php echo base_url();?>uploads/bukti/<?php echo $data1->scan_struk?>" class="img-thumbnail" width="150" height="200"></td>
                    
                  </tr>
                    <?php
                      } 
                    }
                    ?>
                </table>
            </div>
<!--End Tab menu pesanan-->
<!-- Tab Menu konfirmasi-->
            <div class="tab-pane" id="konfirmasi">
              <br>

              <form name="login" class="form-horizontal" role="form" action="<?php echo base_url();?>client/konfirmasi" enctype="multipart/form-data" method="post">
              <!-- ID Pesanan -->
            
              <div class="form-group">
                <label class="col-sm-3 control-label" for="lg">ID Pesanan</label>
                  <div class="col-sm-9">
                     <input type="text" class="form-control" id="focusedInput" name="id" placeholder="Masukkan id pesanan" required>
                  </div>
              </div>

             
              <div class="form-group">
                <label class="col-sm-3 control-label" for="lg">Dari Bank</label>
                  <div class="col-sm-9">
                     <input type="text" class="form-control"  id="daribank" name="daribank" placeholder="Dari bank" required>
                  </div>
              </div>

               <!-- Nama Pemilik Rekening -->
              <div class="form-group">
                <label class="col-sm-3 control-label" for="lg">Nama Pemilik Rekening</label>
                  <div class="col-sm-9">
                     <input type="text" class="form-control"  id="npr" name="npr" placeholder="Nama Pemilik Rekening" required>
                  </div>
              </div>
              
               <!-- Transfer ke -->
              <div class="form-group">
                <label class="col-sm-3 control-label" for="lg">Transfer Ke</label>
                  <div class="col-sm-9">
                     <input type="text" class="form-control"  id="transfer" name="transfer" placeholder="Bank tujuan Transfer" required>
                  </div>
              </div>

                <!-- Jumlah Transfer -->
              <div class="form-group">
                <label class="col-sm-3 control-label" for="lg">Jumlah Transfer</label>
                  <div class="col-sm-9">
                     <input type="text" class="form-control"  id="jumlahtransfer" name="jumlahtransfer" placeholder="Jumlah Transfer" required>
                  </div>
              </div>

               <!-- Bukti Transfer -->
              <div class="form-group">
                <label class="col-sm-3 control-label" for="lg">Bukti Transfer</label>
                  <div class="col-sm-9">
                     <input type="file" name="userfile" id="upload" size="30" required onchange="previewImage(this,[256],1);"><br>
                      <div class="imagePreview"></div>
                  </div>
                  <div class="imagePreview"></div>
              </div>
          
           <input type="submit" name="daftar" value="Upload" class="btn btn-primary">
     
    </form>  
            </div>
<!--End Tab menu konfirmasi-->
        </div>
        <!--/tab-content-->
      </div>



    <!-- end of center content -->
   
    <!-- end of right content -->
  </div>
  <!-- end of main content -->
  <script>
      //Datatables
      $(document).ready(function(){
        $('#myTable').DataTable();
      });

      $(document).ready(function(){
        $('#myTable1').DataTable();
      });

      //Validate Ganti Password
     function validatePassword(){ 
      var validator = $("#gantipassword").validate({
        rules: {                   
           password :"required",
            confirmpassword:{
              equalTo: "#password"
              }  
              },                             
            messages: {
              password :" Enter Password",
              confirmpassword :" Enter Confirm Password Same as Password"
           }
        });
        if(validator.form()){
        alert('Sucess');
        }
}


//function changetextbox()
//{
  // var form = '<input type="file" name="userfile" id="upload" size="20" required >';
 //  if (document.getElementById("rubah_gambar").value === "tidak") {
  //     document.getElementById("upload1").disabled='true';
   //   document.getElementById("upload2").innerHTML = "";
    //} else {
     //   document.getElementById("upload").disabled='';
      //  document.getElementById("myH").innerHTML = "My Sec";
        // document.getElementById("upload2").innerHTML = form;
    //}
//}


    </script>