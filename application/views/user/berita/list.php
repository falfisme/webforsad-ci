<section>
<div class="container">
	<div class="row">
	
		<div class="col-md-12 col-lg-8">
			
			<h4 class="p-title"><b><?php echo $title ?></b></h4>
			<div class="row">
			
			<?php foreach ($berita as $berita) { ?>
				
				<div class="col-sm-6">
					<img src="<?php echo base_url('assets/images/'.$berita->gambar) ?>" alt="">
					<h4 class="pt-20"><a href="<?php echo base_url('berita/view/'.$berita->id_berita) ?>"><b><?php echo $berita->judul ?></b></a></h4>
					<ul class="list-li-mr-20 pt-10 mb-30">
						<li class="color-lite-black">by <a href="#" class="color-black"><b><?php echo $berita->penulis ?></b></a>
						</li>
						<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i><?php echo $berita->tanggal ?></li>
						<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i><?php echo $berita->departemen ?></li>
					</ul>
				</div><!-- col-sm-6 -->
				
			<?php } ?>
				
			</div><!-- row -->
			
			<a class="dplay-block btn-brdr-primary mt-20 mb-md-50" href="#"><b>LOAD MORE</b></a>
		</div><!-- col-md-9 -->
		
		
