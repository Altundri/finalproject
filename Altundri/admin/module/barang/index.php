 <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-12 main-chart">
						<h3>CHECK ANALISA PREPARASI DAN LABORATORIUM</h3>
						<br/>
						
						<?php if(isset($_GET['success'])){?>
						<div class="alert alert-success">
							<p>Tambah Data Berhasil !</p>
						</div>
						<?php }?>
						<?php if(isset($_GET['remove'])){?>
						<div class="alert alert-danger">
							<p>Hapus Data Berhasil !</p>
						</div>
						<?php }?>
						
						<?php 
							$sql=" select * from barang where stok <= 3";
							$row = $config -> prepare($sql);
							$row -> execute();
							$r = $row -> rowCount();
							
						?>	
						

						<!-- Trigger the modal with a button -->
						
						<button type="button" class="btn btn-primary btn-md pull-right" data-toggle="modal" data-target="#myModal">
							<i class="fa fa-plus"></i> Insert Data</button>
						
						<a href="index.php?page=barang" style="margin-right :0.5pc;" 
							class="btn btn-success btn-md pull-right">
							<i class="fa fa-refresh"></i> Refresh Data</a>
						<div class="clearfix"></div>
						<br/>
						
						<!-- view barang -->	
						<div class="modal-view">
							<table class="table table-bordered table-striped" >
								<thead>
									<tr style="background:#DFF0D8;color:#333;">
										<th><i>Air Dry Loss</i></th>
										<th></th>
									</tr>
								</thead>
								<tbody>
								<?php 
								$hasil = $lihat -> barang();
								foreach($hasil as $isi) {
								?>
									<tr>
										<td><?php echo $isi['nama_barang'];?></td>
										<td><?php echo $isi['deskripsi'];?></td>
								<?php } ?>		
								</tbody>
								<tfoot>
									<tr>
										<th style="color : red;" >%ADL </td>
										<th><?php echo $totalStok;?></td>
										
									</tr>
								</tfoot>
							</table>
						</div>
						<div class="clearfix" style="margin-top:7pc;"></div>

						<div class="modal-view">
							<table class="table table-bordered table-striped" >
								<thead>
									<tr style="background:#DFF0D8;color:#333;">
										<th><i>Air Dry Loss</i></th>
										<th></th>
									</tr>
								</thead>
								<tbody>
								<?php 
								$hasil = $lihat -> barang();
								foreach($hasil as $isi) {
								?>
									<tr>
										<td><?php echo $isi['nama_barang'];?></td>
										<td><?php echo $isi['deskripsi'];?></td>
								<?php } ?>		
								</tbody>
								<tfoot>
									<tr>
										<th style="color : red;" >%ADL </td>
										<th><?php echo $totalStok;?></td>
										
									</tr>
								</tfoot>
							</table>
						</div>
						<div class="clearfix" style="margin-top:7pc;"></div>
					<!-- end view barang -->
					<!-- tambah barang MODALS-->
						<!-- Modal -->
					
						<div id="myModal" class="modal fade" role="dialog">
							<div class="modal-dialog">
								<!-- Modal content-->
								<div class="modal-content" style=" border-radius:0px;">
								<div class="modal-header" style="background:#285c64;color:#fff;">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title"><i class="fa fa-plus"></i> Tambah Barang</h4>
								</div>										
								<form action="fungsi/tambah/tambah.php?barang=tambah" method="POST">
									<div class="modal-body">
								
										<table class="table table-striped bordered">
											
											<?php
												$format = $lihat -> barang_id();
											?>
											<tr>
												<td>ID Barang</td>
												<td><input type="text" readonly="readonly" required value="<?php echo $format;?>" class="form-control"  name="id"></td>
											</tr>
											<tr>
												<td>Kategori</td>
												<td>
												<select name="kategori" class="form-control" required>
													<option value="#">Pilih Kategori</option>
													<?php  $kat = $lihat -> kategori(); foreach($kat as $isi){ 	?>
													<option value="<?php echo $isi['id_kategori'];?>"><?php echo $isi['nama_kategori'];?></option>
													<?php }?>
												</select>
												</td>
											</tr>
											<tr>
												<td>Nama Barang</td>
												<td><input type="text" placeholder="Nama Barang" required class="form-control" name="nama"></td>
											</tr>
											<tr>
												<td>Deskripsi Barang</td>
												<td><input type="text" placeholder="Deskripsi Barang" required class="form-control" name="deskripsi"></td>
											</tr>
											<tr>
												<td>Warna Barang</td>
												<td><input type="text" placeholder="Warna Barang" required class="form-control"  name="warna"></td>
											</tr>
											<tr>
												<td>Harga Beli</td>
												<td><input type="number" placeholder="Harga beli" required class="form-control" name="beli"></td>
											</tr>
											<tr>
												<td>Harga Jual</td>
												<td><input type="number" placeholder="Harga Jual" required class="form-control"  name="jual"></td>
											</tr>
											<tr>
												<td>Stok</td>
												<td><input type="number" required Placeholder="Stok" class="form-control"  name="stok"></td>
											</tr>
											<tr>
												<td>Tanggal Input</td>
												<td><input type="" required readonly="readonly" class="form-control" value="<?php echo  date("Y-m-d");?>" name="tgl_input"></td>
											</tr>
										</table>
									</div>
									<div class="modal-footer">
										<button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Insert Data</button>
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								</form>
							</div>
						</div>
						
					</div>
              	</div>
          	</section>
      	</section>
	
