<?php  get_header();?>

<!-- <div class="container">

    <div class="row title">
            

            <div class="col-xl-6 col-xs-12 offset-xl-3 section-title">

                            <div style="width: 40px; margin: 0 auto;">
                                    <hr style="border-width: 3px; border-color: #D00224;">
                            </div>

                            <h5 style="color: #00274e;">O NAMA</h5>

            
            </div>
    </div>


</div> -->


<?php 
      $car_args = array(
        'posts_per_page'   => 4,
        'post_type' => 'projekat',
        'category_name' => 'izdvojeni'

      );
     $the_query = new WP_query( $car_args );
    ?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">

  <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <li data-target="#myCarousel" data-slide-to="<?php echo $the_query->current_post; ?>" class="<?php if($the_query->current_post == 0): ?>active<?php endif; ?>"></li>
    <?php  endwhile; endif; ?>

    <?php rewind_posts(); ?>
  </ol>
  <div class="carousel-inner">

        <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <div class="carousel-item <?php if($the_query->current_post == 0): ?>active<?php endif; ?>"></li>
        
                <?php 
                
                    $thumbnail_id = get_post_thumbnail_id();
                    $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true ); 
                    $thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true);
                
                ?>
                <a href="<?php the_permalink(); ?>"><img class="thumbnail-size" src="<?php echo $thumbnail_url[0];?>" alt="<?php $thumbnail_meta['alt']; ?>"></a>
            
                <div class="container">
                    <div class="carousel-caption text-right animated slideInRight">
                    <h1 class=""><?php the_title(); ?></h1>
                    <p><?php// echo custom_field_excerpt(); ?></p>
                    <p><a class="btn btn-lg btn-danger animated slideInLeft" href="<?php the_permalink(); ?>" role="button">Pogledaj više</a></p>
                    </div>
                </div>
            </div>

        <?php endwhile; endif; ?>

  </div>
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-angle-left fa-3x"></i></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-angle-right fa-3x"></i></span>
    <span class="sr-only">Next</span>
  </a>
</div>

        <div class="row ko-smo-mi">

            <div class="col-xl-8 offset-xl-2 col-xs-12 ko-smo-mi-tekst">

                <?php if( dynamic_sidebar('ko-smo-mi')); ?>

            </div>
          

        </div>
                   
</div>

<section id="delatnostFirstPage" class="withBackgroundImage">
    <div class="container">
        <div class="row">
        
            <div class="col-xl-6 col-xs-12 offset-xl-3 section-title">
                
                <h5>Delatnost</h5>
                <div style="width: 40px; margin: 20px auto;">
                    <hr style="border-width: 3px; border-color: #D00224; margin-bottom: 50px;">
                </div>
                
            </div>
        </div>

        <div class="row">
                <?php 
                        $args = array(
                        
                            'posts_per_page'   => 4,
                            'category_name'  => 'delatnost'
                        );

                        // The Query
                        $query2 = new WP_Query( $args );

                        if ( $query2->have_posts() ) {

                        // The Loop
                        while ( $query2->have_posts() ) {
                        $query2->the_post();
                ?>
                <div class="col-xl-3 col-xs-12 card-cinjenice">

                                <!-- Card Light -->
                                <div class="card border-0">

                                        <!-- Card image -->
                                        <div class="view overlay">
                                        <img class="card-img-top" src="<?php echo the_post_thumbnail_url();?>" alt="Card image cap">
                                                            <a>
                                                                <div class="mask rgba-white-slight"></div>
                                                            </a>
                                                </div>
                                                

                                        <!-- Card content -->
                                        <div class="card-body card-body-onama">


                                        <!-- Title -->
                                        <a href="<?php the_permalink(); ?>"><h4 class="card-title card-title-onama"><?php echo get_the_title(); ?></h4></a>
                                        <div style="width: 30px;">
                    <hr style="border-width: 3px; border-color: #D00224;">
                </div>
                                        <!-- Text -->
                                        <p class="card-text"><?php the_excerpt(30); ?></p>
                                        <!-- Link -->


                                        </div>

                                        </div>
                                        <!-- Card Light -->

                </div>
                
                
                    
                    

                            
                        
                        <?php
                        
                                    } 
                                    wp_reset_postdata();
                                    } 
                        ?>
                            
                </div>
                    
        </div>

    </div>
</section>

<!-- BITNE RAZLIKE -->

<section>
        <div class="container-fluid" style="padding-top: 30px; height: auto; background-color:#F5F6F6;">

                    <div class="row">
                        
                        <div class="col-xl-6 col-xs-12 offset-xl-3 section-title">
                            
                            <h5>Osnovne vrednosti</h5>

                            <div style="width: 40px; margin: 0 auto;">
                                <hr style="border-width: 3px; border-color: #D00224;">
                            </div>

                            <h6 class="section-subtitle">Naša strategija</h6>

                        </div>

                    </div>

                    <div class="row row-strategija">
                        <div class="col-xl-6 col-xs-12 offset-xl-3">

                            <div class="row">
                                <?php 
                                        $args = array(                             
                                        'posts_per_page'   => 1,
                                        'name'  => 'inovacije'
                                        );

                                        // The Query
                                        $query2 = new WP_Query( $args );

                                        if ( $query2->have_posts() ) {

                                        // The Loop
                                        while ( $query2->have_posts() ) {
                                        $query2->the_post();
                                ?>
                                <div class="col-xl-2 col-xs-12">


                                    <div class="section-icon">
                                        <i class="far fa-building"></i>
                                    </div>
                                        
                                </div>
                                <div class="col-xl-9 col-xs-12 section-text">
                                    <h6><?php echo get_the_title(); ?></h6>
                                    <p><?php the_excerpt(); ?></p>
                                </div>

                                <?php
                                                } 
                                        wp_reset_postdata();
                                        } ?>
                            </div>

                    <div class="row">
                                <?php 
                                        $args = array(                             
                                        'posts_per_page'   => 1,
                                        'name'  => 'tehnologija'
                                        );

                                        // The Query
                                        $query2 = new WP_Query( $args );

                                        if ( $query2->have_posts() ) {

                                        // The Loop
                                        while ( $query2->have_posts() ) {
                                        $query2->the_post();
                                ?>
                                <div class="col-xl-2 col-xs-12">


                                    <div class="section-icon">
                                        <i class="fas fa-plug"></i>
                                    </div>
                                        
                                </div>
                                <div class="col-xl-9 col-xs-12 section-text">
                                    <h6><?php echo get_the_title(); ?></h6>
                                    <p><?php the_excerpt(); ?></p>
                                </div>

                                <?php
                                                } 
                                        wp_reset_postdata();
                                        } ?>
                            </div>

                            <div class="row">
                                <?php 
                                        $args = array(                             
                                        'posts_per_page'   => 1,
                                        'name'  => 'projektna-resenja'
                                        );

                                        // The Query
                                        $query2 = new WP_Query( $args );

                                        if ( $query2->have_posts() ) {

                                        // The Loop
                                        while ( $query2->have_posts() ) {
                                        $query2->the_post();
                                ?>
                                <div class="col-xl-2 col-xs-12">


                                    <div class="section-icon">
                                        <i class="fas fa-pencil-alt"></i>
                                    </div>
                                        
                                </div>
                                <div class="col-xl-9 col-xs-12 section-text">
                                    <h6><?php echo get_the_title(); ?></h6>
                                    <p><?php the_excerpt(); ?></p>
                                </div>

                                <?php
                                                } 
                                        wp_reset_postdata();
                                        } ?>
                            </div>      
                                
                                

                            
                        
                        

                            
                        </div>
                    
                    </div>

        </div>
</section>
<!-- Work with us -->
<div class="container-fluid section-work-with-us">
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

            <div class="row">

                <div class="col-xl-6 col-xs-12 offset-xl-3 section-title">

    
                    <h5 style="color: #000;">SARADNJA SA NAMA</h5>
                        <div style="width: 40px; margin: 0 auto;">
                            <hr style="border-width: 3px; border-color: #D00224;">
                        </div>
                    <h6 class="section-subtitle">Širimo kompanijsku mrežu</h6>
                    <p>Otvoreni smo za saradnju sa drugim kompanijama iz branše! Možemo ostvariti zajednički interes 
                    i ostvariti uspešno partnerstvo
                    </p>
                    
                    <button type="button" class="btn btn-danger btn-work-with-us"><a style="color:#fff; " href="http://elektromont.dansprom.rs/kontakt/"><i class="far fa-envelope"></i> Kontaktirajte nas</a></button>

                 </div>
                
            </div>

</div>
<section class="nasi-klijenti">
    <div class="container">
    
                        
                        <h5 class="section-title">NAŠI KLIJENTI</h5>

                            <div style="width: 40px; margin: 0 auto;">
                                <hr style="border-width: 3px; border-color: #D00224;">
                            </div>

                        <h6 class="section-subtitle">Saradnja koja traje</h6>
                    
                        <?php // echo do_shortcode('[gallery id="66"]'); ?>
                        <?php if ( function_exists( 'envira_gallery' ) ) { envira_gallery( 'nasi-klijenti', 'slug' ); } ?>
                
    </div>
</section>
<a id="back-to-top" href="#" class="btn btn-danger btn-lg back-to-top" role="button" title="" data-placement="left" style="display: block;">
<i class="fas fa-chevron-up"></i></a>
<?php get_footer(); ?>