
    <div class="hero-wrap hero-wrap-2" style="background-image: url('<?=base_url()?>assets/frontoffice/images/lomba.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-5">
          	<p class="breadcrumbs mb-0"><span class="mr-3"><a href="index.html">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span>Lomba</span></p>
            <h1 class="mb-3 bread">Lomba</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row">
          <?php foreach($lomba as $l){ ?>
            <div class="col-md-4 ftco-animate">
              <div class="blog-entry">
                <a href="<?=base_url();?>lomba/<?=$l->lomba_slug?>" class="block-20" style="background-image: url('<?=base_url();?>assets/img/poster/<?=$l->lomba_gambar;?>');" alt="<?php 
                            if(strlen($l->lomba_judul) >70) {echo $stringCut = substr($l->lomba_judul, 0, 70)."...";}
                            else{echo $l->lomba_judul;}
                        ?>">
                </a>
                <div class="text d-flex py-4">
                  <div class="meta mb-3">
                    <div><a href="#"><?=$l->lomba_deadline;?></a></div>
                    <div><a href="#">Admin</a></div>
                    <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                  </div>
                  <div class="desc pl-3">
                    <h3 class="heading"><a href="#">
                    <?php 
                            if(strlen($l->lomba_judul) >70) {echo $stringCut = substr($l->lomba_judul, 0, 70)."...";}
                            else{echo $l->lomba_judul;}
                        ?>
                      </a></h3>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
          
        </div>
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

  