<?php
    foreach($status as $status)
    { 
        $id=$status->id;
        $alamat=$status->alamat;
        $provinsi=$status->provinsi;
        $kota=$status->kota;
        $kecamatan=$status->kecamatan;
        $kelurahan=$status->kelurahan;
        $kelurahan=$status->kelurahan;
        $bp=$status->pengiriman;
        $total=$status->total_harga;
        $nama=$status->product_name;
        $qty=$status->qty;
        $ukuran=$status->options;
        $statuus=$status->status;

       
    }
?>
<!-- main page -->
<div id="page-wrapper">
    <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Biaya Total
                        </h1>
                    </div>
                    <div class="col-lg-12">
                     <form name="form_name" action="<?php echo base_url();?>adminadmin/set_status_penjualan?id=<?php echo $id;?>" method="post">   
                        <table id="myTable" class="table">
                                           <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Alamat</th>
                                                <th>Barang yang Dibeli</th>
                                                <th>Ukuran</th>
                                                <th>Jumlah</th>
                                                <th>Harga</th>
                                                <th>Biaya Pengiriman</th>
                                                <th>Total Harga</th>
                                               
                                            </tr>
                                        </thead>
                                            <tr>
                                                <td><?php echo $id;?></td>
                                                <td>
                                                    <?php echo $alamat ."<br> ". $kelurahan." ". $kecamatan."<br> ".$kota. " " .$provinsi;?>
                                                </td>
                                                 <td><?php echo $nama; ?></td>
                                                 <td><?php echo $ukuran; ?></td>
                                                <td><?php echo $qty; ?></td>
                                                <td><?php echo $status->price; ?></td>
                                                <td><input type="text" id="bp" name="bp" value="<?php if (empty($bp)){}else{echo $bp;}?>" class="form-control"></td>
                                                <td><input type="text" id="t" name="t" value="<?php if (empty($bp)){}else{echo $total;}?>" class="form-control"></td>
                                            </tr>
 
                                    </table>
                            <input type="submit" value="Simpan" class="btn btn-primary" >
                        </form>                    
                     </div><!-- ./col -->
                </div>

                <div class="col-lg-12">
                        <h1 class="page-header">
                           Status Pemesanan
                        </h1>
                </div>
                <div class="col-lg-12">
                    <form  name="form_name" action="<?php echo base_url();?>adminadmin/set_status_penjualan1?id=<?php echo $id;?>" method="post">
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="lg">Status</label>
                            <div class="col-sm-4">
                                <select name="kategori" class="form-control" id="kategori">
                                    <option value="unpaid" <?php if ($statuus=="unpaid"){echo "selected";}else{}?>>unpaid</option>
                                    <option value="paid" <?php if ($statuus=="paid"){echo "selected";}else{}?>>paid</option>
                                    <option value="pengiriman" <?php if ($statuus=="pengiriman"){echo "selected";}else{}?>>pengiriman</option>
                                    <option value="batal" <?php if ($statuus=="batal"){echo "selected";}else{}?>>batal</option>
                                    <option value="confirmed" <?php if ($statuus=="confirmed"){echo "selected";}else{}?>>confirmed</option>
                                    <option value="unconfirmed" <?php if ($statuus=="unconfirmed"){echo "selected";}else{}?>>unconfirmed</option>
                                </select>
                            </div>
                    </div>
                    <div class="form-group">
                         <input type="submit" value="Simpan" class="btn btn-primary" id="submitstatus" >
                    </div>
                   
                    <form>

                </div>      
            </div>
             <br><br><br>
             <a href="<?php echo base_url();?>adminadmin/kelola_penjualan" class="btn btn-danger">Kembali</a>
</div>
            <!-- /.container-fluid -->

<script>
   //Perubahan Status Pemesanan
   //Jika Batal tombol submit di disable
 var e = document.getElementById("kategori");
      var struser = e.options[e.selectedIndex].value;
     
      if (struser == "batal"){    
            document.getElementById('submitstatus').style.pointerEvents = 'none';
            document.getElementById('submitstatus').style.opacity = 0.5;
      }else{
        
      }        
      //end
      //style="pointer-events: none; cursor: default; opacity: 0.5"
</script>