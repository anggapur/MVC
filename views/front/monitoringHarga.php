	<?php use app\providers\{Auth,Url,Alert,Formating}; ?>
	<!-- Menu Awal -->
	<section class="big-menu">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="title">Monitoring Harga</h1>
					<div class="filterWrap floatRight">
						<button class="btn btn-default">Filter</button>
					</div>
				</div>
			</div>	
			<div class="row">
				<table class="table table-bordered tabelMonitoring">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Harga Rata - Rata Minggu Ini</th>
							<th>Harga Rata - Rata Kemarin</th>
							<th>Harga Rata - Rata Hari Ini</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$i=1;
						foreach($listHarga as $key => $value) { ?>
						<tr>
							<td><?= $i++;?></td>
							<td><?= $value['BARANG_NAMA'];?></td>
							<td><?= Formating::moneyFormat($value['rataMingguIni']);?></td>
							<td><?= Formating::moneyFormat($value['rataKemarin']);?></td>
							<td><?= Formating::moneyFormat($value['rataHariIni']);?></td>
							<td><i class="fa fa-line-chart lineChart" aria-hidden="true"></i></td>
						</tr>		
						<?php } ?>				
					</tbody>
				</table>		
			</div>			
		</div>
	</section>
