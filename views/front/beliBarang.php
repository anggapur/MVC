<?php use app\providers\{Auth,Url,Alert,Formating}; ?>
	<section class="formLoginRegister">
		<div class="container">
			<div class="row">
				<div class="col-ms-12 center" style="text-align: center;padding:30px 0px;">
					<h2>Detail Pembelian</h2>
				</div>
				<div class="col-sm-6">
					<table class="table">
						<tr>
							<td>Nama Produk </td>
							<td>:<?= $BARANG['BARANG_NAMA']?></td>
						</tr>
						<tr>
							<td>Harga</td>
							<td>:<?= Formating::moneyFormat($BARANG['HARGA_SATUAN'])."/".$BARANG['SATUAN_NAMA']?></td>
						</tr>
						<tr>
							<td>Tersisa</td>
							<td>:<?= ($BARANG['sisa'] == NULL) ? $BARANG['JUMLAH'] : $BARANG['sisa']; ?> <?= $BARANG['SATUAN_NAMA']; ?></td>
						</tr>
					</table>
				</div>
				<form method="POST" action="<?= $this->base_url('Home/SimpanPembelian')?>">
				<div class="col-sm-6">
					<div class="form-group">
						<label>Jumlah Pembelian (<?= $BARANG['SATUAN_NAMA']; ?>)</label>
						<input type="number" name="JUMLAH" value="<?= $JUMLAH?>" class="form-control" readonly>
						<input type="hidden" name="HARGA_SATUAN" value="<?= $BARANG['HARGA_SATUAN'];?>">
						<input type="hidden" name="HASILPANEN_ID" value="<?= $BARANG['HASILPANEN_ID'];?>">
						<input type="hidden" name="SATUAN_ID" value="<?= $BARANG['SATUAN_ID'];?>">
					</div>
					<div class="form-group">
						<label>Cara Pengiriman Barang </label>
						<select class="form-control" name="METODE_PENGIRIMAN">
							<option value="sendiri">Sendiri</option>
							<option value="diantar">Diantar</option>
						</select>
					</div>	
					<div class="form-group">
						<input type="submit" name="submit" value="Beli" class="btn btn-success">
					</div>
				</div>
				</form>	
			</div>				
		</div>
	</section>
	