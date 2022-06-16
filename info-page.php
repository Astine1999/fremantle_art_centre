<?php
    /*
    Template Name: Info page
    */
    ?>
<?php require_once('info_header.php'); ?>
      <section class= "container-fluid text-center">
        <div class="container bg-7">
<h2 class="title2"><?php the_field('infotagline'); ?></h2>
        </div> <!-- container -->
            <div class="row">
              <div class="col-md-6">
<p class="info3"><?php the_field('infopara'); ?>
</p> 
              </div> <!-- col -->
          <div class="col-md-6 img2">
            <img src="<?php the_field('infoimg');?>" alt="group of band members" class="img-responsive1">
          </div>
        </div> <!-- row -->
    </section>

    <section class="container-fluid bg-8">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="<?php the_field('infoimg2');?>" alt="twinklylightswithpeople" class="img-responsive3">
                </div>
                <!--col-->
                <div class="col-sm-6 info4">
                    <h2 class="infoartist"> <?php the_field('infoartist'); ?></h2>
                    <ul class="infolist">
                   <li><?php the_field('infodot1'); ?></li> 
                   <li><?php the_field('infodot2'); ?></li> 
                    <li><?php the_field('infodot3'); ?></li>
                    <li><?php the_field('infodot4'); ?></li>
                    <li><?php the_field('infodot5'); ?></li>
                    <li><?php the_field('infodot6'); ?></li>
                    <li><?php the_field('infodot7'); ?></li>
                    <li><?php the_field('infodot8'); ?></li>
                </ul>
                </div>
                <!--col-->
            </div>
            <!--row-->
        </div>
        <!--container-->
    </section>

    <section class="container-fluid maps text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="maps-title"> <?php the_field('infomap'); ?></h2>
                    <p class="maps-address"><?php the_field('infomapaddress'); ?></p>
                    <img  src="<?php the_field('mapimg1');?>" alt="map of FAC" class="img-map-responsive">
                </div>
                <!--col-->
                <div class="col-md-6">
                    <h2 class="parking-title"> <?php the_field('infoparking'); ?></h2>
                    <p class="parking-address"><?php the_field('infoparkingaddress'); ?></p>
                    <img  src="<?php the_field('parkingimg1');?>" alt="map of CPP parking" class="img-parking-responsive">
                </div>
                <!--col-->
            </div>
            <!--row-->
        </div>
        <!--container-->
        <a href="#" class="btn2 btn-info btn-lg booknow" role="button">Book now</a>
    </section>
    <?php get_footer();?>