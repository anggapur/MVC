	<!-- Menu Awal -->
	<section class="big-menu">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="title"><?= $title?></h1>
					<div class="filterWrap floatRight">
						<button class="btn btn-default">Filter</button>
					</div>
				</div>
			</div>	
			<div class="row" id="dataContent">
				<?php foreach($listPetani as $key => $value) { ?>
				<div class="col-md-3">
					<div class="wrapperContent">
						<img src="<?= $this->base_url('assets/front/assets/logo.png');?>" class="img-big-menu">
						<h5><?= $value['NAMA'];?></h5>
						<p><?= $value['PROVINSI']." - ".$value['KOTA']?></p>
						<button class="ayoBeli">Lihat</button>
					</div>
				</div>			
				<?php  } ?>
			</div>
			<div class="row">
				<div class="col-md-12">
					<button class="btn btn-default" id="btnMuat">Muat Lebih Banyak</button>
				</div>
			</div>	
		</div>
	</section>
	<script type="text/javascript">
		var page = 2;
		var dataPerPage = 2;
		$(document).ready(function(){
			$('#btnMuat').click(function(){
				$.ajax({
					url : "<?= $this->base_url()?>"+"Home/getApiListPetani/"+page+"/"+dataPerPage,
					type : 'GET',
					dataType : 'JSON',
					success : function(data){
						$.each(data,function(index,item){
							console.log(item);
							html = '<div class="col-md-3">'+
									'<div class="wrapperContent">'+
										'<img src="<?= $this->base_url('assets/front/assets/logo.png');?>" class="img-big-menu">'+
										'<h5>'+item.NAMA+'</h5>'+
										'<p>'+item.PROVINSI+'-'+item.KOTA+'</p>'+
										'<button class="ayoBeli">Lihat</button>'+
									'</div>';
							$('#dataContent').append(html);

						});
					}
				});
				page++;
			});
		});
	</script>