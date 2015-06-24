<?php
    foreach($user as $user)
    { 
        $id=$user->id;
        $nama=$user->nama;
        $email=$user->email;
        $no_hp=$user->no_hp;
        $alamat=$user->alamat;
        $provinsi=$user->provinsi;
        $kota=$user->kota;
        $kecamatan=$user->kecamatan;
    }
?>
<!-- main page -->
			<div id="page-wrapper">
				<div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> <?php echo $title;?>
                            </li>
                        </ol>
                    </div>
					 <div class="col-lg-12">
                        <form action='#' method='post' class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="lg">ID</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control"  id="id" name="id" value="<?php echo $id;?>" disabled>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="lg">User Name</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control"  id="nama" name="nama" value="<?php echo $nama;?>" required>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="lg">No Handphone</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control"  id="no_hp" name="no_hp" value="<?php echo $no_hp;?>" required>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="lg">Email</label>
                                    <div class="col-sm-3">
                                        <input type="email" class="form-control"  id="email" name="email" value="<?php echo $email;?>" required>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="lg">Alamat</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control"  id="alamat" name="alamat" value="<?php echo $alamat;?>" required>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="lg">Provinsi</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control"  id="provinsi" name="provinsi" value="<?php echo $provinsi;?>" required>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="lg">Kota</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control"  id="kota" name="kota" value="<?php echo $kota;?>" required>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="lg">Kecamatan</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control"  id="kecamatan" name="kecamatan" value="<?php echo $kecamatan;?>" required>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="lg"></label>
                                    <div class="col-sm-3">
                                        <button type="submit" name="update" value="Update" formaction="<?php echo base_url();?>keluser/save_edit?id=<?php echo $id; ?>" class="btn btn-primary">Update
                                    </div>
                            </div>

                        </form>
                </div>
                </div>
                <!-- /.row -->
			</div>
            <!-- /.container-fluid -->

<script type="text/javascript">

 //<td>Rubah Gambar</td>
   //                             <td>
     //                                <select name='rubah_gambar' id='rubah_gambar' onChange="changetextbox();">
       //                                 <option value="ya" selected="selected">Ya</option>
         //                               <option value="tidak">Tidak</option>
           //                         </select>
             //                   </td>
//function changetextbox()
//{
  //  var form = '<input type="file" name="userfile" id="upload" size="20" required >';
   // if (document.getElementById("rubah_gambar").value === "tidak") {
    //    //document.getElementById("upload1").disabled='true';
     //   document.getElementById("upload2").innerHTML = "";
    //} else {
     //   //document.getElementById("upload").disabled='';
    //           //document.getElementById("myH").innerHTML = "My Sec";
     //   document.getElementById("upload2").innerHTML = form;
    //}
//}
</script>