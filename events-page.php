<?php
    /*
    Template Name: Events page
    */
    ?>
<?php require_once('events_header.php'); ?>
<section class="container-fluid">
        <div class="container">
          <h2 class="events-title text-center"> <?php the_field('sectiontagline');?></h2>
          <p class="events-subpara text-center"> <?php the_field('sectiontaglinepara');?></p>
        </div>
      </section>

      <section class="events-imgs-container-fluid">
          <div class="container">
              <div class="row">

                  <div class=col-sm-3>
                      <div class="row">
                          <img class="img-responsive" src="<?php the_field('sectionimg1');?>">
                          <div class=col-9>
                              <a class="event-title" href="<?php the_field('title1');?>">ABBA Returns</a>
                              <p class="event-time"><?php the_field('sectiontime1');?></p>
                          </div>
  
                          <div class=col-3>
                              <p class="date1"><b><?php the_field('sectiondate1');?></b></p>
                              <p class="month"><?php the_field('sectionmonth1');?></p>
                          </div>
                      </div> <!-- row -->
                  </div> <!-- -col-md-3 -->
  
                  <div class=col-sm-3>
                      <div class="row">
                          <img class="img-responsive" src="<?php the_field('sectionimg2');?>">
                          <div class=col-9>
                              <a class="event-title" href="<?php the_field('title2');?>">INSC</a>
                              <p class="event-time"><?php the_field('sectiontime2');?></p>
                          </div>

                          <div class=col-3>
                            <p class="date2"><b><?php the_field('sectiondate2');?></b></p>
                            <p class="month"><?php the_field('sectionmonth2');?></p>
                          </div>
                      </div> <!-- row -->
                  </div> <!-- -col-md-3 -->

                  <div class=col-sm-3>
                      <div class="row">
                          <img class="img-responsive" src="<?php the_field('sectionimg3');?>">
                          <div class=col-9>
                              <a class="event-title" href="<?php the_field('title3');?>">80's Night</a>
                              <p class="event-time"><?php the_field('sectiontime3');?></p>
                          </div>

                          <div class=col-3>
                            <p class="date3"><b><?php the_field('sectiondate3');?></b></p>
                            <p class="month"><?php the_field('sectionmonth3');?></p>
                          </div>
                      </div> <!-- row -->
                  </div> <!-- -col-md-3 -->

                  <div class=col-sm-3>
                      <div class="row">
                          <img class="img-responsive" src="<?php the_field('sectionimg4');?>">
                          <div class=col-9>
                              <a class="event-title" href="<?php the_field('title4');?>">Under<br>tow</a>
                              <p class="event-time"><?php the_field('sectiontime4');?></p>
                          </div>
                          <div class=col-3>
                            <p class="date4"> <b><?php the_field('sectiondate4');?></b></p>
                            <p class="month"><?php the_field('sectionmonth4');?></p>
                          </div>
                      </div> <!-- row -->
                  </div> <!-- -col-md-3 -->
              </div> <!-- row -->
          </div> <!-- container -->
      </section><!-- fluid ontainer -->

      <!--section 2-->
      <section class="events-imgs-container-fluid">
        <div class="container">
            <div class="row">

                <div class=col-sm-3>
                    <div class="row">
                        <img class="img-responsive" src="<?php the_field('sectionimg5');?>">
                        <div class=col-9>
                            <a class="event-title" href="<?php the_field('title5');?>">Fanta Kits</a>
                            <p class="event-time"><?php the_field('sectiontime5');?></p>
                        </div>

                        <div class=col-3>
                            <p class="date5"><b><?php the_field('sectiondate5');?></b></p>
                            <p class="month"><?php the_field('sectionmonth5');?></p>
                        </div>
                    </div> <!-- row -->
                </div> <!-- -col-md-3 -->

                <div class=col-sm-3>
                    <div class="row">
                        <img class="img-responsive" src="<?php the_field('sectionimg6');?>">
                        <div class=col-9>
                            <a class="event-title" href="<?php the_field('title6');?>">Friday Story</a>
                            <p class="event-time"><?php the_field('sectiontime6');?></p>
                        </div>

                        <div class=col-3>
                          <p class="date6"><b><?php the_field('sectiondate6');?></b></p>
                          <p class="month"><?php the_field('sectionmonth6');?></p>
                        </div>
                    </div> <!-- row -->
                </div> <!-- -col-md-3 -->

                <div class=col-sm-3>
                    <div class="row">
                        <img class="img-responsive" src="<?php the_field('sectionimg7');?>">
                        <div class=col-9>
                            <a class="event-title" href="<?php the_field('title7');?>">Mosh Live</a>
                            <p class="event-time"><?php the_field('sectiontime7');?></p>
                        </div>

                        <div class=col-3>
                          <p class="date7"><b><?php the_field('sectiondate7');?></b></p>
                          <p class="month"><?php the_field('sectionmonth7');?></p>
                        </div>
                    </div> <!-- row -->
                </div> <!-- -col-md-3 -->

                <div class=col-sm-3>
                    <div class="row">
                        <img class="img-responsive" src="<?php the_field('sectionimg8');?>">
                        <div class=col-9>
                            <a class="event-title" href="<?php the_field('title8');?>">ACDC</a>
                            <p class="event-time"><?php the_field('sectiontime8');?></p>
                        </div>
                        <div class=col-3>
                          <p class="date8"> <b><?php the_field('sectiondate8');?></b></p>
                          <p class="month"><?php the_field('sectionmonth8');?></p>
                        </div>
                    </div> <!-- row -->
                </div> <!-- -col-md-3 -->
            </div> <!-- row -->
        </div> <!-- container -->
    </section><!-- fluid ontainer -->

    <!--section 3-->
    <section class="container-fluid">
      <div class="container">
        <p class="subpara text-center"> <?php the_field('sectiontaglinepara1');?></p>
      </div>
    </section>

    <section class="events-imgs-container-fluid">
        <div class="container">
            <div class="row">

                <div class=col-sm-3>
                    <div class="row">
                        <img class="img-responsive" src="<?php the_field('sectionimg9');?>">
                        <div class=col-9>
                            <a class="event-title" href="<?php the_field('title9');?>">Xa Xiu</a>
                            <p class="event-time"><?php the_field('sectiontime9');?></p>
                        </div>

                        <div class=col-3>
                            <p class="date9"><b><?php the_field('sectiondate9');?></b></p>
                            <p class="month"><?php the_field('sectionmonth9');?></p>
                        </div>
                    </div> <!-- row -->
                </div> <!-- -col-md-3 -->

                <div class=col-sm-3>
                    <div class="row">
                        <img class="img-responsive" src="<?php the_field('sectionimg10');?>">
                        <div class=col-9>
                            <a class="event-title" href="<?php the_field('title10');?>">Farmers Live</a>
                            <p class="event-time"><?php the_field('sectiontime10');?></p>
                        </div>

                        <div class=col-3>
                          <p class="date10"><b><?php the_field('sectiondate10');?></b></p>
                          <p class="month"><?php the_field('sectionmonth10');?></p>
                        </div>
                    </div> <!-- row -->
                </div> <!-- -col-md-3 -->

                <div class=col-sm-3>
                    <div class="row">
                        <img class="img-responsive" src="<?php the_field('sectionimg11');?>">
                        <div class=col-9>
                            <a class="event-title" href="<?php the_field('title11');?>">Manny Event</a>
                            <p class="event-time"><?php the_field('sectiontime11');?></p>
                        </div>

                        <div class=col-3>
                          <p class="date11"><b><?php the_field('sectiondate11');?></b></p>
                          <p class="month"><?php the_field('sectionmonth11');?></p>
                        </div>
                    </div> <!-- row -->
                </div> <!-- -col-md-3 -->

                <div class=col-sm-3>
                    <div class="row">
                        <img class="img-responsive" src="<?php the_field('sectionimg12');?>">
                        <div class=col-9>
                            <a class="event-title" href="<?php the_field('title12');?>">Ruby Parade</a>
                            <p class="event-time"><?php the_field('sectiontime12');?></p>
                        </div>
                        <div class=col-3>
                          <p class="date12"> <b><?php the_field('sectiondate12');?></b></p>
                          <p class="month"><?php the_field('sectionmonth12');?></p>
                        </div>
                    </div> <!-- row -->
                </div> <!-- -col-md-3 -->
            </div> <!-- row -->
        </div> <!-- container -->
    </section><!-- fluid ontainer -->

    <!--section 4-->
    <section class="events-imgs-container-fluid">
      <div class="container">
          <div class="row">

              <div class=col-sm-3>
                  <div class="row">
                      <img class="img-responsive" src="<?php the_field('sectionimg13');?>">
                      <div class=col-9>
                          <a class="event-title" href="<?php the_field('title13');?>">Live Piano</a>
                          <p class="event-time"><?php the_field('sectiontime13');?></p>
                      </div>

                      <div class=col-3>
                          <p class="date13"><b><?php the_field('sectiondate13');?></b></p>
                          <p class="month"><?php the_field('sectionmonth13');?></p>
                      </div>
                  </div> <!-- row -->
              </div> <!-- -col-md-3 -->

              <div class=col-sm-3>
                  <div class="row">
                      <img class="img-responsive" src="<?php the_field('sectionimg14');?>">
                      <div class=col-9>
                          <a class="event-title" href="<?php the_field('title14');?>">Story Time</a>
                          <p class="event-time"><?php the_field('sectiontime14');?></p>
                      </div>

                      <div class=col-3>
                        <p class="date14"><b><?php the_field('sectiondate14');?></b></p>
                        <p class="month"><?php the_field('sectionmonth14');?></p>
                      </div>
                  </div> <!-- row -->
              </div> <!-- -col-md-3 -->

              <div class=col-sm-3>
                  <div class="row">
                      <img class="img-responsive" src="<?php the_field('sectionimg15');?>">
                      <div class=col-9>
                          <a class="event-title" href="<?php the_field('title15');?>">INSC</a>
                          <p class="event-time"><?php the_field('sectiontime15');?></p>
                      </div>

                      <div class=col-3>
                        <p class="date15"><b><?php the_field('sectiondate15');?></b></p>
                        <p class="month"><?php the_field('sectionmonth15');?></p>
                      </div>
                  </div> <!-- row -->
              </div> <!-- -col-md-3 -->

              <div class=col-sm-3>
                  <div class="row">
                      <img class="img-responsive" src="<?php the_field('sectionimg16');?>">
                      <div class=col-9>
                          <a class="event-title" href="<?php the_field('title16');?>">DMAS Music</a>
                          <p class="event-time"><?php the_field('sectiontime16');?></p>
                      </div>
                      <div class=col-3>
                        <p class="date16"> <b><?php the_field('sectiondate16');?></b></p>
                        <p class="month"><?php the_field('sectionmonth16');?></p>
                      </div>
                  </div> <!-- row -->
              </div> <!-- -col-md-3 -->
          </div> <!-- row -->
      </div> <!-- container -->
  </section><!-- fluid ontainer -->
  <?php get_footer();?> 