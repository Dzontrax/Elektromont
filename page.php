<?php get_header(); ?>

<div class="container-fluid experience-banner">
        <div class="row">

                <div class="col-xl-6 col-xs-12 experience-text" >
                                
                                <span><h1>Iskustvo</h1></span><span><hr class="red-hr-devider"><p class="since" style="">Od 1999</p></span><br>
                                        <p>   <?php

if (have_posts()) :
   while (have_posts()) :
      the_post();
         the_content();
   endwhile;
endif;

?></p>
                                <div class="btn btn-primary" style="margin-left: 0;">Preuzmite katalog</div>
                                
                </div>

                <div class="col-xl-6 col-xs-12 experience-image">

                <!-- <img src="<?php// echo get_bloginfo( 'template_directory' ); ?>/assets/images/homeBannerImg.jpg" width="744px" height="430px"/> -->
                </div>
                
        </div>
</div>
<div class="row">
        <div class="container-fluid section-counter">

                <div class="row">
                        <div class="col-xl-3"><div class="conuter-box"><span class="big">18</span><p>Godina u poslu</p></div></div>
                        <div class="col-xl-3"><div class="conuter-box"><span class="big">35</span><p>Partnera u Srbiji</p></div></div>
                        <div class="col-xl-3"><div class="conuter-box">#<span class="big">1</span><p>U zemlji</p></div></div>
                        <div class="col-xl-3"><div class="conuter-box"><span class="big">264</span><p>Zavrsena projekta u Srbji</p></div></div>
                        

                        </div>
        
                </div>
        </div>
</div>


<div class="row section-titles">
        <div class="container-fluid ">

                <div class="row section-header">
                        <div class="col-xl-6 col-xs-12 section-header-title">
                                <h1 class="float-xl-left float-xs-left"><i class="far fa-clipboard"></i> Naši projekti</h1>
                        </div>
                        <div class="col-xl-6 col-xs-12 section-header-element">
                                <a class="nounderline svi-projekti float-xs-left float-xl-right" href="#">Vidi sve projekte</a>
                        </div>
                </div>
        </div>
</div>

       
        </div>
</div>
<hr>


<!-- MANSORY SECTION -->

<br>
<!--Content-->

  <div class="container-fluid">
    <div class="row">
            <div class="col-xl-8 col-xs-12">
                <!--First columnn-->
               <div class="row"> 
                        <!--Dynamic query listing posts from "cards" category-->
                        <?php 
                                $args = array(
                                'orderby'          => 'ID',
                                'order'            => 'DESC',
                                'posts_per_page'   => 4,
                                // 'category_name'  => 'cards'
                                );

                                // The Query
                                $query2 = new WP_Query( $args );

                                if ( $query2->have_posts() ) {

                                // The Loop
                                while ( $query2->have_posts() ) {
                                $query2->the_post();
                        ?>


                        <!--Auto generated columnn-->


                        <div class="col-lg-4 thumbnail">
                        
                                
                                <!--Card-->
                                <div class="card wow fadeIn" data-wow-delay="0.2s">
                                
                                        <!--Card image-->
                                        <div class="view overlay hm-white-slight">
                                                <img src="<?php echo the_post_thumbnail_url();?>" class="img-fluid" alt="">
                                                <a href="<?php echo get_permalink(); ?>">
                                               
                                                </a>

                                                
                                        </div>
                                        <!--/.Card image-->

                                        <!--Card content-->
                                        <div class="card-block">
                                                <!--Title-->
                                                <h4 class="card-title"><?php echo get_the_title(); ?></h4> 
                                                <!--Text-->
                                        </div> 
                                        <!--Card content-->

                                </div>
                                <!--/.Card-->
                                </div>
                                <!--/.Auto generated columnn-->
                                <?php
                                        } 
                                wp_reset_postdata();
                                } ?>
                                
              
                                </div> 
                        </div>
                </div>
                <!--/.Content-->
        </div>
   



<!-- PARTNERI SECTION -->

<div class="row section-titles">
        <div class="container-fluid ">

        <div class="row section-header">
        <div class="col-xl-6 col-xs-12 section-header-title">
                <h1 class="float-xl-left float-xs-left"><i class="far fa-check-circle"></i> Brendovi</h1>
        </div>
        <div class="col-xl-6 col-xs-12 section-header-element">
                <a class="nounderline svi-projekti float-xs-left float-xl-right" href="#"></i>Vidi sve brendove</a>
        </div>
</div>
        </div>
</div>
<hr>


        <div class="container-fluid">
<div class="row">
         <div class="col-xl-6 col-xs-12">
                <div class="row">
                        <div class="col-xl-6 col-xs-12 partner-logo">
                        <img class="img-fluid" src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/images/schneider_electric.jpg" width="100%"/>
                        </div>
                        
                        <div class="col-xl-6 col-xs-12 partner-logo">
                        <img class="img-fluid" src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/images/siemens.jpg" width="100%"/>

                        </div>
                </div>

                <div class="row">
                        <div class="col-xl-6 col-xs-12 partner-logo">
                        <img class="img-fluid" src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/images/obo-bettermann.jpg" width="100%"/>

                        
                        </div>

                        <div class="col-xl-6 col-xs-12 partner-logo">
                        <img class="img-fluid" src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/images/eaton.jpg" width="100%"/>

                        </div>
                </div>
         </div>     


         <div class="col-xl-6 col-xs-12">
                slajder
         </div>  
        </div>
</div>



<?php get_footer(); ?>