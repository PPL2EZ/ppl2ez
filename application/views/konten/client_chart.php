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
        $ukuran=$barang->ukuran;
        $stok=$barang->stok;
        $berat=$barang->berat;
        $harga=$barang->harga;
        $gambar=$barang->gambar;
        $deskripsi=$barang->deskripsi;
    }

?>
<input type="text" id="id" name="id" value="<?php echo $id;?>" hidden>
<input type="text" id="kat" name="kat" value="<?php echo $kategori;?>" hidden>

<div class="center_content">
  <h4><b><?php echo $title?><br></b></h4>
  <!-- Baju-->
  <div id="baju">
  <form name="login" action="<?php echo base_url();?>home/add_to_cart?id=<?php echo $id;?>" method="post" role="form" class="form-signin">
  <table style="width:80%">
    <tr>
      <th>Pesanan</th>
      <th>&nbsp</th>
      <th>Ukuran</th>
      <th>Kuantitas</th>
    </tr>
    <tr>
      <td><img class="img-thumbnail" src="<?php echo base_url();?>uploads/<?php echo $gambar; ?>" alt="" border="5" width="200" height="200" /> </td>
    
      <td>
        Kategori : <?php echo $kategori?><br>
        Stok : <br>
        &nbsp S : <?php echo $s;?><br>
        &nbsp m : <?php echo $m?><br>
        &nbsp l : <?php echo $l?><br>
        &nbsp xl : <?php echo $xl;?><br>
        Harga : <?php echo $harga;?>
        
      </td>
      <td>
           <!--<input type="text" id="ukuran" name="ukuran" size="1" class="form-control" required >-->
              
                <select name="ukuran" class="form-control" id="ukuran">
                  <option value="s">S</option>
                  <option value="m" >M</option>
                  <option value="l" >L</option>
                  <option value="xl" >XL</option>
              </select>
            
      </td>
      <td>
           <input type="text" id="quantity" name="quantity" size="1" class="form-control" required>
      </td>
    </tr>
    <tr>
      <td>&nbsp</td>
      <td>
          <input type="submit" name="Pesan" value="Pesan" class="btn btn-primary">
      </td>
    </tr>
  </table>

</form>
</div>
<!-- end div baju-->
  
  <!-- Div Start Sepatu-->
  <div id="sepatu">
    <form name="login" action="<?php echo base_url();?>home/add_to_cart?id=<?php echo $id;?>" method="post" role="form" class="form-signin">
  <table style="width:80%">
    <tr>
      <th>Pesanan</th>
      <th>&nbsp</th>
      <th>Kuantitas</th>
    </tr>
    <tr>
      <td><img class="img-thumbnail" src="<?php echo base_url();?>uploads/<?php echo $gambar; ?>" alt="" border="5" width="200" height="200" /> </td>
    
      <td>
        Kategori : <?php echo $kategori?><br>
        Stok : <br>
        &nbsp Ukuran : <?php echo $ukuran;?><br>
        &nbsp Stok : <?php echo $stok?><br>
        Harga : <?php echo $harga;?>
        
      </td>
      <td>
           <input type="text" id="quantity" name="quantity" size="1" class="form-control" required>
      </td>
    </tr>
    <tr>
      <td>&nbsp</td>
      <td>
          <input type="submit" name="Pesan" value="Pesan" class="btn btn-primary">
      </td>
    </tr>
  </table>

</form>
  </div>
  <!-- Div End Spatu-->
<!--
<p id="i"></p>-->
    
</div>

<script>
  //cek baju atau sepatu
  var kat = $("#kat").val();
  if (kat == 3){
    $("#sepatu").show();
    $("#baju").hide();
  }else{ 
    $("#baju").show();
    $("#sepatu").hide();
  }
     //Cek stok tersedia tidak
   $("#quantity").change(function(){
      //mendapatkan value dari quantity
      //var ukur     = $("#ukuran").val();
      var e = document.getElementById("ukuran");
      var ukur = e.options[e.selectedIndex].value;
      var quant     = $("#quantity").val();
      var id     = $("#id").val();

      // data string menyimpan ukuran m l xl
      var dataString = 'ukuran='+ ukur

      $.ajax({
        url:"http://localhost/ppl2ez/ajax/get2?id="+id,              
        dataType : "json",
        data: dataString,
        type: "POST",

        success: function(data){
          if (data < quant){
            alert('Ukuran '+ukur+' tidak mencukupi');
          }else{
          }
          
    
        }
      });                       
    }); 
</script>
