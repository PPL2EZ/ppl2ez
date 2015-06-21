

<?php
    foreach($barang as $barang)
    { 
        $id=$barang->id;
        $kategori=$barang->kategori;
        $nama=$barang->nama_barang;
        $s=$barang->s;
        $m=$barang->m;
        $l=$barang->l;
        $xl=$barang->xl;
        $berat=$barang->berat;
        $harga=$barang->harga;
        $gambar=$barang->gambar;
        $deskripsi=$barang->deskripsi;
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
      g                          <i class="fa fa-dashboard"></i> <?php echo $title;?>
                            </li>
                        </ol>
                    </div>
					 <div class="col-lg-12">
                        
                        <form action='<?php echo base_url();?>kelbar/do_update' enctype="multipart/form-data" method='post' class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="lg">Kategori</label>
                                    <div class="col-sm-3">
                                        <select name='kategorii' id='kategorii'  class="form-control">
                                        <?php 
                                            foreach($query as $row)
                                            {   ?>      
                                                <option value="<?php echo $row->id; ?>" <?php if ($row->kategori==$kategori){echo "selected";}else{};?>><?php echo $row->kategori; ?></option>
                                         <?php   }
                                        ?>
                                        </select>
                                       
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="lg">Nama Barang</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control"  id="nambar" name="nambar" value="<?php echo $nama;?>" required>
                                    </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="lg">Ukuran dan Stok</label>
                                    <div class="col-sm-4">
                                    </div>
                            </div>
                           
                            <div id="baju" style="display: none;">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="lg">S</label>
                                        <div class="col-sm-4">
                                            <input type="text" id="s" class="form-control"  name="s" value="<?php echo $s;?>"required >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="lg">M</label>
                                        <div class="col-sm-4">
                                            <input type="text" id="m" class="form-control"  name="m" value="<?php echo $m;?>" required >
                                        </div>
                                </div>  
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="lg">L</label>
                                        <div class="col-sm-4">
                                            <input type="text" id="l" class="form-control"  name="l" value="<?php echo $l;?>" required >
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="lg">XL</label>
                                        <div class="col-sm-4">
                                            <input type="text" id="xl" class="form-control"  name="xl" value="<?php echo $xl;?>" required >
                                    </div>
                                </div>
                            </div>
                          




                             <!--Sepatu-->
                        <div id="sepatuu" >
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="lg">Ukuran</label>
                                    <div class="col-sm-4">
                                        <input type="text" id="ukuran" class="form-control"  name="ukuran" placeholder="Masukan dalam integer" >
                                    </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="lg">Stok</label>
                                    <div class="col-sm-4">
                                        <input type="text" id="stok" class="form-control"  name="stok" placeholder="Masukan dalam integer" >
                                    </div>
                            </div>
                        </div>

                        <br>
                        <div class="form-group">
                                <label class="col-sm-2 control-label" for="lg">Berat Barang</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="berat" name="berat" value="<?php echo $berat;?>" required>
                                    </div>
                        </div>
                        <div class="form-group">
                                <label class="col-sm-2 control-label" for="lg">Harga Barang</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="harga" name="harga" value="<?php echo $harga;?>" required>
                                    </div>
                        </div>

                        <div class="form-group">
                                <label class="col-sm-2 control-label" for="lg">Gambar</label>
                                    <div class="col-sm-4">
                                       <div class="product_img"><img src="<?php echo base_url();?>uploads/<?php echo $gambar; ?>" alt="" border="0" width="200" height="200" /></div>
                                    </div>
                        </div>

                        <div class="form-group">
                                <label class="col-sm-2 control-label" for="lg">Upload Gambar</label>
                                    <div class="col-sm-4">
                                       <input type="file" name="userfile" id="upload" size="20" >
                                    </div>
                        </div>
                        <div class="form-group">
                                <label class="col-sm-2 control-label" for="lg">Deskripsi Produk</label>
                                    <div class="col-sm-4">
                                     <input type="text" id="deskripsi" name="deskripsi" value="<?php echo $deskripsi;?>" required>
                                    </div>
                        </div>

                        <button type="submit" name="update" value="Update" formaction="<?php echo base_url();?>kelbar/do_update?id=<?php echo $id; ?>" class="btn btn-primary">Update

                     </div><!-- ./col -->
                </div>
                </div>
                <!-- /.row -->
			</div>
            <!-- /.container-fluid -->

<script type="text/javascript">

  
   var e = document.getElementById("kategorii");
      var struser = e.options[e.selectedIndex].value;

      if (struser == 1 ||struser == 2){
            $("#baju").show();
             $("#sepatuu").hide();          
      }
      else if (struser == 3){
          $("#baju").hide();
            $("#sepatuu").show();             
      }else{
            $("#baju").hide();
            $("#sepatuu").hide();             
      }
      


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