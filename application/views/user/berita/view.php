<section>
        <div class="container">
            <div class="row">
            
                <div class="col-md-12 col-lg-8">
                    <img src="<?php echo base_url('assets/images/').$berita->gambar ?>" alt="<?php echo $title ?>">
                    <h3 class="mt-30"><b><?php echo $title ?></b></h3>
                    <ul class="list-li-mr-20 mtb-15">
                        <li>by <a href="#"><b><?php echo $berita->penulis ?></b></a></li>
                        <li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i> <?php echo $berita->tanggal ?></li>
                        <li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i><?php echo $berita->departemen ?></li>
                    </ul>
                    
                    <?php echo $berita->isi ?>
                    
                    <div class="float-left-right text-center mt-40 mt-sm-20">
                
                        <ul class="mb-30 list-a-bg-grey list-a-hw-radial-35 list-a-hvr-primary list-li-ml-5">
                            <li class="mr-10 ml-0">Share</li>
                            <li><a href="#"><i class="ion-social-whatsapp"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                        </ul>
                        
                    </div><!-- float-left-right -->
                
                    
                </div><!-- col-md-9 -->
                
                