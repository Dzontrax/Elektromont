<?php 
   /*
   
   Template name: Preuzimanja
   
   */
?>

<?php get_header();?>
<div class="jumbotron delatnost">

    <img src="<?php bloginfo('template_url')?>/assets/images/.jpg">

</div>

<div class="container" style="padding-left: 0; padding-right: 0;">
        <div class="row title">
            

            <div class="col-xl-6 col-xs-12 offset-xl-3 section-title">

                            <div style="width: 40px; margin: 0 auto;">
                                    <hr style="border-width: 3px; border-color: #D00224;">
                            </div>

                            <h5 style="color: #00274e;"><?php echo the_title(); ?></h5>

            
            </div>
            
        </div>
</div>
<div class="container-fluid" style="margin:0 -15px;">
        <div class="row">
           
            <div class="col-xl-8 col-xs-12"><?php
            the_post_thumbnail( 'preuzimanja', array(
              'alt' => 'Responsive image',
              'class' => 'img-fluid'
          ) );
                   ?> 
            </div>

            <div class="col-xl-4 col-xs-12 text-left">

               

                <h5>Preuzmite dokumenta</h5>
                <div style="width: 40px; margin-right: 0;">
                                    <hr style="border-width: 3px; border-color: #D00224;">
                            </div>
                <p>
                <?php

                        if (have_posts()) :
                        while (have_posts()) :
                        the_post();
                                the_content();
                        endwhile;
                        endif;

                ?>


                </p> 

        


</div>

        </div>


        


</div>

<?php get_footer(); ?>