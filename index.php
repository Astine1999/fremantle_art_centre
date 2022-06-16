<?php get_header();?>   <!--  Tells WordPress to include header.php -->
      <section class= "container-fluid  text-center">
        <div class="container bg-3">
<h2 class="title2">Welcome!</h2>
        </div> <!-- container -->
            <div class="row">
              <div class="col-md-6">
<p class="info">Welcome to the Fremantle Art Centre (FAC). We are situated at Walyalup on Whadjuk Nyoongar Boodjar. 
  We are here to bring the community of Perth vibrant and rich entertainment in the form
  of music, events and markets. All of these locally sourced around suburbs in Perth. FAC’s exhibitions program presents 
  and commissions work by artists practicing locally, nationally and globally, offering a diverse selection of contemporary art. 
  All FAC exhibitions are free to visit to ensure our visual arts program is accessible and inclusive of everyone.
</p> 
              </div> <!-- col -->
          <div class="col-md-6 img1">
            <img src="http://206.189.45.97/~mesh22/sub1/wp-content/themes/Fremantle_art_centre/fremantle_art_centre/images/img1.png"class="img-fluid1" alt="dancing">
          </div>
        </div> <!-- row -->
    </section>

    <section class= "container-fluid bg-4 text-center">
      <div class="container">
<h2 class="title2-5">What we offer</h2>
<div class="row " >
  <div class="col-md-4">
    <img src="http://206.189.45.97/~mesh22/sub1/wp-content/themes/Fremantle_art_centre/fremantle_art_centre/images/music.png" class="img-fluid" alt="music">
    <h5> Music</h5>
    <p class="pinfo">Music for all your needs and desires!!</p>
  </div> <!-- col -->
  <div class="col-md-4">
    <img src="http://206.189.45.97/~mesh22/sub1/wp-content/themes/Fremantle_art_centre/fremantle_art_centre/images/market.png" class="img-fluid" alt="food"> 
    <h5> Market</h5>
    <p class="pinfo">If you need food and drinks, we have you covered.</p>
  </div> <!-- col -->
  <div class="col-md-4">
    <img src="http://206.189.45.97/~mesh22/sub1/wp-content/themes/Fremantle_art_centre/fremantle_art_centre/images/art.png" class="img-fluid" alt="paint">
    <h5> Art</h5>
    <p class="pinfo">We have a wide variety of art by local artists up for display</p>
  </div> <!-- col -->
</div> <!-- row -->
      </div> <!-- container -->
      <a href="blog.html" class="btn btn-info btn-lg" role="button">Blog</a>
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
        <?php get_footer();?>   <!-- Tells WordPress to include footer.php   -->