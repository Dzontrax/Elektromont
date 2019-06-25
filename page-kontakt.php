<?php get_header(); ?>
<div class="content">
  <div class="row title">
        

        <div class="col-xl-6 col-xs-12 offset-xl-3 section-title">

            <div style="width: 40px; margin: 0 auto;">
                    <hr style="border-width: 3px; border-color: #D00224;">
            </div>

            <h5 style="color: #00274e;"><?php the_title(); ?></h5>

        </div>
        
  </div>
</div>

<!-- mapa -->

<div class="row">

                <div class="col-xl-12 col-xs-12">
                        
                        <?php echo do_shortcode('[wpgmza id="1"]'); ?>
                </div>
        

</div>

<!-- Kontakti -->
<div class="container">
<div class="row background" style="margin: 50px 0 100px 0;">

  <!-- begin col semirnica -->

  <div class="col-xl-6 col-xs-12">

    <div style="width: 30px;">
                  <hr style="border-width: 3px; border-color: #D00224;">
                  <h5 style="color: #00274e;font-weight: 700;">ŠEMIRNICA</h5>
    </div>

    <section>
                  <div class="kontakt-awesome-icon">
                    
                    <ul>
                     
                      <li>
                      <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <a href="#">Balkanska 108, 11276 Jakovo</a>
                      </li>
                      <li>
                        <i class="fa fa-phone"></i>
                        <p>+381 11 4281 347</p>
                      </li>
                      
                    </ul>
                  </div>

        </section>
        <img class="img-fluid rounded-circle center" src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/images/semirnica1920.jpg" width=""/>

  </div> 
  <!-- end col semirnica -->
  <!-- begin col direkcija -->
  <div class="col-xl-6 col-xs-12">

    <div style="width: 30px;">
                <hr style="border-width: 3px; border-color: #D00224;">
                <h5 style="color: #00274e;font-weight: 700;">DIREKCIJA</h5>
    </div>
    <section>
                  <div class="kontakt-awesome-icon">
                    
                    <ul>
                                        
                     <li>
                        <i class="fa fa-map-marker"></i>
                        <a href="#">Uroša Martinovića 14/3, 11070 Novi Beograd</a>
                      </li>               
                      <li>
                        <i class="fa fa-phone"></i>
                        <p>+381 11 4281 347</p>
                      </li>
                      
                    </ul>
                  </div>

        </section>
        <img class="img-fluid rounded-circle center" src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/images/semirnica1920.jpg"/>

  </div><!-- end col direkcija -->

  </div> <!-- end row -->
    
</div> <!-- end container -->



<?php get_footer(); ?>