<?php use app\providers\{Auth,Url,Alert,Formating}; ?>
	<section class="formLoginRegister">
		<div class="container">
			<div class="row">
				<?php
					Alert::getAlert('keranjang');
				?>
				<?php foreach($dataKeranjang as $val => $value) { ?>
				<div class="col-sm-6">
					<div class="col-sm-4">
						<div class="wrapperImage">
							<img src="<?= $this->base_url('assets/uploads/'.$value['BARANG_THUMBNAIL'])?>" class="img-responsive centerTranslate">
						</div>
					</div>
					<div class="col-sm-8">
						<table class="table">
							<tr>
								<td>Nama Barang</td>
								<td>: <?= $value['BARANG_NAMA']?></td>
							</tr>
							<tr>
								<td>Harga Barang</td>
								<td>: <?= Formating::moneyFormat($value['HARGA_SATUAN'])?> / <?= $value['SATUAN_NAMA']?></td>
							</tr>
							<tr>
								<td>Jumlah Pembelian</td>
								<td>: <?= $value['JUMLAH']." ".$value['SATUAN_NAMA']?></td>
							</tr>
							<tr>
								<td>Status Pengiriman</td>
								<td>: <?= ($value['STATUS_PEMBAYARAN'] == 0) ? "Belum Dibayar" : "Sudah Dibayar"; ?></td>
							</tr>
							<tr>
								<td>Status Pengiriman</td>
								<td>: <?= ($value['STATUS_PENGIRIMAN'] == 0) ? "Belum Dikirim" : "Sudah Dikirim"; ?></td>
							</tr>
							<tr>
								<td>Petani</td>
								<td>: <a href="<?= $this->base_url('Home/DetailPetani/'.$value['PETANI_ID']);?>"><?= $value['NAMA'];?></a></td>
							</tr>
						</table>
					</div>
				</div>
				<?php } ?>
			</div>				
		</div>
	</section>
