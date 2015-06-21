<!-- main page -->
			<div id="page-wrapper">
				<div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Kelola Barang
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Daftar Barang
                            </li>
                        </ol>
                    </div>
                    <div class="col-lg-12">
                        
                        <table id="myTable" class="table table-bordered table-hover table-striped">
                                           <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Gambar</th>
                                                <th scope="col">Kategori</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Ukuran</th>
                                                <th scope="col">Berat</th>
                                                <th scope="col">Harga</th>
                                                <th scope="col">Keterangan</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                            <?php
                                                foreach ($daftar_barang as $daftar) { //ngabsen data
                                            ?>
                                            <tr>
                                                <td><?php echo $daftar->id; ?></td> 
                                                <td><img alt="Thumbnail image" src="<?php echo base_url();?>uploads/<?php echo $daftar->gambar?>" class="img-thumbnail" width="150" height="200"></td>
                                                <td><?php echo $daftar->kategori;?></td> 
                                                <td><?php echo $daftar->nama_barang; ?></td>
                                                <td>
                                                                                                        <!-- Trigger the modal with a button -->
                                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Detail</button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="myModal" role="dialog">
                                                        <div class="modal-dialog">
    
                                                        <!-- Modal content-->
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                              <h4 class="modal-title">Detail Stok : <?php echo $daftar->nama_barang; ?></h4>
                                                            </div>
                                                            <div class="modal-body">
                                                            <table class="table table-bordered">
                                                            <tr>
                                                                <th>S</th>
                                                                <th>M</th>
                                                                <th>L</th>
                                                                <th>XL</th>
                                                            </tr>
                                                            <tr>
                                                                <td><?php echo $daftar->s; ?></td>
                                                                <td><?php echo $daftar->m; ?></td>
                                                                <td><?php echo $daftar->l; ?></td>
                                                                <td><?php echo $daftar->xl; ?></td>
                                                            </tr>
                                                            </table>
                                                   
                                                            </div>
                                                            <div class="modal-footer">
                                                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                          
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><?php echo $daftar->berat; ?></td> 
                                                <td><?php echo $daftar->harga; ?></td>
                                                 <td><?php echo $daftar->deskripsi; ?></td> 
                                                <td>
                                                   <a href="<?php echo base_url();?>kelbar/delete_barang?id=<?php echo $daftar->id; ?>" class="btn btn-danger">delete</a>
                                                    <a href="<?php echo base_url();?>adminadmin/edit_barang?id=<?php echo $daftar->id; ?>" class="btn btn-success">edit</a>
                                                    
                                                </td>
                                            </tr>
                                            <?php
                                                }
                                            ?>   
                                    </table>
                            <form>
                            <button  class="btn btn-primary" formaction="<?php echo base_url();?>adminadmin/tambah_barang">Tambah Barang</button>
                             </form>
                       
                    
                     </div><!-- ./col -->
                </div>
                </div>
                <!-- /.row -->
			</div>
               <script>
            $(document).ready(function(){
                $('#myTable').DataTable();
            });
            </script>
            <!-- /.container-fluid -->