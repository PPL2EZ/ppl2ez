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
                        
                        <form action='<?php echo base_url();?>kelbar/do_upload' class="form-horizontal" enctype="multipart/form-data" method='post'>
                             <!-- Kategori -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="lg">Kategori</label>
                                    <div class="col-sm-4" >
                                        <select name='kategorii' id='kategorii' >
                                            <option value="" selected>---Pilih Kategori---</option>
                                                <?php 
                                                    foreach($query as $row)
                                                    { 
                                                        echo '<option value="'.$row->id.'">'.$row->kategori.'</option>';
                                                    }
                                                ?>
                                        </select>
                                    </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="lg">Nama Barang</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="nambar" name="nambar" placeholder="Masukkan Nama Barang" required>
                                    </div>
                            </div>
                            <!-- Ukuran dan Stok -->
                            
                            <!--Baju-->
                            
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="lg">Ukuran dan Stok</label>
                                    <div class="col-sm-4">
                                    </div>
                            </div>
                        <div id="baju" style="display: none;">
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="lg">S</label>
                                    <div class="col-sm-4">
                                        <input type="text" id="s" class="form-control"  name="s" placeholder="Masukan dalam integer" >
                                    </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="lg">M</label>
                                    <div class="col-sm-4">
                                        <input type="text" id="m" class="form-control"  name="m" placeholder="Masukan dalam integer" >
                                    </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="lg">L</label>
                                    <div class="col-sm-4">
                                        <input type="text" id="l" class="form-control"  name="l" placeholder="Masukan dalam integer" >
                                    </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="lg">XL</label>
                                    <div class="col-sm-4">
                                        <input type="text" id="xl" class="form-control"  name="xl" placeholder="Masukan dalam integer" >
                                    </div>
                            </div>
                        </div>

                            <!--End Baju-->
                            <!--Sepatu-->
                        <div id="sepatuu" style="display: none;">
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
                            <!--End Sepatu-->
                            <!-- End Ukuran dan Stok-->
                            <br>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="lg">Berat Barang</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="berat" name="berat" placeholder="Masukan dalam integer" required>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="lg">Harga Barang</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="harga" name="harga" placeholder="Masukkan dalam integer" required>
                                    </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="lg">Unggah File</label>
                                    <div class="col-sm-4">
                                        <input type="file" name="userfile" size='20' id="upload" required onchange="previewImage(this,[256],1);">
                                        <div class="imagePreview"></div>
                                    </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-2 control-label" for="lg">Deskripsi Produk</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi" required>
                                    </div>
                            </div>
                            <input type="submit" name="simpan" value="Simpan" class="btn btn-primary" >

                        </form>
                                <br>
                                <form ><button type="submit" class="btn btn-warning" formaction="<?php echo base_url();?>adminadmin/kelola_barang">Lihat Daftar Barang</button>


                        <?php
                            //if(isset($message)){
                             //   echo "<div class='message'>";
                             //   foreach ($message as $err){
                             //       echo $err;
                             //   }
                                
                             //   echo "</div>";
                            //}
                        ?>
                        
                     </div><!-- ./col -->
                </div>
                </div>
                <!-- /.row -->
			</div>
            <!-- /.container-fluid -->