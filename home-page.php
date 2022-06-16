<?php
    /*
    Template Name: Home page
    */
    ?>
<?php require_once('header.php'); ?>
      <section class= "container-fluid  text-center">
        <div class="container bg-3">
        <h2><?php the_field('taglinetitle'); ?></h2><!--  custom field for the aboutme content-->
        </div> <!-- container -->
            <div class="row">
              <div class="col-md-6">
<p class="info"><?php the_field('welcometext'); ?></p>

              </div> <!-- col -->
          <div class="col-md-6 img1">
          <img class="img-fluid1" alt=dancing src="<?php the_field('img1welcome');?>">
          </div>
        </div> <!-- row -->
    </section>

    <section class= "container-fluid bg-4 text-center">
      <div class="container">
<h2 class="title2-5"><?php the_field('offertagline');?></h2>
<div class="row " >
  <div class="col-md-4">
    <img class="img-fluid" alt="music" src="<?php the_field('offerimg1');?>">
    <h5><?php the_field('offersubtag1');?></h5>
    <p class="pinfo"><?php the_field('offerpara1');?></p>
  </div> <!-- col -->
  <div class="col-md-4">
    <img class="img-fluid" alt="food" src="<?php the_field('offerimg2');?>"> 
    <h5><?php the_field('offersubtag2');?></h5>
    <p class="pinfo"><?php the_field('offerpara2');?></p>
  </div> <!-- col -->
  <div class="col-md-4">
    <img class="img-fluid" alt="paint" src="<?php the_field('offerimg3');?>">
    <h5><?php the_field('offersubtag3');?></h5>
    <p class="pinfo"><?php the_field('offerpara3');?></p>
  </div> <!-- col -->
</div> <!-- row -->
      </div> <!-- container -->
      <a href="<?php the_field('offerbutton');?>" class="btn btn-info btn-lg" role="button">Blog</a>
      </section>

      <section>
        <div class="container-fluid sign-up">
          <div class="container">
            <div class="row">

              <div class="col-md-6">
                <h2 class="tag">The largest <br>community of Music lovers yet!</h2>
                </div>

              <div class="col-md-6">
      <div class="signupFrm">
        <form action="form" class="form">
          <h2 class="title3">Sign up</h2>
    
          
          <div class="inputContainer">
            <input type="text" placeholder="email" id="input">
            <label for="email" class="label">Email</label>
          </div>
    
          <div class="inputContainer">
            <input type="text" placeholder="username" id="input">
            <label for="username" class="label">Username</label>
          </div>
    
          <div class="inputContainer">
            <input type="text" placeholder="password" id="input">
            <label for="passowrd" class="label">Password</label>
          </div>
    
          <div class="inputContainer">
            <input type="text" placeholder="confirm password" id="input">
            <label for="confirm" class="label">Confirm Password</label>
          </div>
    
          <input type="submit" class="submitBtn" value="Sign up">
        </form>
      </div>
        </div>
      </div>
    </div>
      </div>
        </section>
        <?php get_footer();?> 