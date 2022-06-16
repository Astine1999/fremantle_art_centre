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
                          <img class="img-responsive" src="<?php the_field('sectionimg1');?>" alt="abba">
                          <div class=col-9>
                              <a class="event-title" href="<?php the_field('title1');?>">ABBA Returns</a>
                              <p class="event-time"><?php the_field('sectiontime1');?></p>
                          </div>
  
                          <div class=col-3>
                              <p class="date1"><strong><?php the_field('sectiondate1');?></strong></p>
                              <p class="month"><?php the_field('sectionmonth1');?></p>
                          </div>
                      </div> <!-- row -->
                  </div> <!-- -col-md-3 -->
  
                  <div class=col-sm-3>
                      <div class="row">
                          <img class="img-responsive" src="<?php the_field('sectionimg2');?>" alt="insc">
                          <div class=col-9>
                              <a class="event-title" href="<?php the_field('title2');?>">INSC</a>
                              <p class="event-time"><?php the_field('sectiontime2');?></p>
                          </div>

                          <div class=col-3>
                            <p class="date2"><strong><?php the_field('sectiondate2');?></strong></p>
                            <p class="month"><?php the_field('sectionmonth2');?></p>
                          </div>
                      </div> <!-- row -->
                  </div> <!-- -col-md-3 -->

                  <div class=col-sm-3>
                      <div class="row">
                          <img class="img-responsive" src="<?php the_field('sectionimg3');?>"  alt="80'snight">
                          <div class=col-9>
                              <a class="event-title" href="<?php the_field('title3');?>">80's Night</a>
                              <p class="event-time"><?php the_field('sectiontime3');?></p>
                          </div>

                          <div class=col-3>
                            <p class="date3"><strong><?php the_field('sectiondate3');?></strong></p>
                            <p class="month"><?php the_field('sectionmonth3');?></p>
                          </div>
                      </div> <!-- row -->
                  </div> <!-- -col-md-3 -->

                  <div class=col-sm-3>
                      <div class="row">
                          <img class="img-responsive" src="<?php the_field('sectionimg4');?>"  alt="undertow">
                          <div class=col-9>
                              <a class="event-title" href="<?php the_field('title4');?>">Under<br>tow</a>
                              <p class="event-time"><?php the_field('sectiontime4');?></p>
                          </div>
                          <div class=col-3>
                            <p class="date4"> <strong><?php the_field('sectiondate4');?></strong></p>
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
                        <img class="img-responsive" src="<?php the_field('sectionimg5');?>"  alt="fanta">
                        <div class=col-9>
                            <a class="event-title" href="<?php the_field('title5');?>">Fanta Kits</a>
                            <p class="event-time"><?php the_field('sectiontime5');?></p>
                        </div>

                        <div class=col-3>
                            <p class="date5"><strong><?php the_field('sectiondate5');?></strong></p>
                            <p class="month"><?php the_field('sectionmonth5');?></p>
                        </div>
                    </div> <!-- row -->
                </div> <!-- -col-md-3 -->

                <div class=col-sm-3>
                    <div class="row">
                        <img class="img-responsive" src="<?php the_field('sectionimg6');?>"  alt="friday">
                        <div class=col-9>
                            <a class="event-title" href="<?php the_field('title6');?>">Friday Story</a>
                            <p class="event-time"><?php the_field('sectiontime6');?></p>
                        </div>

                        <div class=col-3>
                          <p class="date6"><strong><?php the_field('sectiondate6');?></strong></p>
                          <p class="month"><?php the_field('sectionmonth6');?></p>
                        </div>
                    </div> <!-- row -->
                </div> <!-- -col-md-3 -->

                <div class=col-sm-3>
                    <div class="row">
                        <img class="img-responsive" src="<?php the_field('sectionimg7');?>"  alt="mosh">
                        <div class=col-9>
                            <a class="event-title" href="<?php the_field('title7');?>">Mosh Live</a>
                            <p class="event-time"><?php the_field('sectiontime7');?></p>
                        </div>

                        <div class=col-3>
                          <p class="date7"><strong><?php the_field('sectiondate7');?></strong></p>
                          <p class="month"><?php the_field('sectionmonth7');?></p>
                        </div>
                    </div> <!-- row -->
                </div> <!-- -col-md-3 -->

                <div class=col-sm-3>
                    <div class="row">
                        <img class="img-responsive" src="<?php the_field('sectionimg8');?>"  alt="acdc">
                        <div class=col-9>
                            <a class="event-title" href="<?php the_field('title8');?>">ACDC</a>
                            <p class="event-time"><?php the_field('sectiontime8');?></p>
                        </div>
                        <div class=col-3>
                          <p class="date8"> <strong><?php the_field('sectiondate8');?></strong></p>
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
                        <img class="img-responsive" src="<?php the_field('sectionimg9');?>"  alt="xa xiu">
                        <div class=col-9>
                            <a class="event-title" href="<?php the_field('title9');?>">Xa Xiu</a>
                            <p class="event-time"><?php the_field('sectiontime9');?></p>
                        </div>

                        <div class=col-3>
                            <p class="date9"><strong><?php the_field('sectiondate9');?></strong></p>
                            <p class="month"><?php the_field('sectionmonth9');?></p>
                        </div>
                    </div> <!-- row -->
                </div> <!-- -col-md-3 -->

                <div class=col-sm-3>
                    <div class="row">
                        <img class="img-responsive" src="<?php the_field('sectionimg10');?>"  alt="farmers">
                        <div class=col-9>
                            <a class="event-title" href="<?php the_field('title10');?>">Farmers Live</a>
                            <p class="event-time"><?php the_field('sectiontime10');?></p>
                        </div>

                        <div class=col-3>
                          <p class="date10"><strong><?php the_field('sectiondate10');?></strong></p>
                          <p class="month"><?php the_field('sectionmonth10');?></p>
                        </div>
                    </div> <!-- row -->
                </div> <!-- -col-md-3 -->

                <div class=col-sm-3>
                    <div class="row">
                        <img class="img-responsive" src="<?php the_field('sectionimg11');?>"  alt="manny">
                        <div class=col-9>
                            <a class="event-title" href="<?php the_field('title11');?>">Manny Event</a>
                            <p class="event-time"><?php the_field('sectiontime11');?></p>
                        </div>

                        <div class=col-3>
                          <p class="date11"><strong><?php the_field('sectiondate11');?></strong></p>
                          <p class="month"><?php the_field('sectionmonth11');?></p>
                        </div>
                    </div> <!-- row -->
                </div> <!-- -col-md-3 -->

                <div class=col-sm-3>
                    <div class="row">
                        <img class="img-responsive" src="<?php the_field('sectionimg12');?>"  alt="ruby">
                        <div class=col-9>
                            <a class="event-title" href="<?php the_field('title12');?>">Ruby Parade</a>
                            <p class="event-time"><?php the_field('sectiontime12');?></p>
                        </div>
                        <div class=col-3>
                          <p class="date12"> <strong><?php the_field('sectiondate12');?></strong></p>
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
                      <img class="img-responsive" src="<?php the_field('sectionimg13');?>"  alt="live piano">
                      <div class=col-9>
                          <a class="event-title" href="<?php the_field('title13');?>">Live Piano</a>
                          <p class="event-time"><?php the_field('sectiontime13');?></p>
                      </div>

                      <div class=col-3>
                          <p class="date13"><strong><?php the_field('sectiondate13');?></strong></p>
                          <p class="month"><?php the_field('sectionmonth13');?></p>
                      </div>
                  </div> <!-- row -->
              </div> <!-- -col-md-3 -->

              <div class=col-sm-3>
                  <div class="row">
                      <img class="img-responsive" src="<?php the_field('sectionimg14');?>"  alt="stories">
                      <div class=col-9>
                          <a class="event-title" href="<?php the_field('title14');?>">Story Time</a>
                          <p class="event-time"><?php the_field('sectiontime14');?></p>
                      </div>

                      <div class=col-3>
                        <p class="date14"><strong><?php the_field('sectiondate14');?></strong></p>
                        <p class="month"><?php the_field('sectionmonth14');?></p>
                      </div>
                  </div> <!-- row -->
              </div> <!-- -col-md-3 -->

              <div class=col-sm-3>
                  <div class="row">
                      <img class="img-responsive" src="<?php the_field('sectionimg15');?>"  alt="insc">
                      <div class=col-9>
                          <a class="event-title" href="<?php the_field('title15');?>">INSC</a>
                          <p class="event-time"><?php the_field('sectiontime15');?></p>
                      </div>

                      <div class=col-3>
                        <p class="date15"><strong><?php the_field('sectiondate15');?></strong></p>
                        <p class="month"><?php the_field('sectionmonth15');?></p>
                      </div>
                  </div> <!-- row -->
              </div> <!-- -col-md-3 -->

              <div class=col-sm-3>
                  <div class="row">
                      <img class="img-responsive" src="<?php the_field('sectionimg16');?>"  alt="dmas">
                      <div class=col-9>
                          <a class="event-title" href="<?php the_field('title16');?>">DMAS Music</a>
                          <p class="event-time"><?php the_field('sectiontime16');?></p>
                      </div>
                      <div class=col-3>
                        <p class="date16"> <strong><?php the_field('sectiondate16');?></strong></p>
                        <p class="month"><?php the_field('sectionmonth16');?></p>
                      </div>
                  </div> <!-- row -->
              </div> <!-- -col-md-3 -->
          </div> <!-- row -->
      </div> <!-- container -->
  </section><!-- fluid ontainer -->
  <?php get_footer();?> 